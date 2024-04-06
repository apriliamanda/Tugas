<?php
// Informasi koneksi database
$host = "localhost";
$dbname = "dbpuskesmas";
$username = "root";
$password = "";

try {
    // Buat koneksi PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Atur mode error untuk koneksi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Jika koneksi berhasil
    echo "Koneksi ke database berhasil!";

} catch(PDOException $e) {
    // Jika koneksi gagal, tampilkan pesan error
    echo "Koneksi ke database gagal: " . $e->getMessage();
}