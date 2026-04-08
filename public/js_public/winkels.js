let categoryMap = {};

// First, load categories
fetch("/api/get_categories")
    .then(res => res.json())
    .then(data => {
        if (data.status === "success" && data.data) {
            data.data.forEach(category => {
                categoryMap[category.category_id] = category.category_name;
            });
        }
        // Then load winkels after categories are loaded
        return fetch("/api/get_winkels");
    })
    .then(res => res.json())
    .then(data => {
        console.log("Winkels data:", data);
        if (data.status === "success" && data.data) {
            const winkelList = document.getElementById("winkelList");
            data.data.forEach(winkel => {
                const li = document.createElement("li");
                li.className = "winkels-li";

                const img = document.createElement("img");
                img.src = winkel.cover_image;
                img.style.width = "100px";
                img.style.height = "100px";
                img.style.padding = "15px";

                const categoryName = categoryMap[winkel.category_id] || "Onbekend";
                const text = document.createTextNode(winkel.winkel_name + " - " + categoryName);

                li.appendChild(img);
                li.appendChild(text);

                winkelList.appendChild(li);
            });
        }
    });
fetch("/api/get_fotos")
    .then(res => res.json())
    .then(data => {
        if (data.status === "success" && data.data) {
            const fotos = document.getElementById("fotos");
            data.data.forEach(foto => {
                const li = document.createElement("li");
                li.className = "winkels-li";
                const img = document.createElement("img");
            })
        }
    })
    .catch(err => console.error("Error fetching data:", err));

