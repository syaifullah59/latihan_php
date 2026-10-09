<?php

$hostname = "localhost";
$user = "root";
$pass = "root";
$database = "latihan_php";

$connection = new mysqli($hostname, $user, $pass, $database);

if ($connection->connect_error) {
    die("connection failed: " . $connection->connect_error);
}

$sql = "DELETE FROM latihan_php.tabel_hero_mage WHERE id = 1";

if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connection->error;
}
?>