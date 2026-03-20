const registerForm = document.getElementById("registerForm");
if(registerForm){
    registerForm.addEventListener("submit", function(e){
        e.preventDefault();

        fetch("../api/create_winkel.php", {
            method: "POST",
            body: new FormData(this)
        })
            .then(res => res.text()) // 👈 NIET json()
            .then(data => {
                    alert("Winkel succesvol toegevoegd!");
            });
    });
}