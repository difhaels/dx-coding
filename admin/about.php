<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login/login-admin.php'); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Agung Saputra</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body>
    <nav class="bg-slate-200">
        <h1 class="text-2xl py-3 px-3">Dx Coding</h1>
    </nav>

    <div class="flex">
        <div class="w-[10%] bg-slate-700 h-[80vh] text-white">
            <a href="./hrm.php">
                <div class=" hover:bg-slate-600 p-2">HRM</div>
            </a>
            <a href="./sm.php">
                <div class=" hover:bg-slate-600 p-2">SM</div>
            </a>
            <a href="./inventory.php">
                <div class="hover:bg-slate-600 p-2">Inventory</div>
            </a>
            <a href="">
                <div class="bg-yellow-500 p-2">About</div>
            </a>
            <a href="../index.php">
                <div class="bg-red-500 hover:bg-red-400 p-2">Exit</div>
            </a>
        </div>
        
        <div class="m-5">
            <h1 class="text-xl">About</h1>
            <div class="mx-5 my-2 md:w-[85%]">
                <h1 class="text-lg font-semibold">Visi</h1>
                <h1>Menjadi platform terdepan dalam integrasi manajemen pembelajaran dan penjualan kursus yang memberikan pengalaman belajar yang dipersonalisasi dan interaktif bagi siswa serta kemudahan akses dan penggunaan bagi instruktur.</h1>
                <h1 class="text-lg font-semibold mt-3">Misi</h1>
                <ol class="list-decimal">
                    <li>Mengembangkan dan memelihara platform ERP yang inovatif untuk memenuhi kebutuhan berbagai segmen pelanggan, termasuk siswa yang mencari peningkatan keterampilan, profesional yang ingin mengembangkan karier, dan institusi pendidikan yang mencari solusi pembelajaran tambahan.</li>
                    <li>Menyediakan berbagai kursus berkualitas tinggi yang relevan dengan tuntutan pasar, serta memastikan layanan dukungan teknis dan pelanggan yang responsif dan berkualitas.</li>
                    <li>Berkolaborasi dengan penyedia konten (instruktur), penyedia hosting, dan institusi pendidikan untuk menciptakan ekosistem pembelajaran yang berkelanjutan dan bermanfaat bagi pengguna.</li>
                    <li>Terus melakukan pembaruan dan peningkatan fitur platform untuk meningkatkan pengalaman pengguna dan memenuhi harapan serta kebutuhan pelanggan dengan baik.</li>
                </ol>
            </div>
        </div>
    </div>

    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>