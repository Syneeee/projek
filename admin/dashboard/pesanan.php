<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="bg-blue-500 text-white p-5 flex justify-between items-center">
        <h1 class="font-bold text-2xl">ADMIN LAUNDRY</h1>
        <div>
            <span>Welcome, Admin</span>
            <button class="bg-gray-300 text-black rounded px-3 py-1 ml-4">Logout</button>
        </div>
    </div>

    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-2">
            <a href="../dashboard/index.php" class="text-blue-500 mx-2">Dashboard</a>
            <a href="../dashboard/pesanan.php" class="text-blue-500 mx-2">Pesanan</a>
            <a href="#" class="text-blue-500 mx-2">Input Pelanggan</a>
            <a href="#" class="text-blue-500 mx-2">Layanan</a>
            <a href="../dashboard/user.php" class="text-blue-500 mx-2">User</a>
        </div>
    </nav>

    <div class="container mx-auto mt-5 p-5 bg-gray-200 rounded shadow">
        <h2 class="font-semibold text-xl mb-4">Tambah Pesanan</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr class="border-b">
                    <th class="py-2 px-4 text-left">No</th>
                    <th class="py-2 px-4 text-left">Id Paket</th>
                    <th class="py-2 px-4 text-left">Nama Outlet</th>
                    <th class="py-2 px-4 text-left">Jenis Paket</th>
                    <th class="py-2 px-4 text-left">Nama Paket</th>
                    <th class="py-2 px-4 text-left">Harga</th>
                    <th class="py-2 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">Garut Ka Luhur</td>
                    <td class="py-2 px-4">Bed_cover</td>
                    <td class="py-2 px-4">Cuci bed cover kecil</td>
                    <td class="py-2 px-4">Rp. 12.300</td>
                    <td class="py-2 px-4">
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain jika perlu -->
            </tbody>
        </table>
    </div>
</body>
</html>
