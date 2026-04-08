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
    <link rel="stylesheet" href="/public/css/home.css">
    <title>Document</title>
</head>
<body>
<?php require_once __DIR__ . '/../component/header.php'; ?>

<div class="home-intro">
    <video autoplay muted loop id="myVideo">
        <source src="/public/assets/Home.mp4" type="video/mp4">
    </video>
    <div class="intro-description">
        <h1>ALLES OP ÉÉN</h1>
        <h2>PLEK</h2>
        <p>Het winkelcentrum van Hamershof waar werken, wonen, winkelen, boodschappen, recreëren, cultuur, educatie en
            leisure samenkomen.</p>

        <svg width="279" height="508" viewBox="0 0 279 508" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="231.729" y1="84.9149" x2="276.255" y2="1.17367" stroke="white" stroke-width="5"/>
            <path d="M2.2074 506.492L49.152 418.202" stroke="white" stroke-width="5"/>
        </svg>
    </div>
</div>

<div class="welcome-box">
    <div class="text-box">
        <h1 class="welcome-text">Welkom bij Hamershof</h1>
        <p>Hamershof is het bruisende winkelcentrum waar iedereen zich welkom voelt. Met meer dan 50 winkels,
            restaurants en
            diensten bieden wij alles wat u nodig heeft, op één centrale locatie.</p>
        <p>Of u nu op zoek bent naar de nieuwste mode, verse boodschappen doet, of gewoon even wilt ontspannen in een
            van
            onze gezellige cafés – bij Hamershof vindt u het allemaal.</p>
        <p>Ons winkelcentrum is ontworpen met uw gemak in gedachten: ruime parkeerplaatsen, goede bereikbaarheid en een
            aangename winkelomgeving voor het hele gezin.</p>
        <div class="intro-stats">
            <div class="intro-stat">
                <span class="intro-stat-value">50+</span>
                <span class="intro-stat-label">Winkels</span>
            </div>
            <div class="intro-stat">
                <span class="intro-stat-value">500+</span>
                <span class="intro-stat-label">Parkeerplaatsen</span>
            </div>
            <div class="intro-stat">
                <span class="intro-stat-value">7</span>
                <span class="intro-stat-label">Dagen Open</span>
            </div>
        </div>
    </div>
    <div class="welcome-image">
        <img src="/public/assets/welkom.png" alt="Welkom bij Hamershof">
        <svg width="306" height="703" viewBox="0 0 306 703" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="255.557" y1="91.5245" x2="303.722" y2="0.938915" stroke="black" stroke-width="4"/>
            <line x1="1.7659" y1="701.532" x2="49.9311" y2="610.947" stroke="black" stroke-width="4"/>
        </svg>

    </div>
</div>

<div class="our-shops">
    <h1>Onze Winkels</h1>
    <p>Van mode tot horeca, van dagelijkse boodschappen tot bijzondere cadeaus. </p>
    <p>Ontdek ons uitgebreide aanbod.</p>
    <div class="shop-buttons">
        <div id="shop-button-1">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.76 6.92L32 4C32 6.12173 31.1571 8.15656 29.6569 9.65685C28.1566 11.1571 26.1217 12 24 12C21.8783 12 19.8434 11.1571 18.3431 9.65685C16.8429 8.15656 16 6.12173 16 4L7.24 6.92C6.33476 7.22159 5.56715 7.83683 5.07571 8.65469C4.58426 9.47254 4.40135 10.4391 4.56 11.38L5.72 18.32C5.79615 18.7898 6.03736 19.2171 6.40028 19.525C6.7632 19.833 7.22404 20.0014 7.7 20H12V40C12 42.2 13.8 44 16 44H32C33.0609 44 34.0783 43.5786 34.8284 42.8284C35.5786 42.0783 36 41.0609 36 40V20H40.3C40.776 20.0014 41.2368 19.833 41.5997 19.525C41.9626 19.2171 42.2038 18.7898 42.28 18.32L43.44 11.38C43.5986 10.4391 43.4157 9.47254 42.9243 8.65469C42.4328 7.83683 41.6652 7.22159 40.76 6.92Z"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1>Mode & Accessoires</h1>
            <p>18 winkels</p>
        </div>
        <div id="shop-button-2">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4L6 12V40C6 41.0609 6.42143 42.0783 7.17157 42.8284C7.92172 43.5786 8.93913 44 10 44H38C39.0609 44 40.0783 43.5786 40.8284 42.8284C41.5786 42.0783 42 41.0609 42 40V12L36 4H12Z"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6 12H42" stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32 20C32 22.1217 31.1571 24.1566 29.6569 25.6569C28.1566 27.1571 26.1217 28 24 28C21.8783 28 19.8434 27.1571 18.3431 25.6569C16.8429 24.1566 16 22.1217 16 20"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1>Supermarkten</h1>
            <p>3 winkels</p>
        </div>
        <div id="shop-button-3">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 4V18C6 20.2 7.8 22 10 22H18C19.0609 22 20.0783 21.5786 20.8284 20.8284C21.5786 20.0783 22 19.0609 22 18V4"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14 4V44" stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M42 30V4C39.3478 4 36.8043 5.05357 34.9289 6.92893C33.0536 8.8043 32 11.3478 32 14V26C32 28.2 33.8 30 36 30H42ZM42 30V44"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1>Eten & Drinken</h1>
            <p>12 winkels</p>
        </div>
        <div id="shop-button-4">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 4V8" stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M28 4V8" stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32 16C32.5304 16 33.0391 16.2107 33.4142 16.5858C33.7893 16.9609 34 17.4696 34 18V34C34 36.1217 33.1571 38.1566 31.6569 39.6569C30.1566 41.1571 28.1217 42 26 42H14C11.8783 42 9.84344 41.1571 8.34315 39.6569C6.84285 38.1566 6 36.1217 6 34V18C6 17.4696 6.21071 16.9609 6.58579 16.5858C6.96086 16.2107 7.46957 16 8 16H36C38.1217 16 40.1566 16.8429 41.6569 18.3431C43.1571 19.8434 44 21.8783 44 24C44 26.1217 43.1571 28.1566 41.6569 29.6569C40.1566 31.1571 38.1217 32 36 32H34"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 4V8" stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1>Koffie & Snacks</h1>
            <p>6 winkels</p>
        </div>
        <div id="shop-button-5">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 42V26C30 25.4696 29.7893 24.9609 29.4142 24.5858C29.0391 24.2107 28.5304 24 28 24H20C19.4696 24 18.9609 24.2107 18.5858 24.5858C18.2107 24.9609 18 25.4696 18 26V42"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6 20.0001C5.99986 19.4182 6.12667 18.8433 6.37158 18.3155C6.61648 17.7877 6.9736 17.3197 7.418 16.9441L21.418 4.94606C22.14 4.33588 23.0547 4.0011 24 4.0011C24.9453 4.0011 25.86 4.33588 26.582 4.94606L40.582 16.9441C41.0264 17.3197 41.3835 17.7877 41.6284 18.3155C41.8733 18.8433 42.0001 19.4182 42 20.0001V38.0001C42 39.0609 41.5786 40.0783 40.8284 40.8285C40.0783 41.5786 39.0609 42.0001 38 42.0001H10C8.93913 42.0001 7.92172 41.5786 7.17157 40.8285C6.42143 40.0783 6 39.0609 6 38.0001V20.0001Z"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1>Wonen & Lifestyle</h1>
            <p>8 winkels</p>
        </div>
        <div id="shop-button-6">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M38 28C40.98 25.08 44 21.58 44 17C44 14.0826 42.8411 11.2847 40.7782 9.22183C38.7153 7.15893 35.9174 6 33 6C29.48 6 27 7 24 10C21 7 18.52 6 15 6C12.0826 6 9.28473 7.15893 7.22183 9.22183C5.15893 11.2847 4 14.0826 4 17C4 21.6 7 25.1 10 28L24 42L38 28Z"
                      stroke="#1E2939" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1>Gezondheidszorg</h1>
            <p>5 winkels</p>
        </div>
    </div>

    <h2>Uitgelichte Winkels</h2>
    <div class="featured-shops">
        <div class="shop-card">
            <img src="/public/assets/shop1.png" alt="Shop 1" class="shop-image">
            <p class="shop-type">Mode</p>
            <p class="shop-time">OPEN till 15:00</p>
            <p class="shop-title">Fashion District</p>
            <p class="shop-description">Trendy kleding voor jong en oud.</p>
        </div>

        <div class="shop-card">
            <img src="/public/assets/shop2.png" alt="Shop 2" class="shop-image">
            <p class="shop-type">Horeca</p>
            <p class="shop-time">OPEN till 18:00</p>
            <p class="shop-title">Café Central</p>
            <p class="shop-description">De beste koffie in de buurt.</p>
        </div>

        <div class="shop-card">
            <img src="/public/assets/shop3.png" alt="Shop 3" class="shop-image">
            <p class="shop-type">Restaurant</p>
            <p class="shop-time">OPEN till 24:00</p>
            <p class="shop-title">Restaurant Plaza</p>
            <p class="shop-description">Internationale Gerechten.</p>
        </div>
    </div>

    <button class="view-all-shops-btn">
        Bekijk alle winkels
    </button>
</div>


<div class="home-footer">
    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M40 8H8C5.79086 8 4 9.79086 4 12V36C4 38.2091 5.79086 40 8 40H40C42.2091 40 44 38.2091 44 36V12C44 9.79086 42.2091 8 40 8Z"
              stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M44 14L26.06 25.4C25.4425 25.7869 24.7286 25.992 24 25.992C23.2714 25.992 22.5575 25.7869 21.94 25.4L4 14"
              stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <h1 class="home-footer__title">Blijf op de Hoogte</h1>
    <p class="home-footer__lead">Schrijf je in voor onze nieuwsbrief en ontvang de nieuwste aanbiedingen, evenementen en<br>
        nieuws direct in je inbox.</p>
    <button class="home-footer__cta">Inschrijven</button>
    <p class="home-footer__fineprint">Je kunt je op elk moment uitschrijven. We respecteren je privacy.</p>
</div>

<?php require_once __DIR__ . '/../component/footer.php'; ?>
</body>
</html>