<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project ERP - Pembelian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-slate-200 flex items-center justify-between py-3 px-3">
        <h1 class="text-2xl">Project ERP</h1>
        <a  class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-300" href="../index.php">back</a>
    </nav>

    <div class="m-5 flex gap-3">

        <a href="./daftar_pembelian.php">
            <div class="w-32 h-32 bg-red-500 hover:bg-red-400 flex justify-center items-center rounded-sm">
                <div>
                <svg fill="#FFFFFF" class="w-10 h-10 mx-auto mb-2" viewBox="0 0 16 16" id="request-approval-16px" xmlns="http://www.w3.org/2000/svg">
                    <path id="Path_47" data-name="Path 47" d="M-19,12a2,2,0,0,0,2-2,2,2,0,0,0-2-2,2,2,0,0,0-2,2A2,2,0,0,0-19,12Zm0-3a1,1,0,0,1,1,1,1,1,0,0,1-1,1,1,1,0,0,1-1-1A1,1,0,0,1-19,9Zm2.5,4h-5A2.5,2.5,0,0,0-24,15.5,1.5,1.5,0,0,0-22.5,17h7A1.5,1.5,0,0,0-14,15.5,2.5,2.5,0,0,0-16.5,13Zm1,3h-7a.5.5,0,0,1-.5-.5A1.5,1.5,0,0,1-21.5,14h5A1.5,1.5,0,0,1-15,15.5.5.5,0,0,1-15.5,16ZM-8,3.5v5A2.5,2.5,0,0,1-10.5,11h-2.793l-1.853,1.854A.5.5,0,0,1-15.5,13a.489.489,0,0,1-.191-.038A.5.5,0,0,1-16,12.5v-2a.5.5,0,0,1,.5-.5.5.5,0,0,1,.5.5v.793l1.146-1.147A.5.5,0,0,1-13.5,10h3A1.5,1.5,0,0,0-9,8.5v-5A1.5,1.5,0,0,0-10.5,2h-7A1.5,1.5,0,0,0-19,3.5v3a.5.5,0,0,1-.5.5.5.5,0,0,1-.5-.5v-3A2.5,2.5,0,0,1-17.5,1h7A2.5,2.5,0,0,1-8,3.5Zm-6.854,4.354-2-2a.5.5,0,0,1,0-.708.5.5,0,0,1,.708,0L-14.5,6.793l2.646-2.647a.5.5,0,0,1,.708,0,.5.5,0,0,1,0,.708l-3,3A.5.5,0,0,1-14.5,8,.5.5,0,0,1-14.854,7.854Z" transform="translate(24 -1)"/>
                </svg>
                    <h1 class="text-white text-center">Daftar Pembelian</h1>
                </div>
            </div>
        </a>

        <a href="./data_kelas.php">
            <div class="w-32 h-32 bg-red-500 hover:bg-red-400 flex justify-center items-center rounded-sm">
                <div>
                    <svg fill="#FFFFFF" class="w-10 h-10 mx-auto mb-2" viewBox="0 0 16 16" id="request-new-16px" xmlns="http://www.w3.org/2000/svg">
                        <path id="Path_46" data-name="Path 46" d="M-17,11a2,2,0,0,0,2-2,2,2,0,0,0-2-2,2,2,0,0,0-2,2A2,2,0,0,0-17,11Zm0-3a1,1,0,0,1,1,1,1,1,0,0,1-1,1,1,1,0,0,1-1-1A1,1,0,0,1-17,8Zm2.5,4h-5A2.5,2.5,0,0,0-22,14.5,1.5,1.5,0,0,0-20.5,16h7A1.5,1.5,0,0,0-12,14.5,2.5,2.5,0,0,0-14.5,12Zm1,3h-7a.5.5,0,0,1-.5-.5A1.5,1.5,0,0,1-19.5,13h5A1.5,1.5,0,0,1-13,14.5.5.5,0,0,1-13.5,15ZM-6,2.5v5A2.5,2.5,0,0,1-8.5,10h-2.793l-1.853,1.854A.5.5,0,0,1-13.5,12a.489.489,0,0,1-.191-.038A.5.5,0,0,1-14,11.5v-2a.5.5,0,0,1,.5-.5.5.5,0,0,1,.5.5v.793l1.146-1.147A.5.5,0,0,1-11.5,9h3A1.5,1.5,0,0,0-7,7.5v-5A1.5,1.5,0,0,0-8.5,1h-7A1.5,1.5,0,0,0-17,2.5v3a.5.5,0,0,1-.5.5.5.5,0,0,1-.5-.5v-3A2.5,2.5,0,0,1-15.5,0h7A2.5,2.5,0,0,1-6,2.5ZM-11.5,2V4.5H-9a.5.5,0,0,1,.5.5.5.5,0,0,1-.5.5h-2.5V8a.5.5,0,0,1-.5.5.5.5,0,0,1-.5-.5V5.5H-15a.5.5,0,0,1-.5-.5.5.5,0,0,1,.5-.5h2.5V2a.5.5,0,0,1,.5-.5A.5.5,0,0,1-11.5,2Z" transform="translate(22)"/>
                    </svg>
                    <h1 class="text-white text-center">Permintaan</h1>
                </div>
            </div>
        </a>
        
    </div>
</body>
</html>