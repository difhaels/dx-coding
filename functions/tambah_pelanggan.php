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

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pelanggan = mysqli_real_escape_string($conn, $_POST['nama_pelanggan']);

    // Query untuk menambahkan data pelanggan
    $query = "INSERT INTO pelanggan (nama_pelanggan) VALUES ('$nama_pelanggan')";

    if (mysqli_query($conn, $query)) {
        echo "Pelanggan berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Redirect kembali ke halaman daftar pelanggan setelah selesai menambahkan data
    header("Location: http://localhost/project-erp/pelanggan/data_pelanggan.php");
    exit();
}
?>