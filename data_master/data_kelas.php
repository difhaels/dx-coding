<?php 

// require '../functions.php'; $kelas = query("SELECT * FROM kelas"); 

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

// Query untuk mengambil data kelas beserta nama instruktur
$query = "
    SELECT kelas.id_kelas, kelas.nama_kelas, kelas.maksimal_pelanggan, kelas.harga, instruktor.nama_instruktor
    FROM kelas
    JOIN instruktor ON kelas.pengajar_kelas = instruktor.id_instruktor
";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Data Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex items-center justify-between py-3 px-3">
        <h1 class="text-2xl">Project ERP</h1>
        <a  class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="./data_master.php">back</a>
    </nav>
    <div class="m-3">

        <div class="px-5 flex justify-between bg-blue-400 text-white">
            <span class="w-[20%] py-2">No.</span>
            <span class="w-[20%] py-2">Nama Kelas</span>
            <span class="w-[20%] py-2">Maksimal Pelanggan</span>
            <span class="w-[20%] py-2">Harga</span>
            <span class="w-[20%] py-2">Instruktor</span>
            <span class="w-[10%] py-2"></span>
        </div>

        <?php $i=1; ?>
            <?php foreach ($result as $row) : ?>
            
            <div class="px-5 flex justify-between bg-blue-100">
                <span class="w-[20%] py-2"> <?php echo $i; ?></span>
                <span class="w-[20%] py-2"> <?php echo $row['nama_kelas']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['maksimal_pelanggan']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['harga']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['nama_instruktor']; ?> </span>
                <span class="w-[10%] py-2"> 
                    <a href="" class="px-2 py-1 bg-red-500 text-white rounded-lg hover:bg-red-300">hapus</a>
                </span>
            </div>
            
            <?php $i++ ?>
        <?php endforeach; ?>

    </div>

    <div class="w-full m-3 mt-10 w-[50%]">
        <h1 class="text-2xl font-semibold">Tambah Kelas</h1>
        <form action="../functions/proses_tambah_kelas.php" method="post">
            <h1 class="pt-2 pb-3">Nama Kelas</h1>
            <input type="text" name="nama_kelas" placeholder="Nama Kelas Baru" size="30" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" autocomplete="off" required>
            
            <h1 class="pt-2 pb-3">Maksimal Pelanggan</h1>
            <input type="number" name="maksimal_pelanggan" placeholder="Maksimal Pelanggan" size="30" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" autocomplete="off" required>
            
            <h1 class="pt-2 pb-3">Harga</h1>
            <input type="number" step="0.01" name="harga" placeholder="Harga" size="30" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" autocomplete="off" required>
            
            <h1 class="pt-2 pb-3">Instruktor</h1>
            <select name="pengajar_kelas" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required>
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

                // Ambil data instruktur
                $query = "SELECT id_instruktor, nama_instruktor FROM instruktor";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['id_instruktor']}'>{$row['nama_instruktor']}</option>";
                }

                mysqli_close($conn);
                ?>
            </select>
            
            <button type="submit" class="w-fit mt-3 bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300">Submit</button>
        </form>
    </div>
    
    
</body>
</html>