<?php
    session_start();
    //ID wird per GET abgerufen
    $id = $_GET['id'];

    foreach ($_SESSION['warenkorb'] as $produktSchlüssel => $produktWerte){
        // Die ID des Produktes befindet sich in der ersten Position der zweidimensionalen Array sie wird der Variable idProdukt übergeben
        $idProdukt = $_SESSION['warenkorb'][$produktSchlüssel][0];

        if($idProdukt == $id){
            //Wenn die ID des Produktes der gewünschten ID entspricht wird 1 von der Anzahl abgezogen
            $_SESSION['warenkorb'][$produktSchlüssel][1] -= 1;
            //Wenn die Anzahl der Produkte null oder weniger ist wird das Produkt aus dem Warenkorb entfernt.
            if($_SESSION['warenkorb'][$produktSchlüssel][1] <= 0){
                unset($_SESSION['warenkorb'][$produktSchlüssel]);
            }
        }
    }

    //Benutzer wird auf die Warenkorbseite zurückgeleitet
    header('Location: warenkorb.php');
    exit();