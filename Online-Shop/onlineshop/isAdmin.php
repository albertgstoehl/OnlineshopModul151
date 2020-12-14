<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if(isset($_SESSION['benutzertyp'])&&$_SESSION['benutzertyp']=="admin")
{
    echo "Hallo: ".$_SESSION['vorname'];
}else{
    header('Location: shop.php');
}
?>