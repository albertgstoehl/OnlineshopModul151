//Stylesheet wird eingebunden
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
    //Es wird überprüft ob der Benutzer ein Admin ist
    include("isAdmin.php");
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");


    //Name, Preis, Lagerbeestand wird mit POST abgerufen
    $name = $conn -> real_escape_string($_POST['name']);
    $preis = $conn -> real_escape_string($_POST['preis']);
    $lagerbestand = $conn -> real_escape_string($_POST['lagerbestand']);


  
    //Sql Command wird in Variable sql gespeichert
    $sql = "INSERT INTO produkt(name,preis,lagerbestand) VALUES('$name','$preis','$lagerbestand')";
    //Produkt wird per Query in Datenbank gespeichert
    $conn->query($sql);
    echo mysqli_error($conn);
    //Benutzer wird zurück auf die Shopseite weitergeleitet
    header('Location: shop.php');
    exit();
?>