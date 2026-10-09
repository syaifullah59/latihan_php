<?php

// if (isset($_GET["nama"])) {
//     $namahero = $_GET["nama"];
//     echo "Nama Hero Saya: " . $namahero;
// }

if (isset($_POST["nama"])) {
    $namahero = $_POST["nama"];
    echo "Nama Hero Saya: " . $namahero;
}

?>

<form action="data.php" method="POST">
    <input type="text" name="nama" />
    <input type="submit" />
</form>