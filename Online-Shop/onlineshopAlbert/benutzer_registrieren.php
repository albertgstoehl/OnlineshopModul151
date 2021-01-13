<head>
    <!--Bootstrap wird eingebunden-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
    <div class="container">
        <!--Post Form übergibt eingegebene Daten an benutzer_hinzufuegen.php-->
        <form method="post" action="benutzer_hinzufuegen.php">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="vorname">Vorname:</label>
                <input type="text" name="vorname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nachname">Nachname:</label>
                <input type="test" name="nachname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" name="adresse" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="benutzername">Benutzername:</label>
                <input type="text" name="benutzername" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <input type="hidden" name="benutzertyp" value="benutzer">
            <div class="form-group">
                <label for="passwort">Passwort:</label>
                <input type="password" class="form-control" name="passwort" required>
            </div>
            <button type="submit" class="btn btn-success">Registrieren</button>
            <a class="btn btn-danger" href="login.php" role="button">Zurück</a>
        </form>
    </div>
</body>