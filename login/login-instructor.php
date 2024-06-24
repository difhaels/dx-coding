<?php
session_start();
include '../functions/query.php';

$error_message = '';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    var_dump($username);
    var_dump($password);

    // Query untuk mendapatkan data instruktur berdasarkan username
    $instructor = query("SELECT * FROM instructor WHERE username_instructor = '$username'");

    // Cek apakah instruktur ditemukan dan password cocok
    if ($instructor && $password === $instructor[0]['password_instructor']) {
        // Set session
        $_SESSION['instructor_id'] = $instructor[0]['id_instructor'];
        $_SESSION['instructor_name'] = $instructor[0]['name_instructor'];
        // Redirect ke halaman dashboard instruktur atau halaman lain yang sesuai
        header('Location: ../profile/profile-instructor.php');
        exit();
    } else {
        $error_message = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Instructor - Project ERP</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Login Instructor</h2>
            <?php if ($error_message): ?>
                <div class="bg-red-200 text-red-700 p-3 rounded mb-4">
                    <?= $error_message ?>
                </div>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username" id="username" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Login</button>
                <a href="../index.php" class="block mt-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center">Exit</a>
            </form>
        </div>
    </div>
</body>
</html>
