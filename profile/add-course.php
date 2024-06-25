<?php
session_start();
include '../functions/query.php';

// Cek apakah instruktur sudah login
if (!isset($_SESSION['instructor_id'])) {
    header('Location: ../login/login-instructor.php');
    exit();
}

// Dapatkan ID instruktur dari sesi
$instructor_id = $_SESSION['instructor_id'];

// Proses form ketika disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_course = $_POST['name_course'];
    $category_course = $_POST['category_course'];
    $price_course = $_POST['price_course'];

    // Tambahkan data kursus ke database
    $query = "INSERT INTO course (name_course, category_course, price_course, instructor_course) VALUES ('$name_course', '$category_course', '$price_course', '$instructor_id')";
    mysqli_query($conn, $query);

    // Redirect ke dashboard instruktur
    header('Location: profile-instructor.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course - Project ERP</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-semibold mb-6 text-center">Add New Course</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="name_course" class="block text-gray-700 text-sm font-bold mb-2">Course Name</label>
                    <input type="text" name="name_course" id="name_course" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="category_course" class="block text-gray-700 text-sm font-bold mb-2">Course Category</label>
                    <select name="category_course" id="category_course" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        <option value="Web Development">Web Development</option>
                        <option value="Mobile Development">Mobile Development</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Cloud Computing">Cloud Computing</option>
                        <option value="Cyber Security">Cyber Security</option>
                        <option value="Design">Design</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="price_course" class="block text-gray-700 text-sm font-bold mb-2">Course Price</label>
                    <input type="number" name="price_course" id="price_course" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Add Course</button>
                <a href="profile-instructor.php" class="w-full mt-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-red-400 text-center block">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>
