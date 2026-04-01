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

<form id="registerForm" method="POST" enctype="multipart/form-data">

    <input type="text" name="winkel_name" placeholder="Winkelnaam">

    <label for="categorie">Kies een categorie:</label>
    <select name="category_id" id="category_id">
        <option value="mode&accesoires">mode & accesoires</option>
        <option value="eten&drinken">eten & drinken</option>
        <option value="supermarkt">supermarkt</option>
        <option value="electronica">electronica</option>
        <option value="wonen&livestyle">wonen & livestyle</option>
        <option value="restaurant">restaurant</option>
    </select>

    <input type="file" name="picture" accept="image/*">

    <input type="submit">
</form>

<div id="message"></div>



</body>
<script src="js_admin/admin.js"></script>
</html>
