<?php
    session_start();
    //Verbindung zu Datenbank wird hergestellt
    include('dbconnect.php');
    //Wenn der Benutzer nicht eingeloggt ist muss er sich vor dem bestellen zuerst einloggen
    if(!isset($_SESSION['benutzertyp'])){
        // Benutzer wird zu login.php weitergeleitet
        header('Location: login.php');
        exit();
    }

    //Wenn etwas im Warenkorb ist
    if(count($_SESSION['warenkorb']) > 0){
        //Die KundenID wird anhand der Session Variable benutzerID abgerufen
        $kundeID = $_SESSION['benutzerID'];

        //Das jetztige Datum und Zeitstempel wird abgerufen
        date_default_timezone_set("Europe/Zurich");
        $timestamp = time();
        $bestellungsDatum = date("Y-m-d",$timestamp);

        //Die Bestellung wird in Der Datenbank gepeichert
        $sql = "INSERT INTO bestellung(kundeID, bestellungsDatum) VALUES('$kundeID','$bestellungsDatum')";
        $bestellung =  $conn->query($sql);
        //Die ID der gerade erstellten Bestellung wird abgerufen
        $idBestellug = $conn->query("SELECT * FROM bestellung WHERE bestellungID = LAST_INSERT_ID()")->fetch_assoc()['bestellungID'];

        //Foreach schlaufe jede Array in der Array Warenkorb wird durchgegangen und wird als produktWert bezeichnet
        foreach ($_SESSION['warenkorb'] as $produktWert) {
            //Die Werte ID und Anzahl werden der Array entnommen
            $idProdukt = $produktWert[0];
            $anzahlProdukt = $produktWert[1];
            //Für jedes Produkt wird ein Eintrag in der Tabelle bestellung_produkt hinterlegt in welchem, die ID des Produktes, die ID der Bestellung und die Anzahl des Produktes gespeichert wird.
            $sql = "INSERT INTO bestellung_produkt(produktID, bestellungsID, anzahlProdukte) VALUES('$idProdukt','$idBestellug',$anzahlProdukt)";
            $res = $conn->query($sql);
        }
        //Warenkorb wird geleert.
        unset($_SESSION['warenkorb']);
        //Evtl. Fehler werden ausgegeben
        print_r(mysqli_error($conn));
        // Benutzer wird zu bestellung_bestaetigung.php weitergeleitet und übergibt mithilfe der GET Methode die ID der Bestellung
        header("Location: bestellung_bestaetigung.php?id=$idBestellug");
    }else{
        //Wenn keine Elemente im Warenkorb sind wird der Benutzer über den Fehler informiert
        echo'<p>Keine Gegenstände in Warenkorb.</p>';
        echo"<p><a href='shop.php'>Zurück</a></p>";
    }
    exit();
