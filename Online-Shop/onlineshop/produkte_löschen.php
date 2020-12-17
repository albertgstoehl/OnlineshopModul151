<?php
    include("dbconnect.php");
    $id = $_GET['id'];
    $sql = 'DELETE FROM produkt WHERE produktID='.$id;

    mysqli_query($conn,$sql);

    header('Location: shop.php');
    exit;

?>