<?php

$hostname = "localhost";
$username = "root"; 
$password = "";
$database = "latihan_php";

$connection = new mysqli($hostname, $username, $password, $database) or die("Koneksi ke database gagal: ");

$sql = "SELECT id, nama_hero, tipe_hero, damage FROM latihan_php.tabel_hero_mage WHERE id = 1";

$query = $connection->query($sql);

if ($query->num_rows > 0) {

    while ($row = $query->fetch_assoc()) {
        echo $row["nama_hero"];
    }
    var_dump($query);
} else {
    var_dump($query);
}
    