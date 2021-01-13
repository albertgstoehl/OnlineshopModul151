<?php
    //Abfrage ob der Benutzer ein Admin ist
    include("isAdmin.php");
?>
<head>
    <title>Neuen Benutzer hinzufügen</title>
    <!--Bootstrap wird eingebunden-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
    <!--Navigationsleiste-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Benutzer erstellen</a>
        <div>
            <a href="benutzeruebersicht.php" class="float-left btn btn-outline-danger">Zurück</a>
        </div>
    </nav>
    <!--POST Form sendet Daten an benutzer_hinzufuegen.php weiter-->
    <div class="container">
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
            <div class="form-group">
                <label for="benutzertyp">Benutzertyp:</label>
                <select class="form-control" name="benutzertyp">
                    <option>admin</option>
                    <option>benutzer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passwort">Passwort:</label>
                <input type="text" class="form-control" name="passwort" required>
            </div>
            <button type="submit" class="btn btn-primary">Erstellen</button>
        </form>
    </div>
</body>