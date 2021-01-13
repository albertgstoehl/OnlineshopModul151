<?php
    //Es wird überprüft ob der Benutzer ein Admin ist.
    include("isAdmin.php");
?>
<head>
    <title>Neues Produkt hinzufügen</title>
    <!--Bootstrap stylesheet wird eingebunden-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
    <!--Navigationsleiste-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Produkt erstellen</a>
        <div>
            <a href="shop.php" class="float-left btn btn-outline-danger">Zurück</a>
        </div>
    </nav>
    <!--POST Form leitet die Daten an produkt_hinzufuegen.php weiter-->
    <div class="container">
        <form method="post" action="produkt_hinzufuegen.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label for="preis">Preis:</label>
                <input type="test" name="preis" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label for="lagerbestand">Lagerbestand:</label>
                <input type="text" name="lagerbestand" class="form-control" value="" required>
            </div>
            <button type="submit" class="btn btn-success">Speichern</button>
        </form>
    </div>
</body>