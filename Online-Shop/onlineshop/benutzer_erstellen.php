<?php
    session_start();
    /*include("dbconnect.php");
    if(isset($_SESSION['benutzer']))
    {
    echo "Benutzer: ".$_SESSION['benutzer'];
    }else{
    header('Location: index.php');
    }*/
?>
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
                    <a class="btn btn-primary" href="benutzeruebersicht.php" role="button">Zurück</a>
                </form>

</div>