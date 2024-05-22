<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_erp"; // Ganti dengan nama database Anda

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id_penjualan'])) {
    $id_penjualan = intval($_GET['id_penjualan']);

    // Query untuk menghapus data dari tabel penjualan
    $query = "DELETE FROM penjualan WHERE id_penjualan = $id_penjualan";

    if (mysqli_query($conn, $query)) {
        echo "Penjualan berhasil dihapus.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

// Redirect kembali ke halaman daftar penjualan setelah selesai menghapus data
header("Location: http://localhost/project-erp/penjualan/pesanan_penjualan.php");
exit();
?>