<?php
session_start();
include '../../functions/query.php';

// Ambil total gaji instructor
$result_instructor = query("SELECT COUNT(*) AS total_instructor FROM instructor");
$total_instructor = $result_instructor[0]['total_instructor'];
$instructor_salary = $total_instructor * 350000;

// Ambil total gaji admin
$result_admin = query("SELECT COUNT(*) AS total_admin FROM admin");
$total_admin = $result_admin[0]['total_admin'];
$admin_salary = $total_admin * 550000;

// Ambil daftar pembelian items
$items = query("SELECT * FROM items");

// Hitung total pengeluaran
$total_expenses = $instructor_salary + $admin_salary;
foreach ($items as $item) {
    $total_expenses += $item['amount'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses - Project ERP</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="bg-gray-100">
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../sm.php">Back</a>    
    </nav>
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
            <h2 class="text-2xl font-semibold mb-6 text-center">Expenses</h2>
            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2">Partner Salary</h3>
                <p>Total Instructor/Partner: <?= $total_instructor ?></p>
                <p>Partner Salary Total: Rp <?= number_format($instructor_salary, 0, ',', '.') ?></p>
            </div>
            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2">Admin Salary</h3>
                <p>Total Admin: <?= $total_admin ?></p>
                <p>Admin Salary Total: Rp <?= number_format($admin_salary, 0, ',', '.') ?></p>
            </div>
            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-2">Items Purchased</h3>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">Item Name</th>
                            <th class="px-4 py-2">Purchase Date</th>
                            <th class="px-4 py-2">Amount (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item) : ?>
                            <tr>
                                <td class="border px-4 py-2"><?= $item['item_name'] ?></td>
                                <td class="border px-4 py-2"><?= $item['purchase_date'] ?></td>
                                <td class="border px-4 py-2"><?= number_format($item['amount'], 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                <h3 class="text-xl font-semibold mb-2">Total Expenses</h3>
                <p>Total Expenses: Rp <?= number_format($total_expenses, 0, ',', '.') ?></p>
            </div>
        </div>
    </div>
    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
