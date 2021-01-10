<?php
    //Es wird überprüft ob der Benutzer ein Admin ist
    include("isAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap und eigenes stylesheet werden eingebunden-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Benutzerübersicht</title>
</head>
<body>
    <!--Navigationsleiste-->
    <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Benutzerübersicht</a>
    <div class="float-left">
        <a href="shop.php" class="float-left btn btn-outline-dark">Shop</a>
        <a href="benutzer_erstellen.php" class="float-left btn btn-outline-success">Neuer Benutzer</a>
        <a href="logout.php" class="float-left btn btn-outline-danger">Logout</a>
    </div>
    <!--Suchfunktion-->
    <form class="form-inline" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="" name="search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Suchen</button>
    </form>
    </nav>
    <?php
        //Benutzerliste wird ausgegeben
        include("benutzerliste.php")
    ?>
</body>
</html>