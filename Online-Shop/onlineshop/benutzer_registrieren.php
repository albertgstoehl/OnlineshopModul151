<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">

<div class="container">
<form method="post" action="benutzer_hinzufügen.php">
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
                    <button type="submit" class="btn btn-primary">Erstellen</button>
                    <a class="btn btn-primary" href="login.php" role="button">Zurück</a>
                </form>

</div>