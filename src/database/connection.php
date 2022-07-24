<?php

$host       = "localhost";
$dbUser     = "root";
$dbPassword = "";
$dbName     = "hotel";

try{ 
    $connect = new PDO("mysql: host=$host; dbname=$dbName",$dbUser,$dbPassword);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully <br> <br>";
}catch(Exception $e){
    Echo "Connection failed" . $e->getMessage();  
}

?>