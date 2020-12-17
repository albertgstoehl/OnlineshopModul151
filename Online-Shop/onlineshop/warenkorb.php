<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Warenkorb</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Warenkorb</a>
    <div class="float-left">
        <?php
            echo '<a href="shop.php" class="float-left btn btn-outline-dark">Shop</a>';
        echo '<a href="shop.php" class="float-left btn btn-outline-success">Kasse</a>';
        ?>
    </div>
</nav>
<?php
include("warenkorbliste.php")
?>
</body>
</html>
