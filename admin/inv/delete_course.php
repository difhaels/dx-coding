<?php
require '../../functions/query.php';

if (isset($_GET['id_course'])) {
    $id_course = $_GET['id_course'];

    // Lakukan penghapusan data dari tabel course
    $result = mysqli_query($conn, "DELETE FROM course WHERE id_course = $id_course");

    if ($result) {
        // Redirect kembali ke halaman courses.php jika penghapusan berhasil
        header("Location: courses.php");
        exit();
    } else {
        // Handle error jika penghapusan gagal
        echo "Failed to delete course.";
    }
} else {
    // Handle jika tidak ada id_course yang diberikan
    echo "Course ID not provided.";
}
?>
