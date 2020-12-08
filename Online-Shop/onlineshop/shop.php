<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_SESSION['benutzertyp']))
{
    echo "Benutzertyp: ".$_SESSION['benutzertyp'];
}else{
    echo "Anonym";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Onlineshop</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Online Shop</a>
    <div class="float-left">
        <?php
            if(isset($_SESSION['benutzertyp'])){
                if($_SESSION['benutzertyp']=="admin")
                    echo '<a href="benutzerübersicht.php" class="float-left btn btn-outline-dark">Benutzerübersicht</a>';
                    echo '<a href="logout.php" class="float-left btn btn-outline-danger">Logout</a>';
            }else{
                    echo '<a href="login.php" class="float-left btn btn-outline-success">Login</a>';
            }
        ?>
    </div>

    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Suchen</button>
    </form>
    </nav>
    <?php
        include("produkteliste.php")
    ?>
</body>
</html>