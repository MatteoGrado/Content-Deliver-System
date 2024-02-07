<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CDN-AG.de/register</title>
    <link rel="stylesheet" href="../../public/assets/css/register/style.css">
</head>
<body>
    <div class="register-container">
        <h2 class="header">Registrieren</h2>
    <form method="POST">
        <div class="input-group">
            <label for="first-name">Vorname</label>
            <input type="text" id="first-name" name="first-name" required>
        </div>
        <div class="input-group">
            <label for="last-name">Nachname</label>
            <input type="text" id="last-name" name="last-name" required>
        </div>
        <div class="input-group">
            <label for="email">E-Mail Adresse</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="username">Benutzername</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="register-btn">Registrieren</button>
    </form>
    <p><a href="#">Anmelden</a></p>
    <p>
        <a href="#">AGB's</a>
        <a href="#">Impressum</a>
    </p>
</div>
</body>
</html>