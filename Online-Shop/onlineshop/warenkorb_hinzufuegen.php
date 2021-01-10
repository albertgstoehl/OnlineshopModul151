<?php
    session_start();
    //ID wird per GET abgerufen
    $id = $_GET['id'];
    $existiert = false;

    foreach ($_SESSION['warenkorb'] as $produktSchlüssel => $produktWerte) {
        if ($produktWerte[0] == $id) {
            $_SESSION['warenkorb'][$produktSchlüssel][1]++;
            $existiert = true;
        }
    }


    if($existiert==false){
        $_SESSION['warenkorb'][] = [$id,1];
    }
    header('Location: shop.php');
