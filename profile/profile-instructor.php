<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Instructor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../index.php">Back</a>
    </nav>

    <div class="flex justify-center mt-10">
        <div class="bg-white shadow-lg rounded-lg p-6 w-1/3">
            <h2 class="text-2xl font-semibold mb-4">Profile Instructor</h2>
            <div class="mb-4 flex items-center">
                <label class="block text-gray-700 text-sm font-bold mb-2 w-1/3" for="username">Username</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value="instruktur_username" disabled>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 ml-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
            </div>
            <div class="mb-4 flex items-center">
                <label class="block text-gray-700 text-sm font-bold mb-2 w-1/3" for="email">Email</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" value="instruktur_email@example.com" disabled>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 ml-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
            </div>
            <div class="mb-4 flex items-center">
                <label class="block text-gray-700 text-sm font-bold mb-2 w-1/3" for="phone">Phone</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" value="+62 812 3456 7890" disabled>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 ml-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
            </div>
            <div class="mb-4 flex items-center">
                <label class="block text-gray-700 text-sm font-bold mb-2 w-1/3" for="address">Address</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" rows="3" disabled>Jl. Example No. 123, Jakarta, Indonesia</textarea>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 ml-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
            </div>
        </div>
    </div>

    <footer class="fixed bottom-0 text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
