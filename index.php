<?php  require 'functions.php'; $sales_order = query("SELECT * FROM sales_order"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sales Order - Agung Saputra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Daftar Pesanan</h1>
    <br>
    <a class="add" href="tambah.php">Tambah Pemesanan</a>
    <br><br>

    <br>

    <table class="table" cellpadding="10" cellspacing="0" border="1">

    <tr>
        <th>No.</th>
        <th>Kode</th>
        <th>Nama Pemesan</th>
        <th>Nama Kelas</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach ($sales_order as $row) : ?>
    
    <tr>

        <td> <?php echo $i; ?></td>
        <td> <?php echo $row['kode']; ?> </td>
        <td> <?php echo $row['nama_pemesan']; ?> </td>
        <td> <?php echo $row['nama_kelas']; ?> </td>
    </tr>
    
    <?php $i++ ?>
    <?php endforeach; ?>

    </table>

    <br>
    <br>
    <a class="add" href="/project-erp/inventory.php">Lihat Inventory</a>
    
    
</body>
</html>