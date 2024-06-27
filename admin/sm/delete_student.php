<?php
session_start();
include '../../functions/query.php';

if (isset($_GET['id_student'])) {
    $student_id = $_GET['id_student'];
    
    // Hapus data dari tabel sale yang terkait dengan student
    $delete_sales_query = "DELETE FROM sale WHERE student_sale = $student_id";
    if (mysqli_query($conn, $delete_sales_query)) {
        // Hapus data dari tabel student
        $delete_student_query = "DELETE FROM student WHERE id_student = $student_id";
        if (mysqli_query($conn, $delete_student_query)) {
            // Redirect ke halaman student dengan pesan sukses
            $_SESSION['message'] = "Student and related sales data have been deleted.";
            header("Location: student.php");
            exit();
        } else {
            // Error saat menghapus data dari tabel student
            $_SESSION['error'] = "Failed to delete student data: " . mysqli_error($conn);
        }
    } else {
        // Error saat menghapus data dari tabel sale
        $_SESSION['error'] = "Failed to delete sales data: " . mysqli_error($conn);
    }
} else {
    $_SESSION['error'] = "Invalid student ID.";
}

header("Location: student.php");
exit();
?>
