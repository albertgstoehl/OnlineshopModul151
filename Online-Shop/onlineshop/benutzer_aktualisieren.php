<?php
    include("isAdmin.php");
    include("dbconnect.php");

    $id = $conn -> real_escape_string($_POST['id']);
    $vorname = $conn -> real_escape_string($_POST['vorname']);
    $nachname = $conn -> real_escape_string($_POST['nachname']);
    $adresse = $conn -> real_escape_string($_POST['adresse']);
    $benutzername = $conn -> real_escape_string($_POST['benutzername']);
    $benutzertyp = $conn -> real_escape_string($_POST['benutzertyp']);
    $email = $conn -> real_escape_string($_POST['email']);
    $passwort = $conn -> real_escape_string($_POST['passwort']);
  
    $sqlmailadresse = "SELECT * FROM benutzer WHERE email ='$email'";
    $ergebnismailadresse = $conn->query($sqlmailadresse);
    $ergebnismailadresseArray = $conn->query($sqlmailadresse)->fetch_assoc();
    

    if($ergebnismailadresse->num_rows==1 && $ergebnismailadresseArray['email'] != $email){
      echo'<p>E-Mail-Adresse im System bereits vorhanden. Bitte verwenden Sie eine andere E-Mail-Adresse.</p>';
      echo"<p><a href='benutzeruebersicht.php?id='>Zurück</a></p>";
    }else{
        $sql = "UPDATE benutzer SET vorname = '$vorname', nachname ='$nachname', adresse = '$adresse',  passwort = '$passwort', benutzername='$benutzername', benutzertyp='$benutzertyp', email='$email' WHERE benutzerID='$id'";
        $conn->query($sql);
        echo(mysqli_error($conn));
        header('Location: benutzeruebersicht.php');
    }
    exit();
?>