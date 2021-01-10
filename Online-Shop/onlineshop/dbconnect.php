<?php
    //Umgebungsvariablen der Datenbank werden deklariert
    define('MYSQL_HOST',"localhost");  
    define('MYSQL_USER',"root");  
    define('MYSQL_PW',"");
    define('MYSQL_DB',"onlineshop"); 

    //Verbindung wird aufgebaut
    $conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PW, MYSQL_DB); 

    //Evtl. Fehler werden ausgegeben
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>