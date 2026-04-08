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
                    <button type="button" class="meer-info-btn" onclick="location.href='/tehuur/ruime-winkelunit-centrum'">Meer Informatie</button>
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
                    <button type="button" class="meer-info-btn" onclick="location.href='/tehuur/hoekpand-met-etalage'">Meer Informatie</button>
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
                    <button type="button" class="meer-info-btn" onclick="location.href='/tehuur/compacte-retail-space'">Meer Informatie</button>
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
                    <button type="button" class="meer-info-btn" onclick="location.href='/tehuur/premium-winkelruimte'">Meer Informatie</button>
                </div>
            </div>
        </section>

        <section class="tehuur-contact-aanvraag">
            <div class="contact-aanvraag-container">
                <div class="contact-blok">
                <h3>Interesse in een Pand?</h3>
                <p>Neem contact met ons op voor meer informatie over beschikbare winkelruimtes, huurvoorwaarden en bezichtigingen. Ons team helpt u graag verder om de perfecte locatie voor uw bedrijf te vinden.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="black" />
                            <path d="M30.667 17.3333H17.3337C16.4132 17.3333 15.667 18.0794 15.667 18.9999V28.9999C15.667 29.9204 16.4132 30.6666 17.3337 30.6666H30.667C31.5875 30.6666 32.3337 29.9204 32.3337 28.9999V18.9999C32.3337 18.0794 31.5875 17.3333 30.667 17.3333Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M32.3337 19.8333L24.8587 24.5833C24.6014 24.7444 24.3039 24.8299 24.0003 24.8299C23.6967 24.8299 23.3993 24.7444 23.142 24.5833L15.667 19.8333" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <b>Email</b><a href="mailto:verhuur@hamershof.nl">verhuur@hamershof.nl</a>
                    </div>
                    <div class="contact-item">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="black" />
                            <path d="M32.3332 28.0999V30.5999C32.3341 30.832 32.2866 31.0617 32.1936 31.2744C32.1006 31.487 31.9643 31.6779 31.7933 31.8348C31.6222 31.9917 31.4203 32.1112 31.2005 32.1855C30.9806 32.2599 30.7477 32.2875 30.5165 32.2666C27.9522 31.988 25.489 31.1117 23.3249 29.7083C21.3114 28.4288 19.6043 26.7217 18.3249 24.7083C16.9165 22.5343 16.0401 20.0591 15.7665 17.4833C15.7457 17.2528 15.7731 17.0206 15.8469 16.8013C15.9208 16.582 16.0395 16.3805 16.1955 16.2096C16.3515 16.0387 16.5414 15.9022 16.753 15.8087C16.9647 15.7152 17.1935 15.6668 17.4249 15.6666H19.9249C20.3293 15.6626 20.7214 15.8058 21.028 16.0695C21.3346 16.3332 21.5349 16.6995 21.5915 17.0999C21.697 17.9 21.8927 18.6855 22.1749 19.4416C22.287 19.7399 22.3112 20.064 22.2448 20.3757C22.1783 20.6873 22.0239 20.9733 21.7999 21.1999L20.7415 22.2583C21.9278 24.3445 23.6552 26.072 25.7415 27.2583L26.7999 26.1999C27.0264 25.9759 27.3125 25.8215 27.6241 25.755C27.9358 25.6885 28.2599 25.7128 28.5582 25.8249C29.3143 26.107 30.0998 26.3027 30.8999 26.4083C31.3047 26.4654 31.6744 26.6693 31.9386 26.9812C32.2029 27.2931 32.3433 27.6912 32.3332 28.0999Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
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
            </div>
        </section>

        <section class="tehuur-waarom">
            <h2>Waarom Hamershof?</h2>
            <div class="waarom-row">
                <div class="waarom-item">
                    <div class="waarom-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="black" />
                            <path d="M41.3337 29.6666C41.3337 35.4918 34.8715 41.5584 32.7015 43.4321C32.4993 43.5841 32.2533 43.6663 32.0003 43.6663C31.7474 43.6663 31.5013 43.5841 31.2992 43.4321C29.1292 41.5584 22.667 35.4918 22.667 29.6666C22.667 27.1912 23.6503 24.8173 25.4007 23.0669C27.151 21.3166 29.525 20.3333 32.0003 20.3333C34.4757 20.3333 36.8496 21.3166 38.6 23.0669C40.3503 24.8173 41.3337 27.1912 41.3337 29.6666Z" stroke="white" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M32 33.1667C33.933 33.1667 35.5 31.5997 35.5 29.6667C35.5 27.7338 33.933 26.1667 32 26.1667C30.067 26.1667 28.5 27.7338 28.5 29.6667C28.5 31.5997 30.067 33.1667 32 33.1667Z" stroke="white" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <h4>Toplocatie</h4>
                    <p>Centraal gelegen in Leusden met uitstekende bereikbaarheid en ruim 500 parkeerplaatsen.</p>
                </div>
                <div class="waarom-item">
                    <div class="waarom-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="black" />
                            <g clip-path="url(#clip0_345_3736)">
                                <path d="M37.8337 42.5V40.1667C37.8337 38.929 37.342 37.742 36.4668 36.8668C35.5917 35.9917 34.4047 35.5 33.167 35.5H23.8337C22.596 35.5 21.409 35.9917 20.5338 36.8668C19.6587 37.742 19.167 38.929 19.167 40.1667V42.5" stroke="white" stroke-width="2.33333" />
                                <path d="M28.4997 30.8333C31.077 30.8333 33.1663 28.744 33.1663 26.1667C33.1663 23.5893 31.077 21.5 28.4997 21.5C25.9223 21.5 23.833 23.5893 23.833 26.1667C23.833 28.744 25.9223 30.8333 28.4997 30.8333Z" stroke="white" stroke-width="2.33333" />
                                <path d="M44.833 42.4999V40.1666C44.8322 39.1326 44.4881 38.1282 43.8546 37.311C43.2211 36.4938 42.3342 35.9101 41.333 35.6516" stroke="white" stroke-width="2.33333" />
                                <path d="M36.667 21.6516C37.6708 21.9086 38.5605 22.4924 39.1959 23.311C39.8313 24.1295 40.1761 25.1362 40.1761 26.1724C40.1761 27.2086 39.8313 28.2154 39.1959 29.0339C38.5605 29.8525 37.6708 30.4363 36.667 30.6933" stroke="white" stroke-width="2.33333" />
                            </g>
                            <defs>
                                <clipPath id="clip0_345_3736">
                                    <rect width="28" height="28" fill="white" transform="translate(18 18)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <h4>Hoge Footfall</h4>
                    <p>Dagelijks bezoeken duizenden klanten ons winkelcentrum voor hun dagelijkse boodschappen en winkelen.</p>
                </div>
                <div class="waarom-item">
                    <div class="waarom-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="black" />
                            <path d="M29.6667 21.5H21.5V29.6667H29.6667V21.5Z" stroke="white" stroke-width="2.33333" />
                            <path d="M42.4997 21.5H34.333V29.6667H42.4997V21.5Z" stroke="white" stroke-width="2.33333" />
                            <path d="M42.4997 34.3333H34.333V42.4999H42.4997V34.3333Z" stroke="white" stroke-width="2.33333" />
                            <path d="M29.6667 34.3333H21.5V42.4999H29.6667V34.3333Z" stroke="white" stroke-width="2.33333" />
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