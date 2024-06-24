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

// Dapatkan data instruktur dari database
$instructor = query("SELECT * FROM instructor WHERE id_instructor = $instructor_id")[0];

// Dapatkan semua kursus yang diinstruksikan oleh instruktur
$courses = query("SELECT * FROM course WHERE instructor_course = $instructor_id");

// Array warna background dan warna hover
$background_colors = ['bg-red-500', 'bg-blue-500', 'bg-green-500', 'bg-yellow-500', 'bg-purple-500', 'bg-orange-500'];
$hover_colors = ['hover:bg-red-400', 'hover:bg-blue-400', 'hover:bg-green-400', 'hover:bg-yellow-400', 'hover:bg-purple-400', 'hover:bg-orange-400'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Instructor</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body>
<nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="./logout-instructor.php">Logout</a>
    </nav>

    <div class="flex justify-between items-start gap-10 mx-4 mb-20">
        <div class="flex justify-center mt-10 w-1/2">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <h2 class="text-2xl font-semibold mb-4">Profile Instructor</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value="<?= $instructor['username_instructor'] ?>" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" value="<?= $instructor['email_instructor'] ?>" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" value="<?= $instructor['phone_instructor'] ?>" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" rows="3" disabled><?= $instructor['address_instructor'] ?></textarea>
                </div>
                <a href="edit-profile.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 ml-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
            </div>
        </div>
        <div class="flex justify-center mt-10 w-1/2">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <h2 class="text-2xl font-semibold mb-4">Course</h2>
                <div class="grid grid-cols-3 justify-start items-center gap-3">
                    <a href="">
                        <div class="w-52 bg-green-500 hover:bg-green-400 shadow-lg rounded-lg px-3 py-2 text-white">
                            <h1 class="font-bold text-xl text-center">+</h1>
                        </div>
                    </a>
                    <?php foreach ($courses as $index => $course) : ?>
                        <?php
                        $bg_color = $background_colors[$index % count($background_colors)];
                        $hover_color = $hover_colors[$index % count($hover_colors)];
                        ?>
                        <a href="course_detail.php?id=<?= $course['id_course'] ?>">
                            <div class="w-52 <?= $bg_color ?> shadow-lg rounded-lg px-3 py-2 text-white <?= $hover_color ?>">
                                <h1><?= $course['name_course'] ?></h1>
                            </div>
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
