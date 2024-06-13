<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../index.php">Back</a>
    </nav>

    <div class="flex justify-center items-center h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
            <h2 class="text-2xl font-semibold mb-6 text-center">Forgot Password</h2>
            <form action="recover_password.php" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="id_siswa">ID Siswa</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_siswa" name="id_siswa" type="text" placeholder="Enter your student ID" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username_siswa">Username Siswa</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username_siswa" name="username_siswa" type="text" placeholder="Enter your username" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email_siswa">Email Siswa</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email_siswa" name="email_siswa" type="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="noHp_siswa">No HP Siswa</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="noHp_siswa" name="noHp_siswa" type="text" placeholder="Enter your phone number" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Submit
                    </button>
                </div>
            </form>
            <?php
                if (isset($_GET['password'])) {
                    echo '<p class="mt-4 text-green-500">Password anda adalah: ' . htmlspecialchars($_GET['password']) . '</p>';
                }
            ?>
        </div>
    </div>

    <footer class="fixed bottom-0 text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
