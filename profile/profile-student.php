<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header('Location: ../login/login-student.php');
    exit();
}

require '../functions/query.php';

// Dapatkan data siswa dari database
$student_id = $_SESSION['student_id'];
$student = query("SELECT * FROM student WHERE id_student = $student_id")[0];

// Dapatkan data kursus yang telah dibeli siswa dari database
$courses = query("SELECT course.name_course FROM sale 
                JOIN course ON sale.course_sale = course.id_course 
                WHERE sale.student_sale = $student_id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Student</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../index.php">Back</a>
    </nav>

    <div class="flex justify-between items-start gap-10 mx-4 mb-20">
        <div class="flex justify-center mt-10 w-1/2">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-4xl">
                <h2 class="text-2xl font-semibold mb-4">Profile Student</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value="<?= $student['username_student'] ?>" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" value="<?= $student['name_student'] ?>" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" value="<?= $student['email_student'] ?>" disabled>
                </div>
                <div class="mb-7">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" value="<?= $student['phone_student'] ?>" disabled>
                </div>
                <a href="logout-student.php" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 ml-2 rounded focus:outline-none focus:shadow-outline">Log Out</a>
                <span class="mx-2">ID Student: <?= $student['id_student'] ?></span>
            </div>
        </div>
        <div class="flex justify-center mt-10 w-1/2">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <h2 class="text-2xl font-semibold mb-4">Course</h2>
                <div class="flex flex-wrap justify-start items-center gap-3">
                    <?php foreach ($courses as $course): ?>
                        <a href="" class="w-40 bg-red-500 shadow-lg rounded-lg px-3 py-2 text-white">
                            <h1><?= $course['name_course'] ?></h1>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
