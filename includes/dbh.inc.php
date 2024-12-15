<?php

$dsn = "mysql:host = localhost; dbname=lesson";
$dbusername = "root";
$dbpassword = "";


 //----------------------------------------

 if(! $dsn) {
    die("Connection failed" . mysqli_connect_error());
 } else {
     // connect to the database named lesson 
    mysqli_select_db($dsn, 'lesson');
 }

       

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
};