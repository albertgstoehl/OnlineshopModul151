<?php
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");

    //Benutzername und Passowrt werden per Post abgefragt
    $benutzername = $conn -> real_escape_string($_POST['benutzername']);
    $passwort = $conn -> real_escape_string($_POST['passwort']);

    //Der Benutzer mit dem eingegebenen Benutzernamen wird in der Datenbank gesucht und die Datenreihe wird zu einer Array
    $sqllogin = "SELECT * FROM benutzer WHERE benutzername ='$benutzername'";
    $ergebnislogin = $conn->query($sqllogin)->fetch_assoc();


    if(password_verify($passwort, $ergebnislogin['passwort'])){
        //Wenn das Passwort richtig ist
        session_start();
        //BenutzerID wird abgerufen
        $benutzerID = $ergebnislogin['benutzerID'];

        //Session Variablen Benutzertyp, Name, Email und BenutzerID werden deklariert
        $_SESSION['benutzertyp'] = $ergebnislogin['benutzertyp'];
        $_SESSION['benutzerID'] = $benutzerID;
        $_SESSION['email'] = $ergebnislogin['email'];
        $_SESSION['name'] = $ergebnislogin['vorname'];
        //Benutzer wird zu shop.php weitergeleitet
        header('Location: shop.php');
    }else{
        //Sonst wird der Benutzer wieder zu der Login seite weitergeleitet
        header('Location: login.php');
    }
    exit();
?>