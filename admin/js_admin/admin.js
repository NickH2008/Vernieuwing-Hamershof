// Load categories on page load
document.addEventListener("DOMContentLoaded", function() {
    fetch("/api/get_categories")
        .then(res => res.json())
        .then(data => {
            console.log("Debug: categories loaded", data);
            if (data.status === "success" && data.data) {
                const selectElement = document.getElementById("category_id");
                selectElement.innerHTML = ''; // Clear existing options
                
                data.data.forEach(category => {
                    const option = document.createElement("option");
                    option.value = category.category_id;
                    option.textContent = category.category_name;
                    selectElement.appendChild(option);
                });
            }
        })
        .catch(err => console.error("Error loading categories:", err));
});

const registerForm = document.getElementById("registerForm");
if(registerForm){
    registerForm.addEventListener("submit", function(e){
        e.preventDefault();

        fetch("/winkels/create", {
            method: "POST",
            body: new FormData(this)
        })
            .then(res => res.json())
            .then(data => {
                    console.log("Debug: response data", data);
                    if (data.status === "success") {
                        alert("Winkel succesvol toegevoegd!");
                        registerForm.reset();
                    } else {
                        alert("Fout: " + data.message);
                    }
                })
            .catch(err => {
                console.error("Error adding winkel:", err);
                alert("Er is een fout opgetreden bij het toevoegen van de winkel.");
            });
    });
}