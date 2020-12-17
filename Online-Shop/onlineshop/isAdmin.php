<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if(!isset($_SESSION['benutzertyp'])||$_SESSION['benutzertyp']!="admin")
{
    header('Location: shop.php');
}
?>