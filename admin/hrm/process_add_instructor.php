<?php
session_start();
include '../../functions/query.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Query untuk menambahkan instructor baru
    $insert_query = "INSERT INTO instructor (username_instructor, name_instructor, email_instructor, phone_instructor, address_instructor, password_instructor) 
                    VALUES ('$username', '$name', '$email', '$phone', '$address', '000')";

    if (mysqli_query($conn, $insert_query)) {
        $_SESSION['message'] = "New instructor has been added.";
        header("Location: instructor.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to add new instructor: " . mysqli_error($conn);
        header("Location: add_instructor.php");
        exit();
    }
} else {
    header("Location: add_instructor.php");
    exit();
}
?>
