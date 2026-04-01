
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
    <link rel="stylesheet" href="/public/css/winkels.css">
    <!--    <link rel="icon" href="./public/assets/logo_icon.png" type="image/png">-->
</head>
<body>
<?php include_once __DIR__ . '/../component/header.php'; ?>

<!-- tijdelijke link -->
<br>
<br>
<br>

<a href="/admin/admin.php">admin</a>
<h1>hoi</h1>
<input type="text" id="searchInput" placeholder="Zoek een winkel">
<div id="zoek-wrapper">
    <button>alle winkels</button>
    <button>mode&accesoires</button>
    <button>eten&drinken</button>
    <button>supermarkt</button>
    <button>electronica</button>
    <button>wonen&livestyle</button>
    <button>restaurant</button>
</div>
<hr>

<div id="found"></div>

<ul id="winkelList">
    <!-- hier komen de winkels -->
</ul>

<?php include_once __DIR__ . '/../component/footer.php'; ?>

</body>
<script src="../public/js_public/winkels.js"></script>
</html>