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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kelas = htmlspecialchars($_POST["nama_kelas"]);
    $maksimal_pelanggan = htmlspecialchars($_POST["maksimal_pelanggan"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $pengajar_kelas = htmlspecialchars($_POST["pengajar_kelas"]);

    // Query untuk menambahkan data ke tabel kelas
    $query = "INSERT INTO kelas (nama_kelas, maksimal_pelanggan, harga, pengajar_kelas)
              VALUES ('$nama_kelas', '$maksimal_pelanggan', '$harga', '$pengajar_kelas')";

    if (mysqli_query($conn, $query)) {
        echo "Kelas berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

// Redirect setelah selesai menambahkan data
header("Location: http://localhost/project-erp/data_master/data_kelas.php" );
exit();
?>
