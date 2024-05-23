<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_erp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data instruktur berdasarkan ID
$id_instruktor = $_GET['id'];
$query = "SELECT * FROM instruktor WHERE id_instruktor = $id_instruktor";
$result = mysqli_query($conn, $query);
$instruktor = mysqli_fetch_assoc($result);

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_instruktor = mysqli_real_escape_string($conn, $_POST['nama_instruktor']);
    $jumlah_kelas = intval($_POST['jumlah_kelas']);
    $total_pelanggan = intval($_POST['total_pelanggan']);

    // Query untuk mengupdate data instruktur
    $query = "UPDATE instruktor SET nama_instruktor='$nama_instruktor', jumlah_kelas='$jumlah_kelas', total_pelanggan='$total_pelanggan' WHERE id_instruktor=$id_instruktor";

    if (mysqli_query($conn, $query)) {
        echo "Instruktur berhasil diperbarui.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Redirect kembali ke halaman daftar instruktur setelah selesai mengedit data
    header("Location: http://localhost/project-erp/instruktor/data_instruktor.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Instruktur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css">
</head>
<body>
    <div class="m-3 mt-10 w-[30%]">
        <h1 class="text-2xl font-semibold">Edit Instruktur</h1>
        <form action="" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_instruktor">
                    Nama Instruktur
                </label>
                <input type="text" name="nama_instruktor" id="nama_instruktor" value="<?php echo $instruktor['nama_instruktor']; ?>" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jumlah_kelas">
                    Jumlah Kelas
                </label>
                <input type="number" name="jumlah_kelas" id="jumlah_kelas" value="<?php echo $instruktor['jumlah_kelas']; ?>" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="total_pelanggan">
                    Total Pelanggan
                </label>
                <input type="number" name="total_pelanggan" id="total_pelanggan" value="<?php echo $instruktor['total_pelanggan']; ?>" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required>
            </div>
            <button type="submit" class="w-fit mt-3 bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300">Submit</button>
        </form>
    </div>
</body>
</html>
