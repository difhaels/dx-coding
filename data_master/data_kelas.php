<?php require '../functions.php'; $inventory = query("SELECT * FROM inventory"); ?>

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
            <span class="w-[20%] py-2">Stok</span>
            <span class="w-[20%] py-2">Pengajar</span>
            <span class="w-[10%] py-2"></span>
        </div>

        <?php $i=1; ?>
            <?php foreach ($inventory as $row) : ?>
            
            <div class="px-5 flex justify-between bg-blue-100">
                <span class="w-[20%] py-2"> <?php echo $i; ?></span>
                <span class="w-[20%] py-2"> <?php echo $row['nama_kelas']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['stok']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['pengajar']; ?> </span>
                <span class="w-[10%] py-2"> 
                    <a href="" class="px-2 py-1 bg-red-500 text-white rounded-lg hover:bg-red-300">hapus</a>
                </span>
            </div>
            
            <?php $i++ ?>
        <?php endforeach; ?>

    </div>

    <div class="w-full m-3 mt-10 w-[50%]">
        <h1 class="text-2xl font-semibold">Tambah Kelas</h1>
        <h1 class="pt-2 pb-3">Nama Kelas</h1>
        <input type="text" name="" placeholder="Nama Kelas Baru" size="30" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" autocomplete="off">
        <h1 class="pt-2 pb-3">Stok</h1>
        <input type="text" name="" placeholder="Stok" size="30" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" autocomplete="off">
        <h1 class="pt-2 pb-3">Nama Pengajar</h1>
        <input type="text" name="" placeholder="Nama Pengajar" size="30" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" autocomplete="off">
        <div class="w-fit mt-3 bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300">
            <a href="../index.php">Submit</a>
        </div>
    </div>
    
    
</body>
</html>