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
    $passwort = $_POST['passwort'];
  
    $sqlmailadresse = "SELECT * FROM benutzer WHERE email ='$email'";
    $ergebnismailadresse = $conn->query($sqlmailadresse);
  
    if($ergebnismailadresse->num_rows==1){
      echo'<p>E-Mail-Adresse im System bereits vorhanden. Bitte verwenden Sie eine andere E-Mail-Adresse.</p>';
      echo"<p><a href="benutzer_hinzufügen.php?id=">Zurück</a></p>";
    }else{
        $sql = "UPDATE benutzer SET vorname = '$vorname', nachname ='$nachname' adresse = '$adresse'  passwort = '$passwort', benutzername='$benutzername', benutzertyp='$benutzertyp', email='$email' WHERE id='$id'";
        print($conn->query($sql));
        echo(mysqli_error($conn));
        header('Location: benutzerübersicht.php');
    }
    exit();
?>