<?php
session_start();
include '../functions/connection.php';

// Pastikan pengguna sudah login
if (!isset($_SESSION['student_id'])) {
    header("Location: ../login/login-student.php");
    exit();
}

$student_id = $_SESSION['student_id'];
$course_id = $_GET['course_id'];

// Cek apakah kursus sudah dibeli
$result = mysqli_query($conn, "SELECT * FROM sale WHERE student_sale = $student_id AND course_sale = $course_id");
if (mysqli_num_rows($result) > 0) {
    header("Location: ../profile/profile-student.php");
    exit();
}

// Tambahkan pembelian ke database
$purchase_date = date('Y-m-d H:i:s');
$query = "INSERT INTO sale (student_sale, course_sale, date_sale) VALUES ($student_id, $course_id, '$purchase_date')";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: ../profile/profile-student.php");
    exit();
} else {
    echo "Failed to process the transaction. Please try again.";
}
?>
