<?php
    define('MYSQL_HOST',"localhost");  
    define('MYSQL_USER',"root");  
    define('MYSQL_PW',"Lara-piki1");
    define('MYSQL_DB',"onlineshop"); 

    $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PW, MYSQL_DB); 
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>