<?php
session_start(); // Memulai sesi

if (isset($_SESSION['admin_logged_in'])) {
    header('Location: ../admin/sm.php'); // Mengarahkan ke dashboard jika sudah login
    exit;
}

require '../functions/connection.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username_admin = '$username' AND password_admin = '$password'";
    $result = mysqli_query($conn, $query);
    $admin = mysqli_fetch_assoc($result);

    if ($admin) {
        $_SESSION['admin_logged_in'] = true; // Menyimpan status login di sesi
        header('Location: ../admin/finance.php'); // Mengarahkan ke dashboard
        exit;
    } else {
        $error = 'Hmm Something Wrong';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Project ERP</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Login Admin</h2>
            <?php if ($error): ?>
                <div class="mb-4 text-red-500"><?php echo $error; ?></div>
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
                <a href="../index.php">
                    <h1 class="mt-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center">Exit</h1>
                </a>
            </form>
        </div>
    </div>
</body>
</html>
