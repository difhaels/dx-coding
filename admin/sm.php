<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login/login-admin.php'); 
    exit;
}
require '../functions/query.php';
$totalIncome = 0;
    $queryIncome = "SELECT SUM(price_course) AS total_income FROM sale
                    JOIN course ON sale.course_sale = course.id_course";
    $resultIncome = query($queryIncome);
    if ($resultIncome) {
        $totalIncome = $resultIncome[0]['total_income'];
    }

    // Step 2: Calculate Total Expenses
    $totalExpenses = 0;

    // Calculate salary expenses for instructors/partners
    $queryInstructorCount = "SELECT COUNT(*) AS total_instructors FROM instructor";
    $resultInstructorCount = query($queryInstructorCount);
    $totalInstructors = $resultInstructorCount[0]['total_instructors'];
    $totalSalaryInstructors = $totalInstructors * 350000;

    // Calculate salary expenses for admins
    $queryAdminCount = "SELECT COUNT(*) AS total_admins FROM admin";
    $resultAdminCount = query($queryAdminCount);
    $totalAdmins = $resultAdminCount[0]['total_admins'];
    $totalSalaryAdmins = $totalAdmins * 550000;

    // Calculate total expenses from items purchases
    $queryTotalItemsExpenses = "SELECT SUM(amount) AS total_items_expenses FROM items";
    $resultTotalItemsExpenses = query($queryTotalItemsExpenses);
    $totalItemsExpenses = $resultTotalItemsExpenses[0]['total_items_expenses'];

    // Summing up total expenses
    $totalExpenses = $totalSalaryInstructors + $totalSalaryAdmins + $totalItemsExpenses;

    // Step 3: Compare Total Income and Total Expenses
    $totalRevenue = $totalIncome - $totalExpenses;
    $totalPercentageIncome = ($totalIncome / ($totalIncome + $totalExpenses)) * 100;
    $totalPercentageExpenses = ($totalExpenses / ($totalIncome + $totalExpenses)) * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Agung Saputra</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        
        <div class="w-full bg-gray-100">
            <div>
                <h1 class="m-5 text-xl">Sales Chart</h1>
                <div class="flex items-center">
                    <div>
                        <div class="w-60">
                            <canvas id="pieChart"></canvas>
                        </div>
                        <script>
                            // Dalam tag <script> pada halaman HTML Anda
                            var ctx = document.getElementById('pieChart').getContext('2d');

                            var data = {
                                labels: ['Income', 'Expenses'],
                                datasets: [{
                                    label: 'Income vs Expenses',
                                    data: [<?= $totalPercentageIncome ?>, <?= $totalPercentageExpenses ?>],
                                    backgroundColor: [
                                        'rgb(34 197 94)', // Blue for Income
                                        'rgb(239 68 68)'  // Red for Expenses
                                    ],
                                    borderWidth: 1
                                }]
                            };

                            var options = {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'top',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2) + '%';
                                            }
                                        }
                                    }
                                }
                            };

                            var pieChart = new Chart(ctx, {
                                type: 'pie',
                                data: data,
                                options: options
                            });
                        </script>
                    </div> 
                    <div class="bg-white rounded-lg shadow-lg p-5 h-fit w-96 ml-10">
                        <div class="bg-green-500 p-3 rounded-lg text-white mb-3">
                            <h1>Income</h1>
                            <?php $inc = number_format($totalIncome, 0, ',', '.')?>
                            <h1>Rp. <?=$inc?></h1>
                        </div>
                        <div class="bg-red-500 p-3 rounded-lg text-white mb-3">
                            <h1>Expenses</h1>
                            <?php $exp = number_format($totalExpenses, 0, ',', '.')?>
                            <h1>Rp. <?=$exp?></h1>
                        </div>
                        <div class="bg-sky-500 p-3 rounded-lg text-white">
                            <h1>Remaining Income</h1>
                            <?php $remai = number_format(($totalIncome-$totalExpenses), 0, ',', '.')?>
                            <h1>Rp. <?=$remai?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="m-5 text-xl">Sales Management</h1>
            <div class="m-5 flex flex-wrap gap-3">
                <a href="./sm/sale.php" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="w-32 h-32 bg-blue-500 hover:bg-blue-400 flex justify-center items-center rounded-lg">
                        <div>
                            <svg fill="#FFFFFF" class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.5,23a9.069,9.069,0,0,0,3.5-.68,8.92,8.92,0,0,0,3.5.68c3.645,0,6.5-1.945,6.5-4.429V14.429C22,11.945,19.145,10,15.5,10c-.169,0-.335.008-.5.017V5.333C15,2.9,12.145,1,8.5,1S2,2.9,2,5.333V18.667C2,21.1,4.855,23,8.5,23ZM20,18.571C20,19.72,18.152,21,15.5,21S11,19.72,11,18.571v-.925a8.329,8.329,0,0,0,4.5,1.211A8.329,8.329,0,0,0,20,17.646ZM15.5,12c2.652,0,4.5,1.28,4.5,2.429s-1.848,2.428-4.5,2.428S11,15.577,11,14.429,12.848,12,15.5,12Zm-7-9C11.152,3,13,4.23,13,5.333S11.152,7.667,8.5,7.667,4,6.437,4,5.333,5.848,3,8.5,3ZM4,8.482A8.466,8.466,0,0,0,8.5,9.667,8.466,8.466,0,0,0,13,8.482V10.33a6.47,6.47,0,0,0-2.9,1.607,7.694,7.694,0,0,1-1.6.174c-2.652,0-4.5-1.23-4.5-2.333Zm0,4.445a8.475,8.475,0,0,0,4.5,1.184c.178,0,.35-.022.525-.031A3.1,3.1,0,0,0,9,14.429v2.085c-.168.01-.33.042-.5.042-2.652,0-4.5-1.23-4.5-2.334Zm0,4.444a8.466,8.466,0,0,0,4.5,1.185c.168,0,.333-.013.5-.021v.036a3.466,3.466,0,0,0,.919,2.293A7.839,7.839,0,0,1,8.5,21C5.848,21,4,19.77,4,18.667Z"/></svg>
                            <h1 class="text-white">Sale</h1>
                        </div>
                    </div>
                </a>
                
                <a href="./sm/expenses.php" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="w-32 h-32 bg-purple-500 hover:bg-purple-400 flex justify-center items-center rounded-lg">
                        <div>
                        <svg class="w-10 h-10 mx-auto mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 10H10" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20.8333 11H18.2308C16.4465 11 15 12.3431 15 14C15 15.6569 16.4465 17 18.2308 17H20.8333C20.9167 17 20.9583 17 20.9935 16.9979C21.5328 16.965 21.9623 16.5662 21.9977 16.0654C22 16.0327 22 15.994 22 15.9167V12.0833C22 12.006 22 11.9673 21.9977 11.9346C21.9623 11.4338 21.5328 11.035 20.9935 11.0021C20.9583 11 20.9167 11 20.8333 11Z" stroke="#FFFFFF" stroke-width="1.5"></path> <path d="M20.965 11C20.8873 9.1277 20.6366 7.97975 19.8284 7.17157C18.6569 6 16.7712 6 13 6H10C6.22876 6 4.34315 6 3.17157 7.17157C2 8.34315 2 10.2288 2 14C2 17.7712 2 19.6569 3.17157 20.8284C4.34315 22 6.22876 22 10 22H13C16.7712 22 18.6569 22 19.8284 20.8284C20.6366 20.0203 20.8873 18.8723 20.965 17" stroke="#FFFFFF" stroke-width="1.5"></path> <path d="M6 6L9.73549 3.52313C10.7874 2.82562 12.2126 2.82562 13.2645 3.52313L17 6" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17.9912 14H18.0002" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>                            
                        <h1 class="text-white">Expenses</h1>
                        </div>
                    </div>
                </a>

                <a href="./sm/student.php" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="w-32 h-32 bg-rose-500 hover:bg-rose-400 flex justify-center items-center rounded-lg">
                        <div>
                            <svg class="w-10 h-10 mx-auto mb-2" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M505.837,180.418L279.265,76.124c-7.349-3.385-15.177-5.093-23.265-5.093c-8.088,0-15.914,1.708-23.265,5.093 L6.163,180.418C2.418,182.149,0,185.922,0,190.045s2.418,7.896,6.163,9.627l226.572,104.294c7.349,3.385,15.177,5.101,23.265,5.101 c8.088,0,15.916-1.716,23.267-5.101l178.812-82.306v82.881c-7.096,0.8-12.63,6.84-12.63,14.138c0,6.359,4.208,11.864,10.206,13.618 l-12.092,79.791h55.676l-12.09-79.791c5.996-1.754,10.204-7.259,10.204-13.618c0-7.298-5.534-13.338-12.63-14.138v-95.148 l21.116-9.721c3.744-1.731,6.163-5.504,6.163-9.627S509.582,182.149,505.837,180.418z"></path> <path class="st0" d="M256,346.831c-11.246,0-22.143-2.391-32.386-7.104L112.793,288.71v101.638 c0,22.314,67.426,50.621,143.207,50.621c75.782,0,143.209-28.308,143.209-50.621V288.71l-110.827,51.017 C278.145,344.44,267.25,346.831,256,346.831z"></path> </g> </g></svg>
                            <div class="text-center">
                                <h1 class="text-white">Student</h1>
                                <h1 class="text-white">(customer)</h1>
                            </div>
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