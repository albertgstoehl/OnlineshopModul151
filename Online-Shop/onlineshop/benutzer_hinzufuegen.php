<!--Bootstrap wird eingebunden-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
    //Abfrage ob der Benutzer ein Admin ist
    include("isAdmin.php");
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");

    //Daten werden per POST eingelesen
    $vorname = $conn -> real_escape_string($_POST['vorname']);
    $nachname = $conn -> real_escape_string($_POST['nachname']);
    $adresse = $conn -> real_escape_string($_POST['adresse']);
    $benutzername = $conn -> real_escape_string($_POST['benutzername']);
    $email = $conn -> real_escape_string($_POST['email']);
    $benutzertyp = $conn -> real_escape_string($_POST['benutzertyp']);
    $passwort = password_hash($_POST['passwort'], PASSWORD_DEFAULT);

    //Benutzer mit derselben E-Mail werden gesucht
    $sqlmailadresse = "SELECT * FROM benutzer WHERE email ='$email'";
    //Das Ergebnis der Abfrage wird per query abgerufen
    $ergebnismailadresse = $conn->query($sqlmailadresse);

//Wenn es jemanden mit derselben Email gibt
    if($ergebnismailadresse->num_rows > 0){
        //Benutzer wird über den Fehler informiert
        echo '<p>E-Mail-Adresse im System bereits vorhanden. Bitte verwenden Sie eine andere E-Mail-Adresse.</p>';
        echo '<a class="btn btn-primary" href="benutzeruebersicht.php" role="button">Zurück</a>';
    }else{
        // Benutzer wird erstellt
        $sql = "INSERT INTO benutzer(vorname,nachname,adresse,benutzername,email,benutzertyp,passwort)
            VALUES('$vorname','$nachname','$adresse','$benutzername','$email','$benutzertyp','$passwort')";
        $conn->query($sql);
        echo mysqli_error($conn);
        header('Location: benutzeruebersicht.php');
    }
    exit();
?>