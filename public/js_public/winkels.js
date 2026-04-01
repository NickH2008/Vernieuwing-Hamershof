fetch("../api/get_winkels.php")
    .then(res => res.json())
    .then(data => {
        const winkelList = document.getElementById("winkelList");
        data.forEach(winkel => {
            const li = document.createElement("li");
            li.textContent = winkel.winkelnaam + " - " + winkel.categorie;
            
            winkelList.appendChild(li);

        });
    })
    .catch(err => console.error("Error fetching winkels:", err));
