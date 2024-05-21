<?php 
    require '../functions.php'; 
    $informasi_perusahaan = query("SELECT * FROM informasi_perusahaan"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Informasi Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex items-center justify-between py-3 px-3">
        <h1 class="text-2xl">Project ERP</h1>
        <a  class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="./data_master.php">back</a>
    </nav>

    <div class="px-5 flex gap-5">
        <div class="w-full pr-5">
            <?php foreach ($informasi_perusahaan as $informasi) : ?>
                <h1 class="font-semibold pt-3">Nama Perusahaan</h1>
                <h1><?= $informasi["nama_perusahaan"]?></h1>
                <h1 class="font-semibold pt-3">Deskripsi Perusahaan</h1>
                <h1><?= $informasi["deskripsi_perusahaan"]?></h1>
                <h1 class="font-semibold pt-3">Tanggal berdiri</h1>
                <h1><?= $informasi["tanggal_berdiri"]?></h1>
            <?php endforeach; ?>
        </div>
        <div class="w-full pl-5">
            <h1 class="py-3 text-2xl font-semibold">Edit Informasi Perusahaan</h1>
            <form action="../functions/update_informasi_perusahaan.php" method="post">
                <h1 class="py-3">Nama Perusahaan</h1>
                <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan Baru" size="30" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" autocomplete="off">
                <h1 class="py-3">Deskripsi Perusahaan</h1>
                <textarea name="deskripsi_perusahaan" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" placeholder="Deskripsi Perusahaan Baru"></textarea>
                <div class="w-fit mt-3 bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>