<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CDN-AG.de/login</title>
    <link rel="stylesheet" href="../../public/assets/css/login/style.css">
</head>
<body>
    <div class="login-container">
        <h2 class="header">Login</h2>
    <form method="POST">
        <div class="input-group">
            <label for="username">Benutzername</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="save-data" name="save-data">
            <label for="save-data" class="lab-checkbox">Daten speichern</label>
        </div>
        <button type="submit" class="login-btn">Login</button>
    </form>
        <a href="#" class="register">Registrieren</a>
</div>
</body>
</html>