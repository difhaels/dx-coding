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
        <a  class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="./penjualan.php">back</a>
    </nav>

    <h1 class="text-xl font-semibold px-5 py-3">Pesanan Penjualan</h1>
    <div class="mx-3">

        <div class="px-5 flex justify-between bg-blue-400 text-white">
            <span class="w-[20%] py-2">No.</span>
            <span class="w-[20%] py-2">Id Penjualan</span>
            <span class="w-[20%] py-2">Pelanggan</span>
            <span class="w-[20%] py-2">Kelas</span>
            <span class="w-[10%] py-2"></span>
        </div>

        <?php $i=1; ?>
            <?php foreach ($penjualan as $row) : ?>
            
            <div class="px-5 flex justify-between bg-blue-100">
                <span class="w-[20%] py-2"> <?php echo $i; ?></span>
                <span class="w-[20%] py-2"> <?php echo $row['id_penjualan']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['nama_pelanggan']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['nama_kelas']; ?> </span>
                <span class="w-[10%] py-2"> 
                    <a href="" class="px-2 py-1 bg-red-500 text-white rounded-lg hover:bg-red-300">hapus</a>
                </span>
            </div>
            
            <?php $i++ ?>
        <?php endforeach; ?>

    </div>
    
</body>
</html>