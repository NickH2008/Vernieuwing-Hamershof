<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- tijdelijke link -->
<a href="/public/winkels.php">winkels</a>

<form id="registerForm" method="POST" action="">
    <input type="text" name="winkelnaam" placeholder="Winkelnaam">
    <input type="text" name="category" placeholder="Categorie">
    <input id="registerForm" method="POST" enctype="multipart/form-data" placeholder="foto">
    <input type="submit">
</form>
<div id="message"></div>



</body>
<script src="js_admin/winkels.js"></script>
</html>
