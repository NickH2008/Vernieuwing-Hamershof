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

<?php require_once __DIR__ . '/../component/footer.php'; ?>

</body>
</html>