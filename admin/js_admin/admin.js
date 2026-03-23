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
                    alert("Winkel succesvol toegevoegd!");
            });
    });
}