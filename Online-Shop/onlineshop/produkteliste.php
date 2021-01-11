<?php
    //Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");
    //Falls nicht angemeldet wird die Session Variable Benutzertyp leer initialisiert
    if(!isset($_SESSION['benutzertyp'])){
        $_SESSION['benutzertyp'] = "";
    }
    if(isset($_POST['search'])){
      $suchtext = $_POST['search'];
      //Falls eine Suchabfrage getätigt wurde, wird nach dem Suchtext gesucht
      $result = $conn->query("SELECT * FROM produkt WHERE name LIKE '%$suchtext%'");
    }else{
      //Sonst werden alle Datensätze angezeigt
      $result = $conn->query("SELECT * FROM produkt");
    }
    if ($result->num_rows > 0) {
        //Wenn das Resultat mindestens 1 Datenreihen enthält

        echo "<table class='table produkte'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Preis</th>";
        echo "<th>Lagerbestand</th>";
        echo "<th></th>";
        if(isset($_SESSION['benutzertyp'])&&$_SESSION['benutzertyp']=="admin") {
            //Es wird nur ein 5er Table Header benötigt wenn der Knopf bearbeiten existiert also wenn der Benutzer ein Admin ist
            echo "<th></th>";
        }
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            // Die Daten jeder Reihe werden ausgegeben
            $id = $row["produktID"];
            $name = mysqli_real_escape_string($conn,$row["name"]);
            $preis = mysqli_real_escape_string($conn,$row["preis"]);
            $lagerbestand = mysqli_real_escape_string($conn,$row["lagerbestand"]);
            echo "<tr>";
            echo "<td>".$name."</td>";
            echo "<td>".$preis."</td>";
            //Anzeige bei geringem Lagerbestand für Admin
            if($lagerbestand < 10 && $_SESSION['benutzertyp'] == "admin") {
                echo "<td><b style='color:red'>". $lagerbestand . "</b></td>";;
            }
            else
                echo "<td>".$lagerbestand."</td>";

            if(isset($_SESSION['benutzertyp'])&&$_SESSION['benutzertyp']=="admin")
            {
              //Wenn der Benutzer ein Admin ist werden die Buttons löschen und bearbeiten angezeigt
              echo "<td><a href='produkt_editieren.php?id=".$id."' class='btn btn-light edit' role='button'>Bearbeiten</a></td>";
              echo "<td><a href='produkt_loeschen.php?id=".$id."' class='btn btn-danger edit red' role='button'>Löschen</a></td>";
            }else{
                //Sons wird nur der Knopf Kaufen angezeigt
                echo "<td><a href='warenkorb_hinzufuegen.php?id=".$id."' class='btn btn-success' role='button'>Kaufen</a></td>";
            }
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