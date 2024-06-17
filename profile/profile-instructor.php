<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Instructor</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body>
    <nav class="bg-slate-200 flex justify-between items-center px-5">
        <h1 class="text-2xl py-3">Dx Coding</h1>
        <a class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-400 cursor-pointer" href="../index.php">Back</a>
    </nav>

    <div class="flex justify-between items-start gap-10 mx-4 mb-20">
        <div class="flex justify-center mt-10 w-1/2">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <h2 class="text-2xl font-semibold mb-4">Profile Instructor</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" value="instructor_username" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" value="instructor_email@example.com" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" value="+62 812 3456 7890" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" rows="3" disabled>Jl. Example No. 123, Jakarta, Indonesia</textarea>
                </div>
                <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 ml-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
            </div>
        </div>
        <div class="flex justify-center mt-10 w-1/2">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <h2 class="text-2xl font-semibold mb-4">Course</h2>
                <div class="flex flex-wrap justify-start items-center gap-3">
                    <a href="">
                        <div class="w-52 bg-red-500 shadow-lg rounded-lg px-3 py-2 text-white">
                            <h1 class="font-bold text-xl text-center">+</h1>
                        </div>
                    </a>
                    <a href="">
                        <div class="w-52 bg-red-500 shadow-lg rounded-lg px-3 py-2 text-white">
                            <h1>Course dasar pemrograman</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="text-center bg-slate-900 text-white py-10 w-full">
        <h1>Dibuat Agung Saputra dengan <span class="font-bold">php</span> dan <span class="font-bold">tailwind</span></h1>
    </footer>
</body>
</html>
