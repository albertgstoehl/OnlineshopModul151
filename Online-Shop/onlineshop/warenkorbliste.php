<?php
    // Verbindung zu Datenbank wird hergestellt
    include("dbconnect.php");

    //Session Array "Warenkorb" wird erstellt wenn es noch nicht existiert
    if(!isset($_SESSION['warenkorb'])){
        $_SESSION['warenkorb'] = array();
    }

    //Total der Produkte im Warenkorb wird mit 0 initialisiert
    $totalAlle = 0;

    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Preis</th>";
    echo "<th>Anzahl</th>";
    echo "<th>Total</th>";
    echo "<th></th>";
    echo "</tr>";
    //For schleife die jedes Element des Warenkorbs durchgeht
    foreach ($_SESSION['warenkorb'] as $produktSchlüssel => $produktWerte){
        // Die ID des Produktes befindet sich in der ersten Position der zweidimensionalen Array sie wird der Variable ID übergeben
        $id = $_SESSION['warenkorb'][$produktSchlüssel][0];
        //Anhand der ID wird das Produkt von der Datenbank abgerufen und in eine array gespeichert.
        $result = $conn->query("SELECT * FROM produkt WHERE produktID = '$id'")->fetch_assoc();
        //Name, Preis werden abgerufen und in Variablen gespeichert
        $name = $result['name'];
        $preis = $result['preis'];
        //Die Anzahl der Produkte werden in der zweiten Position der zweidimensionalen Array Warenkorb abgerufen und in der Variable Anzahl gespeichert
        $anzahl = $_SESSION['warenkorb'][$produktSchlüssel][1];
        //Das Total des Produktes wird ausgerechnet anhand des Preises und der Anzahl
        $total = $anzahl * $preis;
        //Das Total des Produktes wird zum total aller Produkte hinzugerechnet
        $totalAlle = $totalAlle + $total;

        //Die abgerufenen Daten werden auf der Website angezeigt und können entfernt werden
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$preis."</td>";
        echo "<td>".$anzahl."</td>";
        echo "<td>".$total." Fr.</td>";
        echo "<td><a href='warenkorb_loeschen.php?id=".$id."' class='btn btn-danger edit red' role='button'>Entfernen</a></td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    //Total wird angezeigt
    echo "<td><u>".$totalAlle." Fr.</u></td>";
    echo "<td></td>";
    echo "</tr>";

    echo "</table>";


    $conn->close();
?>