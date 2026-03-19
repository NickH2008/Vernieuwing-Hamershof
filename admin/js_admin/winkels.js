console.log("Winkels JS geladen");
const registerForm = document.getElementById("registerForm");
if(registerForm){
    registerForm.addEventListener("submit", function(e){
        e.preventDefault();

        fetch("../api/create_winkel.php", {
            method: "POST",
            body: new FormData(this)
        })
            .then(res => res.json())
            .then(data => {
                console.log(data); // 👈 kijk wat je echt terugkrijgt
                if (data.status === "success"){
                    alert(data.message)
                } else {
                    document.getElementById("message").innerText = data.message;
                }
            });
    });
}