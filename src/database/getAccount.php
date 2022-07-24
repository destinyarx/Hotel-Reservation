<?php

require('connection.php');

$username = "DeLuna";
$password = "123";
$account_type = 1;

$stmt = $connect->query("SELECT username FROM account WHERE account_type = '$account_type' AND username  = '$username' AND password = '$password' ");
$user = $stmt->fetch();

// echo $user['username'];

header('Content-type: application/json');
echo json_encode($user['username']);

exit();


?>