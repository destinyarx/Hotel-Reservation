<?php

require('connection.php');

$location = 1;

$stmt = $connect->query("SELECT * FROM hotel WHERE location = '$location' ");
$stmt->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $stmt->fetch()) {
    echo $row['hotel_name']."<br /> \n";
}



?>