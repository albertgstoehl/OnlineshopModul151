<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if(isset($_SESSION['benutzertyp'])&&$_SESSION['benutzertyp']=="admin")
{
    echo "Benutzertyp: ".$_SESSION['benutzertyp'];
}else{
    header('Location: shop.php');
}
?>