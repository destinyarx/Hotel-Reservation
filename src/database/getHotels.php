<?php

require('connection.php');

$name = "DeLuna";

$stmt = $connect->query("SELECT * FROM hotel WHERE hotel_name = '$name' ");
$stmt->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $stmt->fetch()) {
    echo $row['hotel_name']."<br /> \n";
}



?>