<?php
    include("isAdmin.php");
    include("dbconnect.php");

    $id = $conn -> real_escape_string($_POST['id']);
    $name = $conn -> real_escape_string($_POST['name']);
    $preis = $conn -> real_escape_string($_POST['preis']);
    $lagerbestand = $conn -> real_escape_string($_POST['lagerbestand']);
    

    $sql = "UPDATE produkt SET name = '$name', preis ='$preis', lagerbestand = '$lagerbestand' WHERE produktID='$id'";
    echo $sql;
    $conn->query($sql);
    echo(mysqli_error($conn));
    header('Location: shop.php');
    exit();
?>