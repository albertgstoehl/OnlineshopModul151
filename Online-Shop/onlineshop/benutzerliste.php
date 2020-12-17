<?php
    include("dbconnect.php");
    if(isset($_POST['search'])){
      $suchtext = $_POST['search'];
      $result = $conn->query("SELECT * FROM `benutzer` WHERE vorname LIKE '%$suchtext%'");
    }else{
      $result = $conn->query("SELECT * FROM `benutzer`");
    }
    if ($result->num_rows > 0) {
        // output data of each row
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
            echo "<td><a href='benutzer_editieren.php?id=".$id."' class='btn btn-primary edit' role='button'><i class='material-icons md-18'>Bearbeiten</i></a></td>";
            echo "<td><a href='benutzer_loeschen.php?id=".$id."' class='btn btn-danger edit red' role='button'><i class='material-icons md-18'>Löschen</i></a></td>";
            echo "</tr>";
        }            
        echo "</table>";
      } else {
        echo "Keine Daten verfügbar";
        sleep(3);

      }
      $conn->close();
?>