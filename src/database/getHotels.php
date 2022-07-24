<?php

require('connection.php');

$stmt = $connect->query("SELECT * FROM hotel");
$stmt->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $stmt->fetch()) {
    echo $row['hotel_name']."<br /> \n";
}

?>