<?php
    include './functions/query.php';
    $courses = query("SELECT * FROM course");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dx Coding - Agung Saputra</title>
    <link rel="stylesheet" href="./css/output.css">
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300 cursor-pointer" href="./login/login-student.php">Login</a>
    </nav>

    <div class="px-5 mt-5 mb-16">
        <div class="flex justify-center">
            <div class="w-[80%] relative rounded-xl shadow-xl my-5">
                <img class="w-full object-contain  rounded-xl" src="./banner.png" alt="banner">
                <div class="absolute top-0 right-0 mt-3 mr-3">
                    <div class="flex gap-3">
                        <a href="" class="w-24">
                            <div class="bg-purple-500 h-10 rounded-t-lg"></div>
                            <div class="bg-slate-200 px-2 py-1 text-sm rounded-b-lg">Paket 1</div>
                        </a>
                        <a href="" class="w-24">
                            <div class="bg-purple-500 h-10 rounded-t-lg"></div>
                            <div class="bg-slate-200 px-2 py-1 text-sm rounded-b-lg">Paket 1</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-2xl">Sort By</h1>
        <div class="flex flex-wrap justify-start items-center gap-10 mt-5">
            <?php foreach ($courses as $course) :?>               
                <a href="" class="w-72 shadow-lg">
                    <div class="bg-purple-500 h-24"></div>
                    <div class="bg-slate-200 px-3 py-2"><?=$course["name_course"]?></div>
                </a>
            <?php endforeach ?>
        </div>
    </div>

    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
