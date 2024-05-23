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

// Ambil data dari tabel pembelian dengan status 'menunggu'
$query = "SELECT * FROM pembelian WHERE status = 'menunggu'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Permintaan Pembelian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex items-center justify-between py-3 px-3">
        <h1 class="text-2xl">Project ERP</h1>
        <a  class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="./pembelian.php">back</a>
    </nav>
    <div class="mx-3 mt-5">
        <h1 class="text-2xl font-semibold mb-3">Permintaan Pembelian</h1>
        <div class="px-5 flex justify-between bg-blue-400 text-white">
            <span class="w-[10%] py-2">No.</span>
            <span class="w-[30%] py-2">Nama Barang</span>
            <span class="w-[20%] py-2">Harga Barang</span>
            <span class="w-[20%] py-2">Status</span>
            <span class="w-[20%] py-2">Aksi</span>
        </div>
        <div class="flex flex-col">
            <?php $i=1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="px-5 flex justify-between bg-yellow-100">
                <span class="w-[10%] py-2"><?php echo $i; ?></span>
                <span class="w-[30%] py-2"><?php echo $row['nama_barang']; ?></span>
                <span class="w-[20%] py-2"><?php echo $row['harga']; ?></span>
                <span class="w-[20%] py-2"><?php echo $row['status']; ?></span>
                <span class="w-[20%] py-2">
                    <a href="terima.php?id=<?php echo $row['id_pembelian']; ?>" class="px-2 py-1 bg-green-500 text-white rounded-lg hover:bg-green-300">terima</a>
                    <a href="tolak.php?id=<?php echo $row['id_pembelian']; ?>" class="px-2 py-1 bg-red-500 text-white rounded-lg hover:bg-red-300">tolak</a>
                </span>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="mx-3 mt-10">
        <h1 class="text-2xl font-semibold mb-4">Tambah Pembelian</h1>
        <form action="../functions/tambah_pembelian.php" method="POST" class="max-w-md">
            <div class="mb-4">
                <label for="nama_barang" class="block text-gray-700 text-sm font-bold mb-2">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" class="block w-full px-3 py-2 rounded-lg border border-gray-300" required>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga Barang</label>
                <input type="number" name="harga" id="harga" placeholder="Harga Barang" class="block w-full px-3 py-2 rounded-lg border border-gray-300" required>
            </div>
            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
// Tutup koneksi
mysqli_close($conn);
?>
