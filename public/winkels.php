<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkels view</title>
    <link rel="stylesheet" href="/public/css/winkels.css" type="text/css">
</head>
<body>
<!-- tijdelijke link -->
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
    
</body>
<script src="../public/js_public/winkels.js"></script>
</html>