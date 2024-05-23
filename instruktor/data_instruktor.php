<?php  require '../functions.php'; $instruktor = query("SELECT * FROM instruktor"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Data Instruktor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex items-center justify-between py-3 px-3">
        <h1 class="text-2xl">Project ERP</h1>
        <a  class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="../index.php">back</a>
    </nav>

    <h1 class="text-xl font-semibold px-5 py-3">Data Instruktor</h1>
    <div class="mx-3">

        <div class="px-5 flex justify-between bg-blue-400 text-white">
            <span class="w-[20%] py-2">No.</span>
            <span class="w-[20%] py-2">Nama instruktor</span>
            <span class="w-[20%] py-2">Jumlah Kelas</span>
            <span class="w-[20%] py-2">Total Pelanggan</span>
            <span class="w-[10%] py-2"></span>
        </div>

        <?php $i=1; ?>
            <?php foreach ($instruktor as $row) : ?>
            
            <div class="px-5 flex justify-between bg-blue-100">
                <span class="w-[20%] py-2"> <?php echo $i; ?></span>
                <span class="w-[20%] py-2"> <?php echo $row['nama_instruktor']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['jumlah_kelas']; ?> </span>
                <span class="w-[20%] py-2"> <?php echo $row['total_pelanggan']; ?> </span>
                <span class="w-[10%] py-2"> 
                    <a href="../functions/edit_instruktor.php?id=<?php echo $row['id_instruktor']; ?>" class="px-2 py-1 bg-gray-500 text-white rounded-lg hover:bg-gray-300">edit</a>
                </span>
            </div>
            
            <?php $i++ ?>
        <?php endforeach; ?>

    </div>
    
</body>
</html>