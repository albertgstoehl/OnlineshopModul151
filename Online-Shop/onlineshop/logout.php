<?php
    session_start();
    //Session wird beendet
    session_destroy();
    //Benutzer wird zu shop.php weitergeleitet
    header('Location: shop.php');
    exit();
?>
