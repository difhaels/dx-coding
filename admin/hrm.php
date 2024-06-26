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
                <div class=" bg-yellow-500 p-2">HRM</div>
            </a>
            <a href="./sm.php">
                <div class=" hover:bg-slate-600 p-2">SM</div>
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
        
        <div class="bg-gray-100 w-full">
            <h1 class="m-5 text-xl">Human Resources Management</h1>
            <div class="m-5 flex flex-wrap gap-3">
                <a href="./hrm/employees.php" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="w-32 h-32 bg-purple-500 hover:bg-purple-400 flex justify-center items-center rounded-lg">
                        <div>
                            <svg class="w-10 h-10 mx-auto mb-2" fill="#FFFFFF" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="XMLID_530_"> <g id="XMLID_531_"> <path id="XMLID_532_" d="M115,147.75c20.389,0,38.531-9.78,50-24.889c11.469,15.109,29.611,24.889,50,24.889 c34.601,0,62.75-28.149,62.75-62.75S249.601,22.25,215,22.25c-20.389,0-38.531,9.78-50,24.889 C153.531,32.03,135.389,22.25,115,22.25c-34.601,0-62.75,28.149-62.75,62.75S80.399,147.75,115,147.75z M215,52.25 c18.059,0,32.75,14.691,32.75,32.75s-14.691,32.75-32.75,32.75S182.25,103.059,182.25,85S196.941,52.25,215,52.25z M115,52.25 c18.059,0,32.75,14.691,32.75,32.75s-14.691,32.75-32.75,32.75S82.25,103.059,82.25,85S96.941,52.25,115,52.25z"></path> </g> <g id="XMLID_536_"> <path id="XMLID_782_" d="M215,177.75c-17.373,0-34.498,3.942-50.022,11.44c-15.122-7.327-32.078-11.44-49.978-11.44 c-63.411,0-115,51.589-115,115c0,8.284,6.716,15,15,15h200h100c8.284,0,15-6.716,15-15C330,229.339,278.411,177.75,215,177.75z M31.325,277.75c7.106-39.739,41.923-70,83.675-70s76.569,30.261,83.675,70H31.325z M229.021,277.75 c-3.45-26.373-15.873-49.96-34.092-67.597c6.539-1.583,13.277-2.403,20.07-2.403c41.751,0,76.569,30.261,83.675,70H229.021z"></path> </g> </g> </g></svg>                            
                            <h1 class="text-white">Employees</h1>
                        </div>
                    </div>
                </a>
                <a href="./hrm/admin.php" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="w-32 h-32 bg-blue-500 hover:bg-blue-400 flex justify-center items-center rounded-lg">
                        <div>
                            <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#FFFFFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.9999 15.2547C13.8661 14.4638 12.4872 14 10.9999 14C7.40399 14 4.44136 16.7114 4.04498 20.2013C4.01693 20.4483 4.0029 20.5718 4.05221 20.6911C4.09256 20.7886 4.1799 20.8864 4.2723 20.9375C4.38522 21 4.52346 21 4.79992 21H9.94465M13.9999 19.2857L15.7999 21L19.9999 17M14.9999 7C14.9999 9.20914 13.2091 11 10.9999 11C8.79078 11 6.99992 9.20914 6.99992 7C6.99992 4.79086 8.79078 3 10.9999 3C13.2091 3 14.9999 4.79086 14.9999 7Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>                          
                            <h1 class="text-white">Admin</h1>
                        </div>
                    </div>
                </a>
                <a href="./hrm/instructor.php" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="w-32 h-32 bg-red-500 hover:bg-red-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg  class="w-10 h-10 mx-auto mb-2" fill="#FFFFFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 794.082 794.082" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M713.298,186.754h0.003c0,90.051,0,179.204,0,269.796c-119.669,0.52-237.33,0.62-357.021,0.442c0-44.206,0-85.371,0-127.49 c-17.63,0-33.229,0-52.015,0c0,44.361-1.585,86.458,0.541,128.362c1.495,29.475,29.195,51.681,59.068,51.744 c114.688,0.25,229.375,0.143,344.062,0.619c34.097,0.146,60.201-24.021,60.039-60.542c-0.386-87.645-0.106-175.291-0.096-262.936 h0.096v-45.693h-54.678L713.298,186.754L713.298,186.754z"></path> <path d="M775.44,72.811c-5.709-1.829-12.212-1.547-18.359-1.557c-57.313-0.103-114.627-0.062-171.938-0.062 c-4.248,0-8.469,0-12.485,0c-1.768-18.784-17.569-33.482-36.814-33.482s-35.052,14.699-36.817,33.482c-4.446,0-9.112,0-13.8,0 c-55.239,0-110.48-0.002-165.728,0.004c-4.833,0.001-9.71-0.352-14.491,0.173c-14.131,1.546-26.798,14.699-26.558,27.161 c0.239,12.377,13.224,25.016,27.354,26.417c3.421,0.34,6.902,0.102,10.354,0.102c147.084,0.003,294.167,0.003,441.25,0.001 c3.455,0,6.929,0.237,10.354-0.082c13.365-1.242,25.063-12.418,26.25-24.873C794.962,90.027,786.329,76.301,775.44,72.811z"></path> <path d="M358.014,201.16v-60.099h-54.678v60.099h2.078c17.43,0,33.452,0,50.521,0H358.014z"></path> <g> <circle cx="149.113" cy="113.355" r="89.043"></circle> <path d="M439.494,215.397H211.476l-11.131,69.235l-10.105,62.865h-13.219l-8.515-96.739l9.972-35.357h-58.729l9.972,35.357 l-8.515,96.739h-13.219L100,297.809l-10.042-62.466l-3.207-19.945H50h-0.125v0.003C22.317,215.468,0,237.825,0,265.398v212.99 c0,27.612,22.386,50,50,50v187.548c0,27.614,22.386,50,50,50c24.416,0,44.731-17.505,49.112-40.646 c4.382,23.142,24.699,40.646,49.115,40.646c27.614,0,50-22.386,50-50V503.403V414.59V315.4h191.269c27.613,0,50-22.387,50-50 C489.494,237.783,467.109,215.397,439.494,215.397z"></path> </g> <path d="M683.544,718.137l0.038-0.039L563.957,598.473v-69.024h-56.055v64.062v4.963L388.278,718.098l0.038,0.039 c-10.936,10.935-10.936,28.663,0,39.598c10.936,10.937,28.663,10.936,39.599,0l79.988-79.988v64.023c0,15.464,12.534,28,28,28 c15.464,0,28-12.536,28-28h0.055v-64.023l79.988,79.988c10.936,10.936,28.663,10.937,39.599,0 C694.479,746.8,694.479,729.072,683.544,718.137z"></path> </g> </g></svg>
                            <h1 class="text-white">Instructor</h1>
                        </div>
                    </div>
                </a>
                <a href="./hrm/add_instructor.php" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="w-32 h-32 bg-green-500 hover:bg-green-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg  class="w-10 h-10 mx-auto mb-2" fill="#FFFFFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 794.082 794.082" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M713.298,186.754h0.003c0,90.051,0,179.204,0,269.796c-119.669,0.52-237.33,0.62-357.021,0.442c0-44.206,0-85.371,0-127.49 c-17.63,0-33.229,0-52.015,0c0,44.361-1.585,86.458,0.541,128.362c1.495,29.475,29.195,51.681,59.068,51.744 c114.688,0.25,229.375,0.143,344.062,0.619c34.097,0.146,60.201-24.021,60.039-60.542c-0.386-87.645-0.106-175.291-0.096-262.936 h0.096v-45.693h-54.678L713.298,186.754L713.298,186.754z"></path> <path d="M775.44,72.811c-5.709-1.829-12.212-1.547-18.359-1.557c-57.313-0.103-114.627-0.062-171.938-0.062 c-4.248,0-8.469,0-12.485,0c-1.768-18.784-17.569-33.482-36.814-33.482s-35.052,14.699-36.817,33.482c-4.446,0-9.112,0-13.8,0 c-55.239,0-110.48-0.002-165.728,0.004c-4.833,0.001-9.71-0.352-14.491,0.173c-14.131,1.546-26.798,14.699-26.558,27.161 c0.239,12.377,13.224,25.016,27.354,26.417c3.421,0.34,6.902,0.102,10.354,0.102c147.084,0.003,294.167,0.003,441.25,0.001 c3.455,0,6.929,0.237,10.354-0.082c13.365-1.242,25.063-12.418,26.25-24.873C794.962,90.027,786.329,76.301,775.44,72.811z"></path> <path d="M358.014,201.16v-60.099h-54.678v60.099h2.078c17.43,0,33.452,0,50.521,0H358.014z"></path> <g> <circle cx="149.113" cy="113.355" r="89.043"></circle> <path d="M439.494,215.397H211.476l-11.131,69.235l-10.105,62.865h-13.219l-8.515-96.739l9.972-35.357h-58.729l9.972,35.357 l-8.515,96.739h-13.219L100,297.809l-10.042-62.466l-3.207-19.945H50h-0.125v0.003C22.317,215.468,0,237.825,0,265.398v212.99 c0,27.612,22.386,50,50,50v187.548c0,27.614,22.386,50,50,50c24.416,0,44.731-17.505,49.112-40.646 c4.382,23.142,24.699,40.646,49.115,40.646c27.614,0,50-22.386,50-50V503.403V414.59V315.4h191.269c27.613,0,50-22.387,50-50 C489.494,237.783,467.109,215.397,439.494,215.397z"></path> </g> <path d="M683.544,718.137l0.038-0.039L563.957,598.473v-69.024h-56.055v64.062v4.963L388.278,718.098l0.038,0.039 c-10.936,10.935-10.936,28.663,0,39.598c10.936,10.937,28.663,10.936,39.599,0l79.988-79.988v64.023c0,15.464,12.534,28,28,28 c15.464,0,28-12.536,28-28h0.055v-64.023l79.988,79.988c10.936,10.936,28.663,10.937,39.599,0 C694.479,746.8,694.479,729.072,683.544,718.137z"></path> </g> </g></svg>
                            <h1 class="text-white">Add Instructor</h1>
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