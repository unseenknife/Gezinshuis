<?php

$dsn = '';
$username = '';
$password = '';

try {
    $connection = new PDO($dsn, $username, $password);
}
catch(PDOException $e) {
    echo $e->getmessage();
}
