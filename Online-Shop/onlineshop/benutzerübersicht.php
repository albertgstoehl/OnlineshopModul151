<?php
    include("isAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Benutzerübersicht</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Benutzerübersicht</a>
    <div class="float-left">
        <a href="shop.php" class="float-left btn btn-outline-dark">Shop</a>
        <a href="benutzer_erstellen.php" class="float-left btn btn-outline-success">Neuer Benutzer</a>
        <a href="logout.php" class="float-left btn btn-outline-danger">Logout</a>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Suchen</button>
    </form>
    </nav>
    <?php
        include("benutzerliste.php")
    ?>
</body>
</html>