<?php
session_start();
include '../functions/query.php';

// Ambil ID course dari URL
$course_id = $_GET['id'];

// Ambil data course dari database berdasarkan ID
$course = query("SELECT * FROM course WHERE id_course = $course_id");

// Jika course tidak ditemukan, redirect ke halaman utama
if (!$course) {
    header("Location: ../index.php");
    exit();
}

// Ambil data course pertama (karena query akan mengembalikan array)
$course = $course[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details - Project ERP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Main container -->
    <div class="flex items-center justify-center min-h-screen">
        <!-- Course details card -->
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
            <!-- Course Image -->
            <img src="https://via.placeholder.com/600x200" alt="Course Image" class="rounded-lg mb-6">
            
            <!-- Course Title -->
            <h2 class="text-3xl font-semibold mb-4"><?= $course['name_course'] ?></h2>
            
            <!-- Course Details -->
            <div class="mb-6">
                <h3 class="text-2xl font-semibold mb-2">Course Details</h3>
                <ul class="list-disc list-inside text-gray-700">
                    <?php
                    $instructor_id = $course['instructor_course'];
                    $instructor = query("SELECT * FROM instructor WHERE id_instructor = $instructor_id");
                    ?>
                    <li>Instructor: <?= $instructor[0]['name_instructor'] ?></li>
                    <li>Category: <?= $course['category_course'] ?></li>
                </ul>
            </div>
            
            <!-- Course Price -->
            <div class="text-2xl font-bold text-green-500 mb-4">Rp <?= number_format($course['price_course'], 0, ',', '.') ?></div>
            
            <!-- Buy Course Button -->
            <button class="mb-2 w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Buy Course</button>
            <a href="../index.php" class="w-full bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-red-400 text-center block">Back</a>

        </div>
    </div>
</body>
</html>
