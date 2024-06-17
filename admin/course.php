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
            <a href="">
                <div class="bg-yellow-500 p-2">Course</div>
            </a>
            <a href="./finance.php">
                <div class="hover:bg-slate-600 p-2">Finance</div>
            </a>
            <a href="./about.php">
                <div class="hover:bg-slate-600 p-2">About</div>
            </a>
            <a href="../index.php">
                <div class="bg-red-500 hover:bg-red-400 p-2">Exit</div>
            </a>
        </div>
        
        <div>
            <h1 class="m-5 text-xl">Course</h1>
            <div class="m-5 flex flex-wrap gap-3">
                <a href="./course/courses.php">
                    <div class="w-32 h-32 bg-blue-500 hover:bg-blue-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 12V4C20 2.89543 19.1046 2 18 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V18.5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 2V14L16.8182 11L20 14V5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <h1 class="text-white">Courses</h1>
                        </div>
                    </div>
                </a>
                
                <a href="./course/student.php">
                    <div class="w-32 h-32 bg-purple-500 hover:bg-purple-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg class="w-10 h-10 mx-auto mb-2" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M505.837,180.418L279.265,76.124c-7.349-3.385-15.177-5.093-23.265-5.093c-8.088,0-15.914,1.708-23.265,5.093 L6.163,180.418C2.418,182.149,0,185.922,0,190.045s2.418,7.896,6.163,9.627l226.572,104.294c7.349,3.385,15.177,5.101,23.265,5.101 c8.088,0,15.916-1.716,23.267-5.101l178.812-82.306v82.881c-7.096,0.8-12.63,6.84-12.63,14.138c0,6.359,4.208,11.864,10.206,13.618 l-12.092,79.791h55.676l-12.09-79.791c5.996-1.754,10.204-7.259,10.204-13.618c0-7.298-5.534-13.338-12.63-14.138v-95.148 l21.116-9.721c3.744-1.731,6.163-5.504,6.163-9.627S509.582,182.149,505.837,180.418z"></path> <path class="st0" d="M256,346.831c-11.246,0-22.143-2.391-32.386-7.104L112.793,288.71v101.638 c0,22.314,67.426,50.621,143.207,50.621c75.782,0,143.209-28.308,143.209-50.621V288.71l-110.827,51.017 C278.145,344.44,267.25,346.831,256,346.831z"></path> </g> </g></svg>
                            <h1 class="text-white">Student</h1>
                        </div>
                    </div>
                </a>
                <a href="./course/instructor.php">
                    <div class="w-32 h-32 bg-red-500 hover:bg-red-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg  class="w-10 h-10 mx-auto mb-2" fill="#FFFFFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 794.082 794.082" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M713.298,186.754h0.003c0,90.051,0,179.204,0,269.796c-119.669,0.52-237.33,0.62-357.021,0.442c0-44.206,0-85.371,0-127.49 c-17.63,0-33.229,0-52.015,0c0,44.361-1.585,86.458,0.541,128.362c1.495,29.475,29.195,51.681,59.068,51.744 c114.688,0.25,229.375,0.143,344.062,0.619c34.097,0.146,60.201-24.021,60.039-60.542c-0.386-87.645-0.106-175.291-0.096-262.936 h0.096v-45.693h-54.678L713.298,186.754L713.298,186.754z"></path> <path d="M775.44,72.811c-5.709-1.829-12.212-1.547-18.359-1.557c-57.313-0.103-114.627-0.062-171.938-0.062 c-4.248,0-8.469,0-12.485,0c-1.768-18.784-17.569-33.482-36.814-33.482s-35.052,14.699-36.817,33.482c-4.446,0-9.112,0-13.8,0 c-55.239,0-110.48-0.002-165.728,0.004c-4.833,0.001-9.71-0.352-14.491,0.173c-14.131,1.546-26.798,14.699-26.558,27.161 c0.239,12.377,13.224,25.016,27.354,26.417c3.421,0.34,6.902,0.102,10.354,0.102c147.084,0.003,294.167,0.003,441.25,0.001 c3.455,0,6.929,0.237,10.354-0.082c13.365-1.242,25.063-12.418,26.25-24.873C794.962,90.027,786.329,76.301,775.44,72.811z"></path> <path d="M358.014,201.16v-60.099h-54.678v60.099h2.078c17.43,0,33.452,0,50.521,0H358.014z"></path> <g> <circle cx="149.113" cy="113.355" r="89.043"></circle> <path d="M439.494,215.397H211.476l-11.131,69.235l-10.105,62.865h-13.219l-8.515-96.739l9.972-35.357h-58.729l9.972,35.357 l-8.515,96.739h-13.219L100,297.809l-10.042-62.466l-3.207-19.945H50h-0.125v0.003C22.317,215.468,0,237.825,0,265.398v212.99 c0,27.612,22.386,50,50,50v187.548c0,27.614,22.386,50,50,50c24.416,0,44.731-17.505,49.112-40.646 c4.382,23.142,24.699,40.646,49.115,40.646c27.614,0,50-22.386,50-50V503.403V414.59V315.4h191.269c27.613,0,50-22.387,50-50 C489.494,237.783,467.109,215.397,439.494,215.397z"></path> </g> <path d="M683.544,718.137l0.038-0.039L563.957,598.473v-69.024h-56.055v64.062v4.963L388.278,718.098l0.038,0.039 c-10.936,10.935-10.936,28.663,0,39.598c10.936,10.937,28.663,10.936,39.599,0l79.988-79.988v64.023c0,15.464,12.534,28,28,28 c15.464,0,28-12.536,28-28h0.055v-64.023l79.988,79.988c10.936,10.936,28.663,10.937,39.599,0 C694.479,746.8,694.479,729.072,683.544,718.137z"></path> </g> </g></svg>
                            <h1 class="text-white">Instructor</h1>
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