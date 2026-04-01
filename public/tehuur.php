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
    <section class="tehuur-hero">
        <h1 class="tehuur-title">Te Huur</h1>
        <p class="tehuur-subtitle">Start uw onderneming in winkelcentrum De Hamershof</p>
    </section>

    <section class="tehuur-aanbod">
        <h2 class="aanbod-title">Beschikbare Panden</h2>
        <p class="aanbod-subtitle">Hamershof biedt diverse mogelijkheden voor retailers, horecagelegenheden en dienstverlenende bedrijven. Bekijk hieronder ons huidige aanbod.</p>
        <div class="pand-grid">
            <div class="pand-card">
                <div class="pand-image"><img src="/public/assets/pand1.jpg" alt="Ruime Winkelunit Centrum"></div>
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
                <div class="pand-image"><img src="/public/assets/pand2.jpg" alt="Hoekpand met Etalage"></div>
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
                <div class="pand-image"><img src="/public/assets/pand3.jpg" alt="Compacte Retail Space"></div>
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
                <div class="pand-image"><img src="/public/assets/pand4.jpg" alt="Premium Winkelruimte"></div>
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
                <div><b>Email</b><br><a href="mailto:verhuur@hamershof.nl">verhuur@hamershof.nl</a></div>
                <div><b>Telefoon</b><br>061 355 8468</div>
            </div>
        </div>
        <div class="aanvraag-form-blok">
            <h3>Bezichtiging Aanvragen</h3>
            <form id="rentalForm" class="rental-form" action="/api/create_rental" method="POST" enctype="multipart/form-data">
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
                <div class="waarom-icon">📍</div>
                <h4>Toplocatie</h4>
                <p>Centraal gelegen in Leusden met uitstekende bereikbaarheid en ruim 500 parkeerplaatsen.</p>
            </div>
            <div class="waarom-item">
                <div class="waarom-icon">👣</div>
                <h4>Hoge Footfall</h4>
                <p>Dagelijks bezoeken duizenden klanten ons winkelcentrum voor hun dagelijkse boodschappen en winkelen.</p>
            </div>
            <div class="waarom-item">
                <div class="waarom-icon">🍽️</div>
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
    
    fetch('/api/create_rental', {
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
