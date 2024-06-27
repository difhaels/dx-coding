<?php
session_start();
include '../../functions/query.php';

// Ambil data instructor dari database berdasarkan ID
if (isset($_GET['id_instructor'])) {
    $instructor_id = $_GET['id_instructor'];
    $instructor = query("SELECT * FROM instructor WHERE id_instructor = $instructor_id")[0];
} else {
    header('Location: instructor.php');
    exit();
}

// Update data instructor jika form di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $update_query = "UPDATE instructor SET username_instructor = '$username', name_instructor = '$name', email_instructor = '$email', phone_instructor = '$phone', address_instructor = '$address' WHERE id_instructor = $instructor_id";

    if (mysqli_query($conn, $update_query)) {
        $_SESSION['message'] = "Instructor data has been updated.";
        header("Location: instructor.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to update instructor data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Instructor - Project ERP</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Edit Instructor</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username" id="username" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $instructor['username_instructor'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $instructor['name_instructor'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $instructor['email_instructor'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                    <input type="text" name="phone" id="phone" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $instructor['phone_instructor'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                    <textarea name="address" id="address" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" rows="3" required><?= $instructor['address_instructor'] ?></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
