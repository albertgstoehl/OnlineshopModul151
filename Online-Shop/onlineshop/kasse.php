<?php
    session_start();
    include('dbconnect.php');
    if(!isset($_SESSION['benutzertyp'])){
        header('Location: login.php');
        exit();
    }
    $kundeID = $_SESSION['benutzerID'];

    date_default_timezone_set("Europe/Zurich");
    $timestamp = time();
    $bestellungsDatum = date("Y-m-d",$timestamp);

    $sql = "INSERT INTO bestellung(kundeID, bestellungsDatum) VALUES('$kundeID','$bestellungsDatum')";
    $bestellung =  $conn->query($sql);
    $idBestellug = $conn->query("SELECT * FROM bestellung WHERE bestellungID = LAST_INSERT_ID()")->fetch_assoc()['bestellungID'];


    foreach ($_SESSION['warenkorb'] as $produktWert) {
        $idProdukt = $produktWert[0];
        $sql = "INSERT INTO bestellung_produkt(produktID, bestellungsID) VALUES('$idProdukt','$idBestellug')";
        $res = $conn->query($sql);
    }
    echo mysqli_error($conn);
    //TODO Order Confirmation;