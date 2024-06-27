<?php
session_start();
include '../../functions/query.php';

if (isset($_GET['id_instructor'])) {
    $instructor_id = $_GET['id_instructor'];

    // Hapus data dari tabel sale yang terkait dengan course dari instructor
    $course_ids = query("SELECT id_course FROM course WHERE instructor_course = $instructor_id");
    foreach ($course_ids as $course_id) {
        $course_id = $course_id['id_course'];
        mysqli_query($conn, "DELETE FROM sale WHERE course_sale = $course_id");
    }

    // Hapus data dari tabel course yang terkait dengan instructor
    mysqli_query($conn, "DELETE FROM course WHERE instructor_course = $instructor_id");

    // Hapus data dari tabel instructor
    $delete_query = "DELETE FROM instructor WHERE id_instructor = $instructor_id";
    if (mysqli_query($conn, $delete_query)) {
        $_SESSION['message'] = "Instructor and related data have been deleted.";
    } else {
        $_SESSION['error'] = "Failed to delete instructor: " . mysqli_error($conn);
    }
} else {
    $_SESSION['error'] = "No instructor ID provided.";
}

header('Location: instructor.php');
exit();
?>
