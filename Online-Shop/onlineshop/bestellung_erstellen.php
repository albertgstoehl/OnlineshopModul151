<?php
    session_start();
    include('dbconnect.php');
    if(!isset($_SESSION['benutzertyp'])){
        header('Location: login.php');
        exit();
    }

    if(count($_SESSION['warenkorb']) > 0){
        $kundeID = $_SESSION['benutzerID'];

        date_default_timezone_set("Europe/Zurich");
        $timestamp = time();
        $bestellungsDatum = date("Y-m-d",$timestamp);

        $sql = "INSERT INTO bestellung(kundeID, bestellungsDatum) VALUES('$kundeID','$bestellungsDatum')";
        $bestellung =  $conn->query($sql);
        $idBestellug = $conn->query("SELECT * FROM bestellung WHERE bestellungID = LAST_INSERT_ID()")->fetch_assoc()['bestellungID'];


        foreach ($_SESSION['warenkorb'] as $produktWert) {
            $idProdukt = $produktWert[0];
            $anzahlProdukt = $produktWert[1];
            $sql = "INSERT INTO bestellung_produkt(produktID, bestellungsID, anzahlProdukte) VALUES('$idProdukt','$idBestellug',$anzahlProdukt)";
            $res = $conn->query($sql);
        }
        unset($_SESSION['warenkorb']);
        print_r(mysqli_error($conn));
        header("Location: bestellung_bestaetigung.php?id=$idBestellug");
    }else{
        echo'<p>Keine Gegenstände in Warenkorb.</p>';
        echo"<p><a href='shop.php'>Zurück</a></p>";
    }
    //exit();
