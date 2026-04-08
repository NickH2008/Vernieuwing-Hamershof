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
    <title><?php echo htmlspecialchars($pand['title']); ?> - Tehuur</title>
</head>

<body>
    <?php
    $selectedShop = $selectedShop ?? '';
    include_once __DIR__ . '/../component/header.php';
    ?>

    <main class="tehuur-main">
        <div class="page-title-container">
            <h1><?php echo htmlspecialchars($pand['title']); ?></h1>
            <p><?php echo htmlspecialchars($pand['summary']); ?></p>
            <button type="button" class="meer-info-btn" style="width:auto; margin-top:16px;" onclick="location.href='/tehuur'">Terug naar aanbod</button>
        </div>

        <section class="tehuur-aanbod">
            <div class="pand-detail-overview">
                <div class="pand-detail-image">
                    <img src="<?php echo htmlspecialchars($pand['image']); ?>" alt="<?php echo htmlspecialchars($pand['title']); ?>">
                </div>
                <div class="pand-detail-text">
                    <h2><?php echo htmlspecialchars($pand['location']); ?> • <?php echo htmlspecialchars($pand['size']); ?></h2>
                    <p><?php echo htmlspecialchars($pand['description']); ?></p>
                    <div class="pand-detail-list">
                        <ul>
                            <?php foreach ($pand['features'] as $feature) : ?>
                                <li><?php echo htmlspecialchars($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="pand-detail-info">
                <h3>Details</h3>
                <ul class="pand-info-list">
                    <?php foreach ($pand['details'] as $label => $value) : ?>
                        <li><strong><?php echo htmlspecialchars($label); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section class="tehuur-contact-aanvraag">
            <div class="contact-aanvraag-container">
                <div class="contact-blok">
                    <h3>Meer weten over dit pand?</h3>
                    <p>Vul het aanvraagformulier in voor een bezichtiging of meer informatie over deze ruimte. Ons verhuurteam neemt snel contact met u op.</p>
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
                            <input type="text" id="shopName" name="shop_name" value="<?php echo htmlspecialchars($selectedShop); ?>" readonly>
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