<!DOCTYPE html>
<html lang="de">
<head>
    <title>Benutzer bearbeiten</title>
    <!--Bootstrap und eigenes Stylesheet wird eingebunden-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <!--Navigationsleiste-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Benutzer bearbeiten</a>
        <div>
            <a href="benutzeruebersicht.php" class="float-left btn btn-outline-danger">Zurück</a>
        </div>
    </nav>
    <?php
        //Abfrage ob der Benutzer ein Admin ist
        include("isAdmin.php");
        //ID wird per GET abgerufen
        $id = $_GET["id"];
        //Verbindung zu Datenbank wird hergestellt
        include("dbconnect.php");
        //Benutzer mit der abgerufenen ID wird angefragt
        $sql = "SELECT * from benutzer where benutzerID = '".$id."';";
        $res = $conn->query($sql);
        //Das Ergebnis der Abfrage wird in ein Array umgewandelt
        $i = $res->fetch_assoc();
    ?>
    <!-- Inhalt der Array wird in die gewünschten Felder übertragen -->
    <div class="container">
        <form method="post" action="benutzer_aktualisieren.php">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="form-group">
                <label for="vorname">Vorname:</label>
                <input type="text" name="vorname" class="form-control" value="<?php echo $i['vorname']?>" required>
            </div>
            <div class="form-group">
                <label for="nachname">Nachname:</label>
                <input type="test" name="nachname" class="form-control" value="<?php echo $i['nachname']?>" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" name="adresse" class="form-control" value="<?php echo $i['adresse']?>" required>
            </div>
            <div class="form-group">
                <label for="benutzername">Benutzername:</label>
                <input type="text" name="benutzername" class="form-control" value="<?php echo $i['benutzername']?>" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $i['email']?>" required>
            </div>
            <div class="form-group">
                <label for="benutzertyp">Benutzertyp:</label>
                <input type="text" class="form-control" name="benutzertyp" value="<?php echo $i['benutzertyp']?>" required>
            </div>
            <!-- Da das Passwort nicht geändert werden soll wird es versteckt -->
            <input type="hidden" class="form-control" name="passwort" value="<?php echo $i['passwort']?>" required>
            <button type="submit" class="btn btn-success">Speichern</button>
        </form>
    </div>
</body>
</html>