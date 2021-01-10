<?php
    //Es wird überprüft ob der Benutzer ein Admin ist
    include("isAdmin.php");
    //Verbindung zur Datenbank wird hergestellt
    include("dbconnect.php");

    //Daten werden per POST abgerufen
    $id = $conn -> real_escape_string($_POST['id']);
    $name = $conn -> real_escape_string($_POST['name']);
    $preis = $conn -> real_escape_string($_POST['preis']);
    $lagerbestand = $conn -> real_escape_string($_POST['lagerbestand']);
    
    //Sql Command wird in Variable sql gespeichert
    $sql = "UPDATE produkt SET name = '$name', preis ='$preis', lagerbestand = '$lagerbestand' WHERE produktID='$id'";
    echo $sql;
    //Datensatz mit der gewünschten ID wird anhand der eingegebenen Daten aktualisiert
    $conn->query($sql);
    echo(mysqli_error($conn));
    //Benutzer wird zu shop.php weitergeleitet
    header('Location: shop.php');
    exit();
?>