const registerForm = document.getElementById("registerForm");
if(registerForm){
    registerForm.addEventListener("submit", function(e){
        e.preventDefault();

        fetch("/winkels/create", {
            method: "POST",
            body: new FormData(this)
        })
            .then(res => res.text()) // 👈 NIET json()
            .then(data => {
                    // Hier kun je de response van de server verwerken, bijvoorbeeld een succesbericht tonen
                    console.log(data);
                    alert("Winkel succesvol toegevoegd!");
                    // Optioneel: Formulier resetten na succesvolle toevoeging
                    registerForm.reset();
                })
            .catch(err => {
                console.error("Error adding winkel:", err);
                alert("Er is een fout opgetreden bij het toevoegen van de winkel.");
            });
    });
}