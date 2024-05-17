<?php require 'functions.php'; $inventory = query("SELECT * FROM inventory"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory - Agung Saputra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Daftar Kelas</h1>
    <br>
    <a class="add" href="tambah.php">Tambah Pemesanan</a>
    <br><br>

    <br>

    <table class="table" cellpadding="10" cellspacing="0" border="1">

    <tr>
        <th>No.</th>
        <th>Nama Kelas</th>
        <th>Stok</th>
        <th>Pengajar</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach ($inventory as $row) : ?>
    
    <tr>

        <td> <?php echo $i; ?></td>
        <td> <?php echo $row['nama_kelas']; ?> </td>
        <td> <?php echo $row['stok']; ?> </td>
        <td> <?php echo $row['pengajar']; ?> </td>
    </tr>
    
    <?php $i++ ?>
    <?php endforeach; ?>

    </table>

    <br>
    <br>
    <a class="add" href="/project-erp/index.php">Lihat Daftar Pesanan</a>
    
    
</body>
</html>