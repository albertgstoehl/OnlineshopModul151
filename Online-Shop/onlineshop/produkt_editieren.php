<?php
    // Es wird überprüft ob der Benutzer ein Admin ist
    include("isAdmin.php");
    //Verbindung mit Datenbank wird hergestellt
    include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Produkt bearbeiten</title>

    <!--Bootstrap stylesheet wird eingebunden-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        //ID wird per GET abgerufen
        $id = $_GET["id"];
        //Sql Command wird in Variable sql gespeichert
        $sql = "SELECT * from produkt where produktID = '".$id."';";
        $res = $conn->query($sql);
        //Datensatz, welcher die richtige ID hat wird in eine Array umgewandelt
        $i = $res->fetch_assoc();
    ?>
    <!--Navigationsleiste-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Produkt bearbeiten</a>
        <div>
            <a href="shop.php" class="float-left btn btn-outline-danger">Zurück</a>
        </div>
    </nav>
    <!--POST Form gibt die Daten an produkt_aktualisieren.php weiter-->
    <div class="container">
        <form method="post" action="produkt_aktualisieren.php">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $i['name']?>" required>
            </div>
            <div class="form-group">
                <label for="preis">Preis:</label>
                <input type="number" name="preis" class="form-control" value="<?php echo $i['preis']?>" required>
            </div>
            <div class="form-group">
                <label for="lagerbestand">Lagerbestand:</label>
                <input type="number" name="lagerbestand" class="form-control" value="<?php echo $i['lagerbestand']?>" required>
            </div>
            <button type="submit" class="btn btn-success">Speichern</button>
        </form>
    </div>
</body>
</html>