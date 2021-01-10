<?php
if(!isset($_SESSION)) 
{
    //Wenn die Session nicht gestartet ist wird sie gestartet
    session_start(); 
}
if(!isset($_SESSION['benutzertyp'])||$_SESSION['benutzertyp']!="admin")
{
    //Wenn der Benutzer nicht eingeloggt ist oder ein Admin ist wird der Benutzer zu shop.php weitergeleitet
    header('Location: shop.php');
}
?>