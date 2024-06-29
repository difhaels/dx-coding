<?php
    require '../../functions/query.php';
    $items = query(" SELECT * FROM items");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dx Coding - Agung Saputra</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../inventory.php">Back</a>   
    </nav>

    <div class="px-5 mt-5 mb-16">
        <h1 class="text-2xl mb-4">Course List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Price (Rupiah)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>               
                        <tr>
                            <td class="border px-4 py-2"><?= $item["id_item"]; ?></td>
                            <td class="border px-4 py-2"><?= $item["item_name"]; ?></td>
                            <td class="border px-4 py-2"><?= $item["purchase_date"]; ?></td>
                            <?php $amount = number_format($item["amount"], 0, ',', '.')?>
                            <td class="border px-4 py-2"><?= $amount; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
