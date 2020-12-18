<?php
    session_start();
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Bestellungsbestätigung</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Bestellung ID: <?php echo $id?></a>
    <div class="float-left">
        <?php
            echo '<a href="shop.php" class="float-left btn btn-outline-dark">Shop</a>';
        ?>
    </div>
</nav>
<?php
    include("dbconnect.php");

    $totalAlle = 0;
    $result = $conn->query("SELECT name, anzahlProdukte, preis FROM bestellung_produkt RIGHT JOIN (produkt, bestellung)
                           ON (produkt.produktID=bestellung_produkt.produktID AND bestellung.bestellungID = bestellung_produkt.bestellungsID) WHERE bestellungsID = $id");

    $kundeID = $conn->query("SELECT * FROM bestellung WHERE bestellungID = $id")->fetch_assoc()['kundeID'];
    $kunde = $conn->query("SELECT * FROM benutzer WHERE benutzerID = $kundeID")->fetch_assoc();

    $kundeAdresse = $kunde['adresse'];
    $kundeVorame = $kunde['vorname'];
    $kundeNachname = $kunde['nachname'];

    echo "<p><strong>Lieferadresse:<br /></strong>$kundeNachname $kundeVorame<br />$kundeAdresse</p>";

    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Preis</th>";
    echo "<th>Anzahl</th>";
    echo "<th>Total</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()){
        $name = $row['name'];
        $preis = $row['preis'];
        $anzahl = $row['anzahlProdukte'];
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
</body>
</html>