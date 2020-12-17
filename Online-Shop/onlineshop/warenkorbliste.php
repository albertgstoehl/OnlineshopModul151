<?php
    include("dbconnect.php");

    $totalAlle = 0;

    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Preis</th>";
    echo "<th>Anzahl</th>";
    echo "<th>Total</th>";
    echo "</tr>";
    for($i=0;$i<count($_SESSION['warenkorb']);$i++){
        $id = $_SESSION['warenkorb'][$i][0];
        $result = $conn->query("SELECT * FROM produkt WHERE produktID = '$id'")->fetch_assoc();
        $name = $result['name'];
        $preis = $result['preis'];
        $anzahl = $_SESSION['warenkorb'][$i][1];
        $total = $anzahl * $preis;

        $totalAlle = $totalAlle + $total;

        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$preis."</td>";
        echo "<td>".$anzahl."</td>";
        echo "<td>".$total." Fr.</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><u>".$totalAlle." Fr.</u></td>";
    echo "</tr>";

    echo "</table>";


    $conn->close();
?>