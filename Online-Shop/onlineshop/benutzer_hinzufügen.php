<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
    include("isAdmin.php");


    $vorname = $conn -> real_escape_string($_POST['vorname']);
    $nachname = $conn -> real_escape_string($_POST['nachname']);
    $adresse = $conn -> real_escape_string($_POST['adresse']);
    $benutzername = $conn -> real_escape_string($_POST['benutzername']);
    $email = $conn -> real_escape_string($_POST['email']);
    $benutzertyp = $conn -> real_escape_string($_POST['benutzertyp']);
    $passwort = $_POST['passwort'];

  
    $sqlmailadresse = "SELECT * FROM benutzer WHERE email ='$email'";
    $ergebnismailadresse = $conn->query($sqlmailadresse);

    if($ergebnismailadresse->num_rows > 0){
      echo '<p>E-Mail-Adresse im System bereits vorhanden. Bitte verwenden Sie eine andere E-Mail-Adresse.</p>';
      echo '<a class="btn btn-primary" href="benutzeruebersicht.php" role="button">Zurück</a>';
    }else{
        $sql = "INSERT INTO benutzer(vorname,nachname,adresse,benutzername,email,benutzertyp,passwort)
            VALUES('$vorname','$nachname','$adresse','$benutzername','$email','$benutzertyp','$passwort')";
        $conn->query($sql);
        echo mysqli_error($conn);
        header('Location: benutzeruebersicht.php');
    }
    exit();
?>