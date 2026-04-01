<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/header.css">
    <link rel="stylesheet" href="/public/css/footer.css">
    <link rel="stylesheet" href="/public/css/tehuur.css">
<!--    <link rel="icon" href="./public/assets/logo_icon.png" type="image/png">-->
    <title>Tehuur - Winkelruimte Huren</title>
</head>
<body>
<?php include_once __DIR__ . '/../component/header.php'; ?>


<main class="tehuur-main">
    <div class="page-title-container">
        <h1>Tehuur</h1>
        <p>Start uw onderneming in winkelcentrum De Hamershof</p>
    </div>
    <section class="tehuur-aanbod">
        <h2 class="aanbod-title">Beschikbare Panden</h2>
        <p class="aanbod-subtitle">Hamershof biedt diverse mogelijkheden voor retailers, horecagelegenheden en dienstverlenende bedrijven. Bekijk hieronder ons huidige aanbod.</p>
        <div class="pand-grid">
            <div class="pand-card">
                <div class="pand-image"><img src="/public/assets/leegpandhamershof.png" alt="Ruime Winkelunit Centrum"></div>
                <span class="pand-badge beschikbaar">Beschikbaar</span>
                <h3>Ruime Winkelunit Centrum</h3>
                <ul class="pand-info">
                    <li>Locatie A - Begane Grond</li>
                    <li>125 m²</li>
                </ul>
                <p>Moderne winkelruimte in het hart van het winkelcentrum met veel daglicht en uitstekende zichtbaarheid.</p>
                <button class="meer-info-btn">Meer Informatie</button>
            </div>
            <div class="pand-card">
                <div class="pand-image"><img src="/public/assets/leegpandhamershof.png" alt="Hoekpand met Etalage"></div>
                <span class="pand-badge beschikbaar">Beschikbaar</span>
                <h3>Hoekpand met Etalage</h3>
                <ul class="pand-info">
                    <li>Locatie B - Hoofdplein</li>
                    <li>85 m²</li>
                </ul>
                <p>Strategisch gelegen hoekpand met extra etalageruimte en hoge voetgangersfrequentie.</p>
                <button class="meer-info-btn">Meer Informatie</button>
            </div>
            <div class="pand-card">
                <div class="pand-image"><img src="/public/assets/leegpandhamershof.png" alt="Compacte Retail Space"></div>
                <span class="pand-badge bijna-beschikbaar">Binnenkort Beschikbaar</span>
                <h3>Compacte Retail Space</h3>
                <ul class="pand-info">
                    <li>Locatie C - Zijgang</li>
                    <li>55 m²</li>
                </ul>
                <p>Ideale ruimte voor specialty retail of dienstverlening, volledig gerenoveerd.</p>
                <button class="meer-info-btn">Meer Informatie</button>
            </div>
            <div class="pand-card">
                <div class="pand-image"><img src="/public/assets/leegpandhamershof.png" alt="Premium Winkelruimte"></div>
                <span class="pand-badge beschikbaar">Beschikbaar</span>
                <h3>Premium Winkelruimte</h3>
                <ul class="pand-info">
                    <li>Locatie D - Entree Gebied</li>
                    <li>180 m²</li>
                </ul>
                <p>Grote winkelunit met hoge plafonds en flexibele indeling, perfect voor flagship stores.</p>
                <button class="meer-info-btn">Meer Informatie</button>
            </div>
        </div>
    </section>

    <section class="tehuur-contact-aanvraag">
        <div class="contact-blok">
            <h3>Interesse in een Pand?</h3>
            <p>Neem contact met ons op voor meer informatie over beschikbare winkelruimtes, huurvoorwaarden en bezichtigingen. Ons team helpt u graag verder om de perfecte locatie voor uw bedrijf te vinden.</p>
            <div class="contact-info">
                <div class="contact-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="#000000"/>
                    </svg>
                    <b>Email</b><a href="mailto:verhuur@hamershof.nl">verhuur@hamershof.nl</a>
                </div>
                <div class="contact-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="#000000"/>
                    </svg>
                    <b>Telefoon</b>061 355 8468
                </div>
            </div>
        </div>
        <div class="aanvraag-form-blok">
            <h3>Bezichtiging Aanvragen</h3>
            <form id="rentalForm" class="rental-form" action="/tehuur/create" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="contactName">Naam *</label>
                    <input type="text" id="contactName" name="contact_name" required>
                </div>
                <div class="form-group">
                    <label for="contactEmail">Email *</label>
                    <input type="email" id="contactEmail" name="contact_email" required>
                </div>
                <div class="form-group">
                    <label for="contactPhone">Telefoon</label>
                    <input type="tel" id="contactPhone" name="contact_phone">
                </div>
                <div class="form-group">
                    <label for="shopName">Geïnteresseerd in</label>
                    <select id="shopName" name="shop_name">
                        <option value="">Selecteer een pand</option>
                        <option value="Ruime Winkelunit Centrum">Ruime Winkelunit Centrum</option>
                        <option value="Hoekpand met Etalage">Hoekpand met Etalage</option>
                        <option value="Compacte Retail Space">Compacte Retail Space</option>
                        <option value="Premium Winkelruimte">Premium Winkelruimte</option>
                        <option value="Anders">Anders</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bericht">Bericht</label>
                    <textarea id="bericht" name="shop_description" rows="3" placeholder="Vertel ons meer over uw plannen..."></textarea>
                </div>
                <button type="submit" class="submit-btn">Verstuur Aanvraag</button>
            </form>
            <div id="responseMessage" class="response-message" style="display: none;"></div>
        </div>
    </section>

    <section class="tehuur-waarom">
        <h2>Waarom Hamershof?</h2>
        <div class="waarom-row">
            <div class="waarom-item">
                <div class="waarom-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#000000"/>
                    </svg>
                </div>
                <h4>Toplocatie</h4>
                <p>Centraal gelegen in Leusden met uitstekende bereikbaarheid en ruim 500 parkeerplaatsen.</p>
            </div>
            <div class="waarom-item">
                <div class="waarom-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 4c0-1.11-.89-2-2-2H10c-1.11 0-2 .89-2 2v2H5c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2h-3V4zM10 4h4v2h-4V4zm8 15H6v-2h12v2zm0-5H6V9h12v5z" fill="#000000"/>
                        <circle cx="9" cy="13" r="1.5" fill="#000000"/>
                        <circle cx="15" cy="13" r="1.5" fill="#000000"/>
                    </svg>
                </div>
                <h4>Hoge Footfall</h4>  
                <p>Dagelijks bezoeken duizenden klanten ons winkelcentrum voor hun dagelijkse boodschappen en winkelen.</p>
            </div>
            <div class="waarom-item">
                <div class="waarom-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 4V2C7 .9 7.9 0 9 0s2 .9 2 2v2h6V2c0-.9.9-1 2-1s2 .9 2 2v2h1c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h1zM4 6v16h16V6H4zm8 2l4 4H8l4-4z" fill="#000000"/>
                    </svg>
                </div>
                <h4>Diverse Mix</h4>
                <p>Een gevarieerde mix van winkels, restaurants en diensten zorgt voor een aantrekkelijk winkelklimaat.</p>
            </div>
        </div>
    </section>
</main>

<?php include_once __DIR__ . '/../component/footer.php'; ?>

<script>
document.getElementById('rentalForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('/tehuur/create', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const messageDiv = document.getElementById('responseMessage');
        messageDiv.style.display = 'block';
        messageDiv.className = 'response-message ' + (data.status === 'success' ? 'success' : 'error');
        messageDiv.textContent = data.message;
        
        if (data.status === 'success') {
            this.reset();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        const messageDiv = document.getElementById('responseMessage');
        messageDiv.style.display = 'block';
        messageDiv.className = 'response-message error';
        messageDiv.textContent = 'Er is een fout opgetreden. Probeer het opnieuw.';
    });
});
</script>

</body>
</html>
