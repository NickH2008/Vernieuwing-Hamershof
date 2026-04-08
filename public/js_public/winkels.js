const categoryMap = {};
let alleWinkels = [];

fetch("/api/get_categories")
    .then(r => r.json())
    .then(d => {
        if (d.status === "success" && d.data) {
            d.data.forEach(c => categoryMap[c.category_id] = c.category_name);
        }
        return fetch("/api/get_winkels");
    })
    .then(r => r.json())
    .then(d => {
        if (d.status === "success" && d.data) {
            alleWinkels = d.data;
            toonWinkels(alleWinkels);
        }
    })
    .catch(err => console.error("Fout:", err));

function toonWinkels(winkels) {
    const list = document.getElementById("winkelList");
    list.innerHTML = '';

    winkels.forEach(w => {
        const li = document.createElement("li");
        li.className = "card";

        const coverSrc = w.cover_image ? "/" + w.cover_image : null;
        const logoSrc = w.logo ? "/" + w.logo : null;
        const coverHTML = coverSrc
            ? `<img class="card-cover" src="${coverSrc}" alt="${w.winkel_name}">`
            : `<div class="card-cover-placeholder">Geen afbeelding</div>`;

        const catName = categoryMap[w.category_id] || "Onbekend";
        const desc = w.description || "";

        li.innerHTML = `
            ${coverHTML}
            <div class="card-body">
                ${logoSrc ? `<img src="${logoSrc}" class="logo-img" alt="logo van ${w.winkel_name}">` : ""}
                <p class="card-name">${w.winkel_name}</p>
                <span class="card-category">${catName}</span>
                ${desc ? `<p class="card-desc">${desc}</p>` : ""}
            </div>
        `;

        list.appendChild(li);
    });
}

document.querySelectorAll("#zoek-wrapper button").forEach(btn => {
    btn.addEventListener("click", function() {
        const cat = this.dataset.category;

        document.querySelectorAll("#zoek-wrapper button").forEach(b => b.classList.remove("active"));
        this.classList.add("active");

        if (cat === "all") {
            toonWinkels(alleWinkels);
        } else {
            const gefilterd = alleWinkels.filter(w => String(w.category_id) === cat);
            toonWinkels(gefilterd);
        }
    });
});