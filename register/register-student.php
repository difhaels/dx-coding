<?php
// Include connection and query functions
require '../functions/query.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username_student'];
    $password = $_POST['password_student'];
    $password_check = $_POST['password_check'];
    $name = $_POST['name_student'];
    $email = $_POST['email_student'];
    $phone = $_POST['phone_student'];

    // Check if passwords match
    if ($password !== $password_check) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the student into the database
        $query = "INSERT INTO student (username_student, password_student, name_student, email_student, phone_student) VALUES ('$username', '$hashed_password', '$name', '$email', '$phone')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registration successful!'); window.location.href = '../index.php';</script>";
        } else {
            echo "<script>alert('Registration failed: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student - Project ERP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold mb-6 text-center">Register Student</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="username_student" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username_student" id="username_student" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="name_student" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                    <input type="text" name="name_student" id="name_student" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="email_student" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email_student" id="email_student" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="phone_student" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                    <input type="text" name="phone_student" id="phone_student" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="password_student" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password_student" id="password_student" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="password_check" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" name="password_check" id="password_check" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400">Create Account</button>
                <a href="../index.php">
                    <h1 class="mt-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center">Exit</h1>
                </a>
            </form>
        </div>
    </div>
</body>
</html>
