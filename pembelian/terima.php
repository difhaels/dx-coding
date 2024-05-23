<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_erp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Dapatkan ID pembelian dari parameter GET
$id = $_GET['id'];

// Update status menjadi 'dibeli'
$query = "UPDATE pembelian SET status='dibeli' WHERE id_pembelian=$id";
mysqli_query($conn, $query);

// Redirect kembali ke halaman permintaan pembelian
header("Location: permintaan_pembelian.php");

// Tutup koneksi
mysqli_close($conn);
?>
