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
    $nama_instruktor = mysqli_real_escape_string($conn, $_POST['nama_instruktor']);
    $jumlah_kelas = mysqli_real_escape_string($conn, $_POST['jumlah_kelas']);
    $total_pelanggan = mysqli_real_escape_string($conn, $_POST['total_pelanggan']);

    // Query untuk menambah instruktur baru
    $query = "INSERT INTO instruktor (nama_instruktor, jumlah_kelas, total_pelanggan) VALUES ('$nama_instruktor', $jumlah_kelas, $total_pelanggan)";

    if (mysqli_query($conn, $query)) {
        echo "Instruktur berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Redirect kembali ke halaman daftar instruktur setelah selesai menambahkan data
    header("Location: http://localhost/project-erp/instruktor/data_instruktor.php");
    exit();
}
?>
