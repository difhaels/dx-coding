<?php
session_start();
include '../../functions/query.php';

// Pastikan variabel koneksi $conn tersedia
global $conn;

// Ambil data admin dari database berdasarkan ID
if (isset($_GET['id_admin'])) {
    $admin_id = $_GET['id_admin'];
    $admin = query("SELECT * FROM admin WHERE id_admin = $admin_id")[0];
} else {
    header('Location: admin.php');
    exit();
}

// Update data admin jika form di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];

    // Perbaiki sintaks SQL dengan tanda petik tunggal di sekitar nilai string
    $update_query = "UPDATE admin SET username_admin = '$username', name_admin = '$name' WHERE id_admin = $admin_id";

    if (mysqli_query($conn, $update_query)) {
        $_SESSION['message'] = "Admin data has been updated.";
        header("Location: admin.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to update admin data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin - Project ERP</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Edit Admin</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username" id="username" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= htmlspecialchars($admin['username_admin']) ?>" required>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= htmlspecialchars($admin['name_admin']) ?>" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
