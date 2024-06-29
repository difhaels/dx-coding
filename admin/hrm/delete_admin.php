<?php
session_start();
include '../../functions/query.php';

// Pastikan variabel koneksi $conn tersedia
global $conn;

// Ambil id_admin dari URL
if (isset($_GET['id_admin'])) {
    $admin_id = $_GET['id_admin'];

    // Hapus data admin dari database
    $delete_query = "DELETE FROM admin WHERE id_admin = $admin_id";

    if (mysqli_query($conn, $delete_query)) {
        $_SESSION['message'] = "Admin has been deleted.";
        header("Location: admin.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to delete admin: " . mysqli_error($conn);
    }
} else {
    header('Location: admin.php');
    exit();
}
?>
