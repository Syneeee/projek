<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Laundry</title>
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow">

<div class="bg-blue-500 text-white p-5 flex justify-between items-center">
        <h1 class="font-bold text-2xl">ADMIN LAUNDRY</h1>
        <div>
            <span>Welcome, Admin</span>
            <button class="bg-gray-300 text-black rounded px-3 py-1 ml-4">Logout</button>
        </div>
    </div>

        <div class="container mx-auto px-4 py-2">
            <a href="../dashboard/index.php" class="text-blue-500 mx-2">Dashboard</a>
            <a href="../dashboard/pesanan.php" class="text-blue-500 mx-2">Pesanan</a>
            <a href="../dashboard/input_pelanggan.php" class="text-blue-500 mx-2">Input Pelanggan</a>
            <a href="#" class="text-blue-500 mx-2">Layanan</a>
            <a href="#" class="text-blue-500 mx-2">User</a>
        </div>
    </nav>

    <div class="container mx-auto mt-6 bg-white p-6 rounded-md shadow-md">
        <a href = '../dashboard/user_tambah.php' class="border bg-blue-600 text-white px-2 py-1 rounded"> Tambahkan User </a>
        <br>
        <br>
        <br>
        <table class="min-w-full border-collapse border border-gray-300">
            <tr>
                 <th width="1%">no</th>
                    <th>id</th>
                    <th>nama</th>
                    <th>username</th>
                    <th width="15%">Opsi</th>
            </tr>

            <?php
require_once "../../database.php";
$conn = getDatabaseConnection();

try {
    $stmt = $conn->prepare("SELECT * FROM tb_user");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

            <?php $no = 1; ?>
        <?php foreach ($users as $user): ?>
        <tr class="bg-gray-100">
            <td class="border border-gray-200 px-4 py-2"><?php echo $no++; ?></td>
            <td class="border border-gray-200 px-4 py-2 text-center"><?php echo htmlspecialchars($user['id']); ?></td>
            <td class="border border-gray-200 px-4 py-2 text-center"><?php echo htmlspecialchars($user['nama']); ?></td>
            <td class="border border-gray-200 px-4 py-2 text-center"><?php echo htmlspecialchars($user['username']); ?></td>
            <td class="border border-gray-200 px-4 py-2 text-center"><?php echo htmlspecialchars($user['role']); ?></td>
            <td class="border border-gray-200 px-4 py-2 text-center">
                <a class="bg-green-500 text-white px-2 py-1 rounded" href="user_edit.php?id=<?php echo $user['id']; ?>">Edit</a>
                <a class="bg-red-600 text-white px-2 py-1 rounded" href="user_hapus.php?id=<?php echo $user['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
                
        </table>
    </div>

</body>
</html>