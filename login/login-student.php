<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Project ERP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Login Student</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username" id="username" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="text-center flex justify-between mb-4">
                    <a href="../register/forgot-password.php" class="text-sm text-blue-500 hover:underline">Forgot Password</a>
                    <a href="../register/register-student.php" class="text-sm text-blue-500 hover:underline">Create Account</a>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Login</button>
                <a href="./login-instructor.php">
                    <h1  class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center">Login Instruktor</h1>
                </a>
                <a href="./login-admin.php">
                    <h1  class="mt-2 bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center">Login Admin</h1>
                </a>
                <a href="../index.php">
                    <h1  class="mt-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center">Exit</h1>
                </a>
            </form>
        </div>
    </div>
</body>
</html>
