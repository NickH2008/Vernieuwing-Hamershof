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
<br>
<br>

<a href="/admin/admin.php">admin</a>
<h1>hoi</h1>
<input type="text" id="searchInput" placeholder="Zoek een winkel">
<div id="zoek-wrapper">
    <button data-category="all">alle winkels</button>
    <button data-category="1">mode & accessoires</button>
    <button data-category="2">eten & drinken</button>
    <button data-category="3">supermarkt</button>
    <button data-category="4">electronica</button>
    <button data-category="5">wonen & lifestyle</button>
    <button data-category="6">restaurant</button>
</div>
<hr>

<div id="found"></div>

<ul class="grid" id="winkelList"></ul>

<?php include_once __DIR__ . '/../component/footer.php'; ?>

</body>
<script src="../public/js_public/winkels.js"></script>
</html>
