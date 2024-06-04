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

    // Query untuk mengambil data penjualan dengan nama pelanggan dan nama kelas
    $query = "
        SELECT 
            penjualan.id_penjualan, 
            pelanggan.nama_pelanggan, 
            kelas.nama_kelas, 
            penjualan.tanggal_pembelian, 
            penjualan.harga
        FROM 
            penjualan
        JOIN 
            pelanggan ON penjualan.id_pelanggan = pelanggan.id_pelanggan
        JOIN 
            kelas ON penjualan.id_kelas = kelas.id_kelas
    ";

    $result = mysqli_query($conn, $query);

    // Memeriksa apakah query berhasil
    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    // Mengambil semua hasil dalam bentuk array asosiatif
    $penjualan = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Pesanan Penjualan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex items-center justify-between py-3 px-3">
        <h1 class="text-2xl">Project ERP</h1>
        <a class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="./penjualan.php">back</a>
    </nav>

    <h1 class="text-xl font-semibold px-5 py-3">Pesanan Penjualan</h1>
    <div class="mx-3">
        <div class="px-5 flex justify-between bg-blue-400 text-white">
            <span class="w-[15%] py-2">No.</span>
            <span class="w-[15%] py-2">Id Penjualan</span>
            <span class="w-[15%] py-2">Pelanggan</span>
            <span class="w-[15%] py-2">Kelas</span>
            <span class="w-[15%] py-2">Tanggal Pembelian</span>
            <span class="w-[15%] py-2">Harga</span>
            <span class="w-[10%] py-2"></span>
        </div>

        <?php $i = 1; ?>
        <?php foreach ($penjualan as $row) : ?>
            <div class="px-5 flex justify-between bg-blue-100">
                <span class="w-[15%] py-2"><?php echo $i; ?></span>
                <span class="w-[15%] py-2"><?php echo $row['id_penjualan']; ?></span>
                <span class="w-[15%] py-2"><?php echo $row['nama_pelanggan']; ?></span>
                <span class="w-[15%] py-2"><?php echo $row['nama_kelas']; ?></span>
                <span class="w-[15%] py-2"><?php echo $row['tanggal_pembelian']; ?></span>
                <span class="w-[15%] py-2"><?php echo $row['harga']; ?></span>
                <span class="w-[10%] py-2"> 
                    <a href="../functions/hapus_penjualan.php?id_penjualan=<?php echo $row['id_penjualan']; ?>" class="px-2 py-1 bg-red-500 text-white rounded-lg hover:bg-red-300">hapus</a>
                </span>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>

    <div class="m-3 mt-10 w-[40%]">
        <h1 class="text-2xl font-semibold">Tambah Penjualan</h1>
        <form action="../functions/tambah_penjualan.php" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id_pelanggan">
                    Nama Pelanggan
                </label>
                <select name="id_pelanggan" id="id_pelanggan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300">
                    <?php
                    // Ambil data pelanggan dari database
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    $result = mysqli_query($conn, "SELECT id_pelanggan, nama_pelanggan FROM pelanggan");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['id_pelanggan']}'>{$row['nama_pelanggan']}</option>";
                    }

                    mysqli_close($conn);
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id_kelas">
                    Nama Kelas
                </label>
                <select name="id_kelas" id="id_kelas" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300">
                    <?php
                    // Ambil data kelas dari database
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    $result = mysqli_query($conn, "SELECT id_kelas, nama_kelas FROM kelas");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['id_kelas']}'>{$row['nama_kelas']}</option>";
                    }

                    mysqli_close($conn);
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_pembelian">
                    Tanggal Pembelian
                </label>
                <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="harga">
                    Harga
                </label>
                <input type="text" name="harga" id="harga" placeholder="Harga" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required>
            </div>
            <div class="w-fit mt-3 bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300">
                <button type="submit" class="px-2 py-1">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
