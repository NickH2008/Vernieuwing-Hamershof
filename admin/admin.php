<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkel beheer</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: sans-serif;
            background: #f5f5f3;
            color: #111;
            padding: 2rem;
        }

        .topbar {
            margin-bottom: 2rem;
        }

        .topbar a {
            font-size: 13px;
            color: #185fa5;
            text-decoration: none;
        }

        .topbar a:hover { text-decoration: underline; }

        .card {
            background: white;
            border: 0.5px solid #e0ddd5;
            border-radius: 12px;
            padding: 2rem;
            max-width: 560px;
        }

        h1 {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 1.5rem;
        }

        .section {
            border-top: 0.5px solid #e0ddd5;
            padding-top: 1.25rem;
            margin-top: 1.25rem;
        }

        .section-label {
            font-size: 11px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #888;
            margin-bottom: 0.75rem;
        }

        .field { margin-bottom: 12px; }

        label {
            display: block;
            font-size: 13px;
            color: #555;
            margin-bottom: 4px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 8px 10px;
            font-size: 14px;
            border: 0.5px solid #ccc;
            border-radius: 8px;
            background: white;
            color: #111;
            outline: none;
            transition: border-color 0.15s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #378add;
        }

        .file-field {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        input[type="file"] {
            font-size: 13px;
            color: #555;
        }

        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        button[type="submit"] {
            margin-top: 1.5rem;
            width: 100%;
            padding: 10px;
            font-size: 14px;
            font-weight: 500;
            background: #111;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.15s;
        }

        button[type="submit"]:hover { background: #333; }

        #message {
            margin-top: 1rem;
            font-size: 13px;
            color: #3b6d11;
        }
    </style>
</head>
<body>

<div class="topbar">
    <a href="/winkels">← Terug naar winkels</a>
</div>

<div class="card">
    <h1>Winkel toevoegen</h1>

    <form id="registerForm" method="POST" enctype="multipart/form-data">

        <div class="field">
            <label for="winkel_name">Winkelnaam</label>
            <input type="text" name="winkel_name" id="winkel_name" placeholder="bijv. Jumbo">
        </div>

        <div class="field">
            <label for="category_id">Categorie</label>
            <select name="category_id" id="category_id">
                <option value="">Laden...</option>
            </select>
        </div>

        <div class="field">
            <label for="description">Beschrijving</label>
            <input type="text" name="description" id="description" placeholder="Korte omschrijving">
        </div>

        <div class="section">
            <p class="section-label">Afbeeldingen</p>
            <div class="field">
                <label>Logo</label>
                <input type="file" name="logo" accept="image/*">
            </div>
            <div class="field">
                <label>Coverfoto</label>
                <input type="file" name="cover_image" accept="image/*">
            </div>
        </div>

        <div class="section">
            <p class="section-label">Contactgegevens</p>
            <div class="two-col">
                <div class="field">
                    <label>Telefoon</label>
                    <input type="tel" name="phone" placeholder="+31 6 ...">
                </div>
                <div class="field">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="info@winkel.nl">
                </div>
                <div class="field">
                    <label>Website</label>
                    <input type="text" name="website" placeholder="www.winkel.nl">
                </div>
                <div class="field">
                    <label>Locatie</label>
                    <input type="text" name="location" placeholder="Straat, stad">
                </div>
            </div>
        </div>

        <button type="submit">Winkel opslaan</button>
    </form>

    <div id="message"></div>
</div>

<script src="js_admin/admin.js"></script>
</body>
</html>