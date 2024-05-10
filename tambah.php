<?php  

require 'functions.php';

// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "so_agung");

//cek apakah tombol kirim sudah di tekan
if ( isset($_POST["submit"]) ) {


    // cek apakah data berhasil ditambahkan atau tidak
    if ( tambah_sales_order ($_POST) > 0 ) {
        echo "<script> 
        alert ('Data berhasil di tambahkan'); 
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script> 
        alert ('Data gagal di tambahkan');
        document.location.href = 'index.php';
        </script>";
    }
            
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Tambah Pesanan</title>
</head>
<body>
    
    <h1>Tambah Data Pemesanan</h1>

    <form action="" method="post">

    <ul>
        <li>
            <input type="text" name="kode" placeholder="Kode Pesanan" size="30" required autocomplete="off">
        </li>
        <br>
        <li>
            <input type="text" name="nama_pemesan" placeholder="Nama Pemesan" size="30" required autocomplete="off">
        </li>
        <br>
        <li>
            <input type="text" name="nama_kelas" placeholder="Nama Kelas" size="30" required autocomplete="off">
        </li>
        <br>
        <br>
        <li>
            <button type="submit" name="submit">Simpan!</button>
        </li>
    </ul>

    </form>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>

</body>
</html>