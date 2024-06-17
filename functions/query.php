<?php
// Panggil file con.php untuk koneksi ke database
require __DIR__ . '/../connection.php'; // Sesuaikan dengan jalur yang benar

// Fungsi untuk menjalankan query dan mengembalikan hasil dalam bentuk array
function query($query) {
    global $conn;
    $result  = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// Panggil fungsi query jika parameter table_name ada
if (isset($_GET['table_name'])) {
    $table_name = $_GET['table_name'];
    $table_data = query("SELECT * FROM $table_name");
    header('Content-Type: application/json');
    echo json_encode($table_data);
} 

// Tutup koneksi (tidak perlu karena sudah di connection.php)
// $conn->close();
?>
