<!DOCTYPE html>
<html lang="de">
<head>
    <title>Benutzer bearbeiten</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include("isAdmin.php");
    $id = $_GET["id"];
    include("dbconnect.php");
    $sql = "SELECT * from benutzer where benutzerID = '".$id."';";
    $res = $conn->query($sql);
    $i = $res->fetch_assoc();
?>
    <div class="container">
        <h1>Benutzer bearbeiten</h1>
        <div class="row">
            <div class="col-sm-6">
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
                    <div class="form-group">
                        <label for="passwort">Passwort:</label>
                        <input type="text" class="form-control" name="passwort" value="<?php echo $i['passwort']?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="benutzeruebersicht.php" role="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>