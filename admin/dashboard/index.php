<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <div class="bg-blue-500 text-white p-5 flex justify-between items-center">
        <h1 class="font-bold text-2xl">ADMIN LAUNDRY</h1>
        <div>
            <span>Welcome, Admin</span>
            <button class="bg-gray-300 text-black rounded px-3 py-1 ml-4">Logout</button>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-2">
            <a href="../dashboard/index.php" class="text-blue-500 mx-2">Dashboard</a>
            <a href="../dashboard/pesanan.php" class="text-blue-500 mx-2">Pesanan</a>
            <a href="#" class="text-blue-500 mx-2">Input Pelanggan</a>
            <a href="#" class="text-blue-500 mx-2">Layanan</a>
            <a href="../dashboard/user.php" class="text-blue-500 mx-2">User</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto mt-10">
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-gray-300 flex items-center justify-center h-32">
                <span class="text-2xl font-bold italic">11 User</span>
            </div>
            <div class="bg-gray-300 flex items-center justify-center h-32">
                <span class="text-2xl font-bold italic">5 Transaksi</span>
            </div>
            <div class="bg-gray-300 flex items-center justify-center h-32">
                <span class="text-2xl font-bold italic">4 Selesai</span>
            </div>
        </div>
    </main>
</body>
</html>
