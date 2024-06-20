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
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../finance.php">Back</a>    
    </nav>

    <div class="px-5 mt-5 mb-16">
        <div>
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
                <h1 id="sales-summary">Total Sales: Rp <?= $totalSales ?></h1>
            </div>
        </div>
        <div>
            <h1 class="text-2xl mb-4">Sales List</h1>
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
                                <td class="border px-4 py-2"><?= $sale["price_course"]; ?></td>
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
