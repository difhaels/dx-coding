<?php
require '../../functions/query.php';

// Function to get the total sales price for a given month
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

$month = isset($_GET['month']) ? (int)$_GET['month'] : null;
$totalSales = getTotalSalesPrice($month);
$formattedTotalSales = number_format($totalSales, 0, ',', '.');

echo json_encode(['total_sales' => $formattedTotalSales]);
?>
