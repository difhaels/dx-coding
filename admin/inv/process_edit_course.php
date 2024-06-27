<?php
session_start();
include '../../functions/query.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_course = $_POST['id_course'];
    $name_course = $_POST['name_course'];
    $category_course = $_POST['category_course'];
    $price_course = $_POST['price_course'];
    $instructor_course = $_POST['instructor_course'];

    // Query untuk update data course
    $update_query = "UPDATE course SET name_course = '$name_course', category_course = '$category_course', price_course = '$price_course', instructor_course = '$instructor_course' WHERE id_course = $id_course";

    if (mysqli_query($conn, $update_query)) {
        $_SESSION['message'] = "Course updated successfully.";
        header("Location: courses.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to update course: " . mysqli_error($conn);
        header("Location: edit_course.php?id=$id_course");
        exit();
    }
} else {
    header("Location: courses.php");
    exit();
}
?>
