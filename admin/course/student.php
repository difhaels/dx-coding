<?php
    require '../../functions/query.php';
    $students = query("SELECT * FROM student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dx Coding - Student List</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../course.php">Back</a>    
    </nav>

    <div class="px-5 mt-5">
        <h1 class="text-2xl mb-4">Student List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($students as $student) : ?>               
                        <tr>
                            <td class="border px-4 py-2 text-center"><?= $no++; ?></td>
                            <td class="border px-4 py-2"><?= $student["id_student"]; ?></td>
                            <td class="border px-4 py-2"><?= $student["username_student"]; ?></td>
                            <td class="border px-4 py-2"><?= $student["name_student"]; ?></td>
                            <td class="border px-4 py-2"><?= $student["email_student"]; ?></td>
                            <td class="border px-4 py-2"><?= $student["phone_student"]; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="fixed bottom-0 text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
