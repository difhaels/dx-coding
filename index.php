<?php
session_start();
include './functions/query.php';
$courses = query("SELECT * FROM course");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>Dx Coding - Agung Saputra</title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <?php if (isset($_SESSION['student_name'])): ?>
            <a href="./profile/profile-student.php">
                <span class="bg-green-500 hover:bg-green-400 text-white px-3 py-1 rounded-lg"><?= $_SESSION['student_name'] ?></span>
            </a>
        <?php else: ?>
            <a class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300 cursor-pointer" href="./login/login-student.php">Login</a>
        <?php endif; ?>    </nav>
    <div class="px-5 mt-5 mb-16">
        <div class="flex justify-center items-center gap-5 mx-16 my-10 flex-wrap">
            <div>
                <h1 class="text-4xl font-semibold">Build Your Career As</h1>
                <h1 class="text-4xl font-semibold">A Professional Developer</h1>
                <h1 class="text-xl font-thin mt-2 mb-5">Start directed learning with learning path</h1>
                <a href="#courses" class="bg-slate-500 px-5 py-2 text-white rounded-lg shadow-lg hover:bg-slate-400">Learn Now</a>
            </div>
            <div>
                <img class="w-[40rem]" src="./banner.png" alt="banner">
            </div>
        </div>

        <h1 class="text-2xl mx-10">Sort By</h1>
        <div class="flex flex-wrap justify-center items-center gap-10 mt-5" id="courses">
            <?php
            $category_images = [
                'Web Development' => './icon/web.svg',
                'Mobile Development' => './icon/mobile.svg',
                'Data Science' => './icon/data-science.svg',
                'Cloud Computing' => './icon/cloud.svg',
                'Cyber Security' => './icon/cyber.svg',
                'Design' => './icon/design.svg',
            ];

            $category_bg_colors = [
                'Web Development' => 'bg-blue-500',
                'Mobile Development' => 'bg-green-500',
                'Data Science' => 'bg-red-500',
                'Cloud Computing' => 'bg-yellow-500',
                'Cyber Security' => 'bg-purple-500',
                'Design' => 'bg-orange-500',
            ];

            foreach ($courses as $course) :
                $category = $course['category_course'];
                $image = $category_images[$category] ?? 'default-image.jpg';
                $bg_color = $category_bg_colors[$category] ?? 'bg-gray-500';
            ?>
                <a href="" class="w-72 hover:-translate-y-1">
                    <div class="<?= $bg_color ?> h-24 flex justify-center items-center rounded-t-lg">
                        <img src="<?= $image ?>" alt="<?= $category ?>" class="h-16 w-16">
                    </div>
                    <div class="bg-slate-200 px-3 py-2 rounded-b-lg shadow-lg"><?= $course["name_course"] ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>

</html>