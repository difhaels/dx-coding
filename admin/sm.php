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
            <a href="">
                <div class="bg-yellow-500 p-2">SM</div>
            </a>
            <a href="./inventory.php">
                <div class="hover:bg-slate-600 p-2">Inventory</div>
            </a>
            <a href="./about.php">
                <div class="hover:bg-slate-600 p-2">About</div>
            </a>
            <a href="../index.php">
                <div class="bg-red-500 hover:bg-red-400 p-2">Exit</div>
            </a>
        </div>
        
        <div>
            <h1 class="m-5 text-xl">Sales Management</h1>
            <div class="m-5 flex flex-wrap gap-3">
                <a href="./sm/sale.php">
                    <div class="w-32 h-32 bg-blue-500 hover:bg-blue-400 flex justify-center items-center rounded-lg">
                        <div>
                            <svg fill="#FFFFFF" class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.5,23a9.069,9.069,0,0,0,3.5-.68,8.92,8.92,0,0,0,3.5.68c3.645,0,6.5-1.945,6.5-4.429V14.429C22,11.945,19.145,10,15.5,10c-.169,0-.335.008-.5.017V5.333C15,2.9,12.145,1,8.5,1S2,2.9,2,5.333V18.667C2,21.1,4.855,23,8.5,23ZM20,18.571C20,19.72,18.152,21,15.5,21S11,19.72,11,18.571v-.925a8.329,8.329,0,0,0,4.5,1.211A8.329,8.329,0,0,0,20,17.646ZM15.5,12c2.652,0,4.5,1.28,4.5,2.429s-1.848,2.428-4.5,2.428S11,15.577,11,14.429,12.848,12,15.5,12Zm-7-9C11.152,3,13,4.23,13,5.333S11.152,7.667,8.5,7.667,4,6.437,4,5.333,5.848,3,8.5,3ZM4,8.482A8.466,8.466,0,0,0,8.5,9.667,8.466,8.466,0,0,0,13,8.482V10.33a6.47,6.47,0,0,0-2.9,1.607,7.694,7.694,0,0,1-1.6.174c-2.652,0-4.5-1.23-4.5-2.333Zm0,4.445a8.475,8.475,0,0,0,4.5,1.184c.178,0,.35-.022.525-.031A3.1,3.1,0,0,0,9,14.429v2.085c-.168.01-.33.042-.5.042-2.652,0-4.5-1.23-4.5-2.334Zm0,4.444a8.466,8.466,0,0,0,4.5,1.185c.168,0,.333-.013.5-.021v.036a3.466,3.466,0,0,0,.919,2.293A7.839,7.839,0,0,1,8.5,21C5.848,21,4,19.77,4,18.667Z"/></svg>
                            <h1 class="text-white">Sale</h1>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="w-32 h-32 bg-purple-500 hover:bg-purple-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg fill="#ffffff" class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.707 2.293A.996.996 0 0 0 11 2H6a.996.996 0 0 0-.707.293l-3 3A.996.996 0 0 0 2 6v5c0 .266.105.52.293.707l10 10a.997.997 0 0 0 1.414 0l8-8a.999.999 0 0 0 0-1.414l-10-10zM8.353 10a1.647 1.647 0 1 1-.001-3.293A1.647 1.647 0 0 1 8.353 10z"></path></g></svg>
                            <h1 class="text-white">Purchase</h1>
                        </div>
                    </div>
                </a>

                <a href="./sm/student.php">
                    <div class="w-32 h-32 bg-green-500 hover:bg-green-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg class="w-10 h-10 mx-auto mb-2" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M505.837,180.418L279.265,76.124c-7.349-3.385-15.177-5.093-23.265-5.093c-8.088,0-15.914,1.708-23.265,5.093 L6.163,180.418C2.418,182.149,0,185.922,0,190.045s2.418,7.896,6.163,9.627l226.572,104.294c7.349,3.385,15.177,5.101,23.265,5.101 c8.088,0,15.916-1.716,23.267-5.101l178.812-82.306v82.881c-7.096,0.8-12.63,6.84-12.63,14.138c0,6.359,4.208,11.864,10.206,13.618 l-12.092,79.791h55.676l-12.09-79.791c5.996-1.754,10.204-7.259,10.204-13.618c0-7.298-5.534-13.338-12.63-14.138v-95.148 l21.116-9.721c3.744-1.731,6.163-5.504,6.163-9.627S509.582,182.149,505.837,180.418z"></path> <path class="st0" d="M256,346.831c-11.246,0-22.143-2.391-32.386-7.104L112.793,288.71v101.638 c0,22.314,67.426,50.621,143.207,50.621c75.782,0,143.209-28.308,143.209-50.621V288.71l-110.827,51.017 C278.145,344.44,267.25,346.831,256,346.831z"></path> </g> </g></svg>
                            <h1 class="text-white">Student</h1>
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