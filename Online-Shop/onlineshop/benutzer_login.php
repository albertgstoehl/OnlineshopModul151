<?php
    include("dbconnect.php");


    $benutzername = $conn -> real_escape_string($_POST['benutzername']);
    $passwort = $conn -> real_escape_string($_POST['passwort']);
    
    echo $passwort;
  
    $sqllogin = "SELECT * FROM benutzer WHERE benutzername ='$benutzername'";
    $ergebnislogin = $conn->query($sqllogin)->fetch_assoc();

    echo $ergebnislogin['passwort'];

    if($passwort == $ergebnislogin['passwort']){
        session_start();
        $_SESSION['benutzertyp'] = $ergebnislogin['benutzertyp'];
        $_SESSION['vorname'] = $ergebnislogin['vorname'];
        
        header('Location: shop.php');
    }else{
        header('Location: login.php');
    }
    exit();
?>