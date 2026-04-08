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
    <link rel="stylesheet" href="/public/css/agenda.css">
    <!--    <link rel="icon" href="./public/assets/logo_icon.png" type="image/png">-->
    <title>Hamershof</title>
</head>
<body>
<?php include_once __DIR__ . '/../component/header.php'; ?>
<main>
    <div class="page-title-container">
        <h1>Agenda</h1>
        <p>Oeps! De pagina die je zoekt bestaat niet.</p>
    </div>
    <section class="agenda-events">
        <div id="calendar-type-buttons">
        <span class="calendar-btn active">
<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.66699 1.66666V4.99999" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
<path d="M13.333 1.66666V4.99999" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
<path d="M15.8333 3.33334H4.16667C3.24619 3.33334 2.5 4.07954 2.5 5.00001V16.6667C2.5 17.5872 3.24619 18.3333 4.16667 18.3333H15.8333C16.7538 18.3333 17.5 17.5872 17.5 16.6667V5.00001C17.5 4.07954 16.7538 3.33334 15.8333 3.33334Z"
      stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.5 8.33334H17.5" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
</svg>

            <small>Kalender</small>
        </span>
            <span class="list-btn">
<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.5 10H2.50833" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
<path d="M2.5 15H2.50833" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
<path d="M2.5 5H2.50833" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
<path d="M6.66699 10H17.5003" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
<path d="M6.66699 15H17.5003" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
<path d="M6.66699 5H17.5003" stroke="var(--icon-color)" stroke-width="1.66667" stroke-linecap="round"
      stroke-linejoin="round"/>
</svg>

           <small>Lijst</small>
        </span>
        </div>
        <div class="calendar-container">
            <div class="month-year">
                <span class="prev-month">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7 13L1 7L7 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                </span>
                <h1>December<span>2024</span></h1>
                <span class="next-month">
                   <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                </span>
            </div>
            <div class="week">
                <span>Ma</span>
                <span>Di</span>
                <span>Wo</span>
                <span>Do</span>
                <span>Vr</span>
                <span>Za</span>
                <span>Zo</span>
            </div>
            <div class="calendar-days">

            </div>
        </div>
    </section>

</main>
<?php include_once __DIR__ . '/../component/footer.php'; ?>
<script src="/public/js_public/agenda.js"></script>
</body>
</html>
