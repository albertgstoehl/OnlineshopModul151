<?
    //Abfrage ob der Benutzer ein Admin ist
    include("isAdmin.php");
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");

    //Daten werden per POST eingelesen
    $id = $conn -> real_escape_string($_POST['id']);
    $vorname = $conn -> real_escape_string($_POST['vorname']);
    $nachname = $conn -> real_escape_string($_POST['nachname']);
    $adresse = $conn -> real_escape_string($_POST['adresse']);
    $benutzername = $conn -> real_escape_string($_POST['benutzername']);
    $benutzertyp = $conn -> real_escape_string($_POST['benutzertyp']);
    $email = $conn -> real_escape_string($_POST['email']);
    $passwort = $conn -> real_escape_string($_POST['passwort']);

    //Benutzer mit derselben E-Mail werden gesucht
    $sqlmailadresse = "SELECT * FROM benutzer WHERE email ='$email'";
    //Das Ergebnis der Abfrage wird per query abgerufen
    $ergebnismailadresse = $conn->query($sqlmailadresse);
    //Das Ergebnis wird in eine Array umgewandelt
    $ergebnismailadresseArray = $ergebnismailadresse->fetch_assoc();
    
    //Wenn es jemanden mit derselben Email gibt und die E-Mail nicht gleichgeblieben ist
    if($ergebnismailadresse->num_rows>=1 && $ergebnismailadresseArray['email'] != $email){
        //Benutzer wird über den Fehler informiert
        echo'<p>E-Mail-Adresse im System bereits vorhanden. Bitte verwenden Sie eine andere E-Mail-Adresse.</p>';
        echo"<p><a href='benutzeruebersicht.php?id='>Zurück</a></p>";
    }
    else{
        //Die Daten des Benutzers wird anhand seiner ID aktualisiert
        $sql = "UPDATE benutzer SET vorname = '$vorname', nachname ='$nachname', adresse = '$adresse',  passwort = '$passwort', benutzername='$benutzername', benutzertyp='$benutzertyp', email='$email' WHERE benutzerID='$id'";
        $conn->query($sql);
        echo(mysqli_error($conn));
        //Die Seite verweist weider auf die Benutzerübersicht
        header('Location: benutzeruebersicht.php');
    }
    exit();
?>