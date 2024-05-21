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

if (isset($_GET['id_kelas'])) {
    $id_kelas = intval($_GET['id_kelas']);

    // Query untuk menghapus data dari tabel kelas
    $query = "DELETE FROM kelas WHERE id_kelas = $id_kelas";

    if (mysqli_query($conn, $query)) {
        echo "Kelas berhasil dihapus.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

// Redirect kembali ke halaman daftar kelas setelah selesai menghapus data
header("Location: http://localhost/project-erp/data_master/data_kelas.php");
exit();
?>
