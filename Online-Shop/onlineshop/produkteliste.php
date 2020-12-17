<?php
    include("dbconnect.php");
    if(isset($_POST['search'])){
      $suchtext = $_POST['search'];
      $result = $conn->query("SELECT * FROM produkt WHERE name LIKE '%$suchtext%'");
    }else{
      $result = $conn->query("SELECT * FROM produkt");
    }
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Preis</th>";
        echo "<th>Lagerbestand</th>";
        echo "<th></th>";
        echo "<th></th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            $id = $row["produktID"];
            $name = mysqli_real_escape_string($conn,$row["name"]);
            $preis = mysqli_real_escape_string($conn,$row["preis"]);
            $lagerbestand = mysqli_real_escape_string($conn,$row["lagerbestand"]);
            echo "<tr>";
            echo "<td>".$name."</td>";
            echo "<td>".$preis."</td>";
            echo "<td>".$lagerbestand."</td>";
            if(isset($_SESSION['benutzertyp'])&&$_SESSION['benutzertyp']=="admin")
            {
              echo "<td><a href='produkt_editieren.php?id=".$id."' class='btn btn-primary edit' role='button'>Bearbeiten</a></td>";
              echo "<td><a href='produkt_loeschen.php?id=".$id."' class='btn btn-danger edit red' role='button'>Löschen</a></td>";
            }else{
                echo "<td><a href='warenkorb_hinzufuegen.php?id=".$id."' class='btn btn-success' role='button'>Kaufen</a></td>";
            }
            echo "</tr>";
        }            
        echo "</table>";
      } else {
        echo "Keine Daten verfügbar";
        sleep(3);

      }
      $conn->close();
?>