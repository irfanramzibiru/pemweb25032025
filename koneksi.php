<?php
$host = "localhost";  // Host default untuk MySQL di XAMPP
$user = "root";       // Username default MySQL di XAMPP
$pass = "";           // Kosongkan jika tidak ada password
$db   = "week7";      // Nama database

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi database berhasil!";
}
?>
