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
                <div class="bhover:bg-slate-600 p-2">HRM</div>
            </a>
            <a href="./sm.php">
                <div class="hover:bg-slate-600 p-2">SM</div>
            </a>
            <a href="./inventory.php">
                <div class="bg-yellow-500  p-2">Inventory</div>
            </a>
            <a href="./about.php">
                <div class="hover:bg-slate-600 p-2">About</div>
            </a>
            <a href="../index.php">
                <div class="bg-red-500 hover:bg-red-400 p-2">Exit</div>
            </a>
        </div>
        
        <div>
            <h1 class="m-5 text-xl">Inventory</h1>
            <div class="m-5 flex flex-wrap gap-3">
                <a href="./inventory/course.php">
                    <div class="w-32 h-32 bg-blue-500 hover:bg-blue-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 12V4C20 2.89543 19.1046 2 18 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V18.5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 2V14L16.8182 11L20 14V5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>                            
                        <h1 class="text-white">Course</h1>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="w-32 h-32 bg-purple-500 hover:bg-purple-400 flex justify-center items-center rounded-lg">
                        <div>
                            <svg class="w-10 h-10 mx-auto mb-2" fill="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#FFFFFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.5,22 C4.01471863,22 2,19.9852814 2,17.5 C2,15.0147186 4.01471863,13 6.5,13 C8.98528137,13 11,15.0147186 11,17.5 C11,19.9852814 8.98528137,22 6.5,22 Z M17.5,22 C15.0147186,22 13,19.9852814 13,17.5 C13,15.0147186 15.0147186,13 17.5,13 C19.9852814,13 22,15.0147186 22,17.5 C22,19.9852814 19.9852814,22 17.5,22 Z M6.5,11 C4.01471863,11 2,8.98528137 2,6.5 C2,4.01471863 4.01471863,2 6.5,2 C8.98528137,2 11,4.01471863 11,6.5 C11,8.98528137 8.98528137,11 6.5,11 Z M17.5,11 C15.0147186,11 13,8.98528137 13,6.5 C13,4.01471863 15.0147186,2 17.5,2 C19.9852814,2 22,4.01471863 22,6.5 C22,8.98528137 19.9852814,11 17.5,11 Z M17.5,9 C18.8807119,9 20,7.88071187 20,6.5 C20,5.11928813 18.8807119,4 17.5,4 C16.1192881,4 15,5.11928813 15,6.5 C15,7.88071187 16.1192881,9 17.5,9 Z M6.5,9 C7.88071187,9 9,7.88071187 9,6.5 C9,5.11928813 7.88071187,4 6.5,4 C5.11928813,4 4,5.11928813 4,6.5 C4,7.88071187 5.11928813,9 6.5,9 Z M17.5,20 C18.8807119,20 20,18.8807119 20,17.5 C20,16.1192881 18.8807119,15 17.5,15 C16.1192881,15 15,16.1192881 15,17.5 C15,18.8807119 16.1192881,20 17.5,20 Z M6.5,20 C7.88071187,20 9,18.8807119 9,17.5 C9,16.1192881 7.88071187,15 6.5,15 C5.11928813,15 4,16.1192881 4,17.5 C4,18.8807119 5.11928813,20 6.5,20 Z"></path> </g></svg>
                            <h1 class="text-white">Items</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>