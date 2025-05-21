<?php
include '../database.php';
function createOutlet($nama,$alamat,$telepon){
    $conn = getDatabaseConnection();
    $res = $conn->prepare("INSERT INTO tb_outlet (nama, alamat, telepon)VALUES(:nama, :alamat, :telepon)");
    $res->execute([
        ':nama' => $nama,
        ':alamat' => $alamat,
        ':telepon' => $telepon
    ]
    );
}

if($_SERVER['REQUEST_METHOD'] === "POST"){
    createOutlet(nama: $_POST['nama'], alamat: $_POST['alamat'], telepon: $_POST['telepon']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Outlet</h2>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Outlet" required>
        <input type="text" name="alamat" placeholder="Alamat Outlet" required>
        <input type="text" name="telepon" placeholder="Telepon Outlet"required>
        <button class="py-4 px-2 bg-gray-500" type="submit">Tambah</button>
    </form> 
</body>
</html>