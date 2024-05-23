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

// Ambil data dari tabel pembelian dengan status 'dibeli' atau 'ditolak'
$query = "SELECT * FROM pembelian WHERE status IN ('dibeli', 'ditolak')";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Daftar Pembelian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex items-center justify-between py-3 px-3">
        <h1 class="text-2xl">Project ERP</h1>
        <a  class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="./pembelian.php">back</a>
    </nav>
    <div class="mx-3 mt-5">
        <h1 class="text-2xl font-semibold mb-3">Daftar Pembelian</h1>
        <div class="px-5 flex justify-between bg-blue-400 text-white">
            <span class="w-[10%] py-2">No.</span>
            <span class="w-[30%] py-2">Nama Barang</span>
            <span class="w-[20%] py-2">Harga Barang</span>
            <span class="w-[20%] py-2">Status</span>
        </div>
        <div class="flex flex-col">
            <?php $i=1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="px-5 flex justify-between bg-blue-100">
                <span class="w-[10%] py-2"><?php echo $i; ?></span>
                <span class="w-[30%] py-2"><?php echo $row['nama_barang']; ?></span>
                <span class="w-[20%] py-2"><?php echo $row['harga']; ?></span>
                <span class="w-[20%] py-2"><?php echo $row['status']; ?></span>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>

<?php
// Tutup koneksi
mysqli_close($conn);
?>
