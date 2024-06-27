<?php
session_start();
include '../../functions/query.php';

// Ambil data student dari database berdasarkan ID
if (isset($_GET['id_student'])) {
    $student_id = $_GET['id_student'];
    $student = query("SELECT * FROM student WHERE id_student = $student_id")[0];
} else {
    header('Location: student.php');
    exit();
}

// Update data student jika form di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $update_query = "UPDATE student SET username_student = '$username', name_student = '$name', email_student = '$email', phone_student = '$phone' WHERE id_student = $student_id";

    if (mysqli_query($conn, $update_query)) {
        $_SESSION['message'] = "Student data has been updated.";
        header("Location: student.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to update student data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student - Project ERP</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Edit Student</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username" id="username" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $student['username_student'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $student['name_student'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $student['email_student'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                    <input type="text" name="phone" id="phone" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $student['phone_student'] ?>" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
