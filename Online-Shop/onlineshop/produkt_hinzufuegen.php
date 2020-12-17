<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
    include("isAdmin.php");
    include("dbconnect.php");


    $name = $conn -> real_escape_string($_POST['name']);
    $preis = $conn -> real_escape_string($_POST['preis']);
    $lagerbestand = $conn -> real_escape_string($_POST['lagerbestand']);


  

    $sql = "INSERT INTO produkt(name,preis,lagerbestand) VALUES('$name','$preis','$lagerbestand')";
    $conn->query($sql);
    echo mysqli_error($conn);
    header('Location: shop.php');
    exit();
?>