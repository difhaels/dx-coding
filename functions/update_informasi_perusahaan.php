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

function update_informasi_perusahaan($data) {
    global $conn;

    $nama_perusahaan = htmlspecialchars($data["nama_perusahaan"]);
    $deskripsi_perusahaan = htmlspecialchars($data["deskripsi_perusahaan"]);
    $tanggal_berdiri = "05-17-2024";

    // Query update data
    $query = "UPDATE informasi_perusahaan 
              SET nama_perusahaan = '$nama_perusahaan', deskripsi_perusahaan = '$deskripsi_perusahaan' 
              WHERE tanggal_berdiri = '$tanggal_berdiri'"; // Ganti sesuai dengan kondisi Anda

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (update_informasi_perusahaan($_POST) > 0) {
        echo "<script>alert ('Data berhasil diperbaharui'); </script>";
        header("Location: http://localhost/project-erp/data_master/informasi_perusahaan.php");
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
