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

// Ambil data pelanggan berdasarkan ID
$id_pelanggan = $_GET['id'];
$query = "SELECT * FROM pelanggan WHERE id_pelanggan = $id_pelanggan";
$result = mysqli_query($conn, $query);
$pelanggan = mysqli_fetch_assoc($result);

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pelanggan = mysqli_real_escape_string($conn, $_POST['nama_pelanggan']);

    // Query untuk mengupdate data pelanggan
    $query = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan' WHERE id_pelanggan=$id_pelanggan";

    if (mysqli_query($conn, $query)) {
        echo "Pelanggan berhasil diperbarui.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Redirect kembali ke halaman daftar pelanggan setelah selesai mengedit data
    header("Location: http://localhost/project-erp/pelanggan/data_pelanggan.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project ERP - Edit Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css">
</head>
<body>
    <div class="m-3 mt-10 w-[20%]">
        <h1 class="text-2xl font-semibold">Edit Pelanggan</h1>
        <form action="" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_pelanggan">
                    Nama Pelanggan
                </label>
                <input type="text" name="nama_pelanggan" id="nama_pelanggan" value="<?php echo $pelanggan['nama_pelanggan']; ?>" class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required>
            </div>
            <button type="submit" class="w-fit mt-3 bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300">Submit</button>
        </form>
    </div>
</body>
</html>
