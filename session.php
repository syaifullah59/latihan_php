<?php
// 1. Wajib jalankan session_start() di baris paling atas
session_start();

// 2. Menyimpan data ke dalam Session
$_SESSION["user"] = "Syaifullah";
$_SESSION["role"] = "Administrator";

echo "<h3>-- 1. Proses Pembuatan Session --</h3>";
echo "Session berhasil dibuat untuk user: " . $_SESSION["user"] . "<br><br>";


// 3. Mengecek dan Menampilkan Session
echo "<h3>-- 2. Pengecekan Session --</h3>";
if (isset($_SESSION["user"])) {
    echo "Halo, selamat datang kembali " . $_SESSION["user"] . "!<br>";
    echo "Hak akses kamu saat ini adalah: " . $_SESSION["role"] . "<br><br>";
} else {
    echo "Session tidak ditemukan.<br><br>";
}


// 4. Menghapus / Menghancurkan Session (Simulasi Logout)
echo "<h3>-- 3. Penghapusan Session (Logout) --</h3>";
session_destroy();

// Mencoba mengecek ulang setelah session dihancurkan
if (isset($_SESSION["user"])) {
    echo "Session masih aktif.";
} else {
    echo "Session telah berhasil dihapus (Logout berhasil)!";
}
?>