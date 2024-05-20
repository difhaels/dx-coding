<?php 
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'project_erp');

function query($query) {
    global $conn;

    $result  = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_sales_order ( $data ) {

        global $conn;

        $kode = htmlspecialchars($data["kode"]);
        $nama_pemesan = htmlspecialchars($data["nama_pemesan"]);
        $nama_kelas = htmlspecialchars($data["nama_kelas"]);


        
        // ambil data dari tiap elemen dalam form
        $kode = $data["kode"];
        $nama_pemesan = $data["nama_pemesan"];
        $nama_kelas = $data["nama_kelas"];

        // query insert data
        $query =  "INSERT INTO sales_order (kode,nama_pemesan, nama_kelas)
        VALUES
        ('$kode',
        '$nama_pemesan',
        '$nama_kelas')
        ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mobil WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>