<?php
    require '../../functions/query.php';
    $courses = query("
        SELECT 
            course.id_course, 
            course.name_course, 
            course.category_course, 
            course.date_course, 
            course.price_course, 
            instructor.name_instructor 
        FROM 
            course 
        JOIN 
            instructor 
        ON 
            course.instructor_course = instructor.id_instructor
    ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dx Coding - Agung Saputra</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300 cursor-pointer" href="./login/login-student.php">Login</a>
    </nav>

    <div class="px-5 mt-5">
        <h1 class="text-2xl mb-4">Course List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Instructor Name</th>
                        <th class="px-4 py-2">Price (Rupiah)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($courses as $course) : ?>               
                        <tr>
                            <td class="border px-4 py-2 text-center"><?= $no++; ?></td>
                            <td class="border px-4 py-2"><?= $course["id_course"]; ?></td>
                            <td class="border px-4 py-2"><?= $course["name_course"]; ?></td>
                            <td class="border px-4 py-2"><?= $course["category_course"]; ?></td>
                            <td class="border px-4 py-2"><?= $course["date_course"]; ?></td>
                            <td class="border px-4 py-2"><?= $course["name_instructor"]; ?></td>
                            <td class="border px-4 py-2"><?= number_format($course["price_course"], 0, ',', '.'); ?></td>
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
