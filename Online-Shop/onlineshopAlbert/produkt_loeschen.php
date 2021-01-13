<?php
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");
    //ID wird per GET abgerufen
    $id = $_GET['id'];
    //Sql Command wird in Variable sql gespeichert
    $sql = 'DELETE FROM produkt WHERE produktID='.$id;
    //Der Datensatz mit der gewünschten ID wird gelöscht
    mysqli_query($conn,$sql);

    //Benutzer wird auf die Shopseite zurückgeleitet
    header('Location: shop.php');
    exit();

?>