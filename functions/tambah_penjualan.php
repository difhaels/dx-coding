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
    $id_pelanggan = intval($_POST['id_pelanggan']);
    $id_kelas = intval($_POST['id_kelas']);
    $tanggal_pembelian = mysqli_real_escape_string($conn, $_POST['tanggal_pembelian']);
    $harga = floatval($_POST['harga']);

    // Query untuk menambahkan data penjualan
    $query = "INSERT INTO penjualan (id_pelanggan, id_kelas, tanggal_pembelian, harga) VALUES ('$id_pelanggan', '$id_kelas', '$tanggal_pembelian', '$harga')";

    if (mysqli_query($conn, $query)) {
        echo "Penjualan berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Redirect kembali ke halaman daftar penjualan setelah selesai menambahkan data
    header("Location: http://localhost/project-erp/penjualan/pesanan_penjualan.php");
    exit();
}
?>
