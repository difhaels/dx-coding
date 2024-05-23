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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = htmlspecialchars($_POST["nama_barang"]);
    $harga = htmlspecialchars($_POST["harga"]);

    // Query untuk menambahkan pembelian dengan status "menunggu"
    $query = "INSERT INTO pembelian (nama_barang, harga, status) VALUES ('$nama_barang', $harga, 'menunggu')";

    if (mysqli_query($conn, $query)) {
        echo "Pembelian berhasil ditambahkan!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Redirect kembali ke halaman form tambah pembelian atau halaman lain yang sesuai
    header("Location: daftar_pembelian.php");
    exit();
}

// Tutup koneksi
mysqli_close($conn);
?>
