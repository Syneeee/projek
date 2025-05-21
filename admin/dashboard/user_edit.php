<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Laundry</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-5">
        <header class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">ADMIN LAUNDRY</h1>
            <div>
                <span>Welcome, Admin</span>
                <button class="ml-4 bg-blue-500 text-white px-4 py-2 rounded">Logout</button>
            </div>
        </header>

        <?php
         include "../../database.php";

                $id = $_GET['id'];

                $data = mysqli_query($conn,"select * from tb_user where id='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
               

        <div class="mt-5">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold">Tambah User Laundry</h2>
                <form class="mt-4 space-y-4">
                    <div>
                        <label class="block text-gray-700">ID User</label>
                        <input type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded" name="id" placeholder="Masukan ID .." value="<?php echo $d['id']; ?>"/>
                    </div>
                    <div>
                        <label class="block text-gray-700">Nama User</label>
                        <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" name="nama_user" placeholder="Masukan Nama .." value="<?php echo $d['nama']; ?>"/>
                    </div>
                    <div>
                        <label class="block text-gray-700">Username</label>
                        <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" name="username" placeholder="Masukan Username .." value="<?php echo $d['username']; ?>"/>
                    </div>
                    <div>
                        <label class="block text-gray-700">Password User</label>
                        <input type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded" name="password" placeholder="Masukan Password .." value="<?php echo $d['password']; ?>"/>
                    </div>
                    <div>
                        <label class="block text-gray-700">Role User</label>
                        <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" name="role_user" placeholder="Masukan Role .." value="<?php echo $d['role']; ?>"/>
                    </div>

                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
