// Load categories on page load
document.addEventListener("DOMContentLoaded", function() {
    const selectElement = document.getElementById("category_id");

    if (selectElement) { // ← alleen uitvoeren als het element bestaat
        fetch("/api/get_categories")
            .then(res => res.json())
            .then(data => {
                if (data.status === "success" && data.data) {
                    selectElement.innerHTML = '';
                    data.data.forEach(category => {
                        const option = document.createElement("option");
                        option.value = category.category_id;
                        option.textContent = category.category_name;
                        selectElement.appendChild(option);
                    });
                }
            })
            .catch(err => console.error("Error loading categories:", err));
    }
});

fetch("/api/get_fotos")
    .then(res => res.json())
    .then(data => {
        if (data.status === "success" && data.data) {
            const container = document.getElementById("foto_id");

            if (container) { // ← null-check toevoegen
                container.innerHTML = '';
                data.data.forEach(foto => {
                    const img = document.createElement("img");
                    img.src = "/" + foto.image_path;
                    img.alt = "Winkel foto";
                    container.appendChild(img);
                });
            }
        }
    })
    .catch(err => console.error("Error loading fotos:", err));

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