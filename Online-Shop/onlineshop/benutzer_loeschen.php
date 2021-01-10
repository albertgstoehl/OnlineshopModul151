<?php
    //Es wird überprüft ob der Benutzer ein Admin ist
    include("isAdmin.php");
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");
    //ID des Benutzers wird per GET abgerufen
    $id = $_GET['id'];
    //Das Produkt mit der richtigen ID wird gelöscht
    $sql = 'DELETE FROM benutzer WHERE benutzerID='.$id;
    mysqli_query($conn,$sql);

    //Benutzer wird zur Benutzerübersicht weitergeleitet
    header('Location: benutzeruebersicht.php');
    exit();

?>