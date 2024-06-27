<?php
session_start();
include '../../functions/query.php';

// Ambil ID course dari URL
$course_id = $_GET['id_course'];

// Ambil data course dari database berdasarkan ID
$course = query("SELECT * FROM course WHERE id_course = $course_id");

// Ambil semua data instructor untuk dropdown
$instructors = query("SELECT * FROM instructor");

// Jika course tidak ditemukan, redirect ke halaman utama
if (!$course) {
    $_SESSION['error'] = "Course not found.";
    header("Location: courses.php");
    exit();
}

// Ambil data course pertama (karena query akan mengembalikan array)
$course = $course[0];

// Tangkap pesan jika ada dari proses sebelumnya
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

// Tangkap pesan error jika ada
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course - Project ERP</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Edit Course</h2>

            <?php if (isset($error)) : ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?= $error ?></span>
                </div>
            <?php endif; ?>

            <?php if (isset($message)) : ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?= $message ?></span>
                </div>
            <?php endif; ?>

            <form action="process_edit_course.php" method="POST">
                <input type="hidden" name="id_course" value="<?= $course['id_course'] ?>">

                <div class="mb-4">
                    <label for="name_course" class="block text-gray-700 text-sm font-bold mb-2">Course Name</label>
                    <input type="text" name="name_course" id="name_course" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $course['name_course'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="category_course" class="block text-gray-700 text-sm font-bold mb-2">Course Category</label>
                    <input type="text" name="category_course" id="category_course" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $course['category_course'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="price_course" class="block text-gray-700 text-sm font-bold mb-2">Course Price</label>
                    <input type="text" name="price_course" id="price_course" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="<?= $course['price_course'] ?>" required>
                </div>
                <div class="mb-4">
                    <label for="instructor_course" class="block text-gray-700 text-sm font-bold mb-2">Instructor</label>
                    <select name="instructor_course" id="instructor_course" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        <option value="">Select Instructor</option>
                        <?php foreach ($instructors as $instructor) : ?>
                            <option value="<?= $instructor['id_instructor'] ?>" <?= ($instructor['id_instructor'] == $course['instructor_course']) ? 'selected' : '' ?>><?= $instructor['name_instructor'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="mb-4 w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Update Course</button>
                <a href="courses.php" class="mb-4 w-full bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-red-400">Back</a>
            </form>
        </div>
    </div>
</body>
</html>
