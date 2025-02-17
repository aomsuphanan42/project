<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คู่มือการใช้งาน</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://cdn.pixabay.com/photo/2019/04/10/11/56/watercolor-4116932_640.png') no-repeat center center fixed;
            background-size: cover;
        }
        
    </style>
</head>
<body class="font-sans text-xl flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-xl border border-gray-200 w-96 text-center">
        <div class="flex items-center justify-center mb-6">
            <img src="https://upload.wikimedia.org/wikipedia/th/e/e0/RMUTI_KORAT.png" alt="RMUTI Logo" class="w-24 h-auto">
        </div>
        <h1 class="text-2xl font-sans text-gray-800 mb-6">คู่มือการใช้งานเว็บไซต์</h1>
        <div class="space-y-6">
            <!-- ปุ่มคู่มือสำหรับเจ้าหน้าที่ -->
            <a href="webboard.php" class="block">
                <button class="w-full px-6 py-4 bg-gradient-to-r from-[#2B547E] to-[#29465B] text-white text-lg font-sans rounded-lg shadow-lg transform hover:scale-105 hover:shadow-2xl transition duration-300">
                    คู่มือสำหรับเจ้าหน้าที่
                </button>
            </a>
            <!-- ปุ่มคู่มือสำหรับผู้ชำระค่าปรับ -->
            <a href="home1.php" class="block">
                <button class="w-full px-6 py-4 bg-gradient-to-r from-[#50C878] to-[#1B8A6B] text-white text-lg font-sans rounded-lg shadow-lg transform hover:scale-105 hover:shadow-2xl transition duration-300">
                    คู่มือสำหรับผู้ชำระค่าปรับ
                </button>
            </a>
        </div>
    </div>
</body>
</html>
