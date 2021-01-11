<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onlineshop</title>
    <!-- Bootstrap und eigenes Stylesheet werden eingebunden -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- Navigationsliste -->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Online Shop</a>
        <div class="float-left">
            <?php
                //Wenn die SESSION Variable benutzertyp initislisert ist
                if(isset($_SESSION['benutzertyp'])){
                    //Wenn der benutzertyp admin ist
                    if($_SESSION['benutzertyp']=="admin") {
                        //Buttons, welche zu Admin funktionen weiterleiten: Benutzerübersicht, Produkt hinzufügen
                        echo '<a href="benutzeruebersicht.php" class="float-left btn btn-outline-dark">Benutzerübersicht</a>';
                        echo '<a href="produkt_erstellen.php" class="float-left btn btn-outline-success">Produkt hinzufügen</a>';
                    }else{
                        // Wenn der Benutzer kein Admin ist wird ihm der Warenkorb Button angezeigt
                        echo '<a href="warenkorb.php" class="float-left btn btn-outline-success">Warenkorb</a>';
                    }
                    //Der Logut Button steht allen Benutzern, welche über ein Benutzertyp verfügen, zur verfügung
                    echo '<a href="logout.php" class="float-left btn btn-outline-danger">Logout</a>';

                }else{
                    // Die Buttons Login und Warenkorb werden angezeigt wenn kein benutzertyp gesetzt ist
                    echo '<a href="login.php" class="float-left btn btn-outline-success">Login</a>';
                    echo '<a href="warenkorb.php" class="float-left btn btn-outline-success">Warenkorb</a>';
                }
            ?>
        </div>

        <!-- Suche -->
        <form class="form-inline" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="" name="search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Suchen</button>
        </form>
    </nav>

    <?php
        //Produktliste wird abgerufen
        include("produkteliste.php")
    ?>
</body>
</html>