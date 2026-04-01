fetch("/api/get_winkels")
    .then(res => res.json())
    .then(data => {
        const winkelList = document.getElementById("winkelList");
        data.forEach(winkels => {
            const li = document.createElement("li");
            li.className = "winkels-li";

            const img = document.createElement("img");
            img.src = winkels.cover_image;
            img.style.width = "100px";
            img.style.height = "100px";
            img.style.padding = "15px";

            const text = document.createTextNode(winkels.winkel_name + "-" + winkels.category_id);

            li.appendChild(img);
            li.appendChild(text);

            winkelList.appendChild(li);
        });
    })
    .catch(err => console.error("Error fetching winkels:", err));

