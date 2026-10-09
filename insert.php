<?php

$hostname = "localhost";
$user = "root";
$pass = "root";
$database = "latihan_php";

$connection = new mysqli($hostname, $user, $pass, $database);

if ($connection->connect_error) {
    die("connection failed: " . $connection->connect_error);
}

$sql = "INSERT INTO latihan_php.tabel_hero_mage (nama_hero, tipe_hero, damage) VALUES ('vexana', 'burst', 80)";
        VALUES
        ('kimmy', 'mm/mage', 80)
        ('alva', 'fighter', 80)
        ('valir', 'burst', 80)

if ($connection->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan ke database.";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}