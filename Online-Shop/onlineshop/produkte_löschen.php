<?php
    include("dbconnect.php");
    $id = $_GET['id'];
    $sql = 'DELETE FROM produkte WHERE produktID='.$id;

    mysqli_query($conn,$sql);

    header('Location: benutzerübersicht.php');
    exit;

?>