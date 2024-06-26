<?php
    require '../../functions/query.php';
    $sales = query("
        SELECT 
            sale.id_sale, 
            student.name_student, 
            course.name_course, 
            course.price_course, 
            sale.date_sale 
        FROM 
            sale 
        JOIN 
            student 
        ON 
            sale.student_sale = student.id_student 
        JOIN 
            course 
        ON 
            sale.course_sale = course.id_course
    ");

    function getTotalSalesPerMonth() {
        $monthlySales = [];
        for ($month = 1; $month <= 12; $month++) {
            $query = "SELECT SUM(c.price_course) as total_sales
                    FROM sale s
                    JOIN course c ON s.course_sale = c.id_course
                    WHERE MONTH(s.date_sale) = $month AND YEAR(s.date_sale) = 2024";
            $result = query($query);
            $monthlySales[$month] = $result[0]['total_sales'] ?? 0;
        }
        return $monthlySales;
    }
    
    $monthlySales = getTotalSalesPerMonth();

    function getTotalSalesPrice($month = null) {
        $query = "SELECT SUM(c.price_course) as total_sales
                FROM sale s
                JOIN course c ON s.course_sale = c.id_course";
        if ($month) {
            $query .= " WHERE MONTH(s.date_sale) = $month AND YEAR(s.date_sale) = 2024";
        }
        $result = query($query);
        return $result[0]['total_sales'] ?? 0;
    }
    
    $totalSales = getTotalSalesPrice();
    $formattedTotalSales = number_format($totalSales, 0, ',', '.');

$totalSales = getTotalSalesPrice();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dx Coding - Sales List</title>
    <link rel="stylesheet" href="../../css/output.css">
    <script>
        function updateSalesSummary() {
            const month = document.getElementById("month-select").value;
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "get_sales_summary.php?month=" + month, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    const response = JSON.parse(this.responseText);
                    document.getElementById("sales-summary").innerText = "Total Sales: Rp " + response.total_sales;
                }
            };
            xhr.send();
        }

        
    </script>
    <style>
        .bar-container {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            height: 300px;
            margin: 20px 0;
        }
        .bar {
            width: 40px;
            background-color: #4A90E2;
            text-align: center;
            color: black;
            font-size: 16px;
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../sm.php">Back</a>    
    </nav>

    <div class="px-5 mt-5 mb-16">
        <div class="flex gap-2">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
                <h1 class="text-2xl mb-4">Sales Bar Chart (Jan->Dec)</h1>
                <div class="bar-container">
                    <?php
                    $maxSales = max($monthlySales); // Get the maximum sales value for scaling the bars
                    foreach ($monthlySales as $month => $totalSales) {
                        $barHeight = $maxSales > 0 ? ($totalSales / $maxSales) * 100 : 0;
                        $formattedTotalSales = number_format($totalSales, 0, ',', '.');
                        echo "<div style='height: {$barHeight}%' class='bar'>{$formattedTotalSales}</div>";
                    }
                    ?>
                </div>
            </div>
            <div class=" w-96 h-fit p-5 rounded-xl shadow-xl">
                <h1 class="text-2xl mb-4">Sales Summary</h1>
                <div>
                    <select id="month-select" onchange="updateSalesSummary()" class="mb-4 p-2 border border-gray-300 rounded-lg">
                        <option value="">All</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <h1 class="text-xl mb-5" id="sales-summary">Total Sales: Rp <?= $totalSales ?></h1>
                    <a href="" class="bg-green-700 rounded-lg px-3 py-2 text-white">print</a>
                </div>
            </div>
        </div>
        <div>
            <h1 class="text-2xl mt-4 mb-4">Sales List</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Student Name</th>
                            <th class="px-4 py-2">Course Name</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($sales as $sale) : ?>               
                            <tr>
                                <td class="border px-4 py-2 text-center"><?= $no++; ?></td>
                                <td class="border px-4 py-2"><?= $sale["id_sale"]; ?></td>
                                <td class="border px-4 py-2"><?= $sale["name_student"]; ?></td>
                                <td class="border px-4 py-2"><?= $sale["name_course"]; ?></td>
                                <?php $pprice = number_format($sale["price_course"], 0, ',', '.')?>
                                <td class="border px-4 py-2"><?= $pprice; ?></td>
                                <td class="border px-4 py-2"><?= $sale["date_sale"]; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
