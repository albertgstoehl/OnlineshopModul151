<?php
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");

    if(isset($_POST['search'])){
      //Falls eine Suchabfrage getätigt wurde, wird nach dem Suchtext gesucht
      $suchtext = $_POST['search'];
      $result = $conn->query("SELECT * FROM `benutzer` WHERE vorname LIKE '%$suchtext%'");
    }else{
      //Sonst werden alle Datensätze angezeigt
      $result = $conn->query("SELECT * FROM `benutzer`");
    }
    if ($result->num_rows > 0) {
        //Wenn das Resultat mindestens 1 Datenreihen enthält
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Vorname</th>";
        echo "<th>Nachname</th>";
        echo "<th>Adresse</th>";
        echo "<th>Benutzername</th>";
        echo "<th>E-Mail</th>";
        echo "<th>Benutzertyp</th>";
        echo "<th></th>";
        echo "<th></th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            // Die Daten jeder Reihe werden ausgegeben
            $id = $row["benutzerID"];
            $vorname = mysqli_real_escape_string($conn,$row["vorname"]);
            $nachname = mysqli_real_escape_string($conn,$row["nachname"]);
            $adresse = mysqli_real_escape_string($conn,$row["adresse"]);
            $benutzername = mysqli_real_escape_string($conn,$row["benutzername"]);
            $email = mysqli_real_escape_string($conn,$row["email"]);
            $benutzertyp = mysqli_real_escape_string($conn,$row["benutzertyp"]);
            echo "<tr>";
            echo "<td>".$vorname."</td>";
            echo "<td>".$nachname."</td>";
            echo "<td>".$adresse."</td>";
            echo "<td>".$benutzername."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$benutzertyp."</td>";
            //Buttons Bearbeiten und löschen werden mit der Get id versehen und zu der Datenreihe hinzugefügt
            echo "<td><a href='benutzer_editieren.php?id=".$id."' class='btn btn-light edit' role='button'>Bearbeiten</a></td>";
            echo "<td><a href='benutzer_loeschen.php?id=".$id."' class='btn btn-danger edit red' role='button'>Löschen</a></td>";
            echo "</tr>";
        }            
        echo "</table>";
      } else {
        //Wenn keine Daten verfügbar sind wird dieser Fehler ausgegeben
        echo "Keine Daten verfügbar";
        sleep(3);

      }
      $conn->close();
?>