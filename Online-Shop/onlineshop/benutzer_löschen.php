<?php
    include("isAdmin.php");
    include("dbconnect.php");
    $id = $_GET['id'];
    $sql = 'DELETE FROM benutzer WHERE benutzerID='.$id;

    mysqli_query($conn,$sql);

    header('Location: benutzerübersicht.php');
    exit;

?>