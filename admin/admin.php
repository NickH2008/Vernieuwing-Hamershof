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

    <label for="category_id">Kies een categorie:</label>
    <select name="category_id" id="category_id">
        <option value="">Categorieën laden...</option>
    </select>

    <input type="text" name="description" placeholder="Beschrijving">

    <input type="file" name="cover_image" accept="image/*">

    <input type="file" name="logo" accept="image/*">


    <input type="tel" name="phone" placeholder="Telefoonnummer">

    <input type="email" name="email" placeholder="E-mail">

    <input type="text" name="website" placeholder="Website">

    <input type="text" name="location" placeholder="Locatie">

    <input type="submit">
</form>

<div id="message"></div>



</body>
<script src="js_admin/admin.js"></script>
</html>
