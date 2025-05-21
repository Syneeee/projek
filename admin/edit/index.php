<?php
include '../aksi.php';

if (!isset($_GET['id'])) {
    header(header: 'Location: ../index.php');
    exit;
}

$id = $_GET['id'];
$kelas = getKelasById(id_kelas: $id);

if (!$kelas) {
    echo "Data kelas tidak ditemukan.";
    exit;
}

if (isset($_POST['update'])) {
    updateKelas(id_kelas: $_POST['id_kelas'], nama_kelas: $_POST['nama_kelas'], kompetensi_keahlian: $_POST['kompetensi_keahlian']);
    header(header: 'Location: ../index.php?success=update');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
    <link href="../output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto my-5 p-5 bg-white rounded shadow-md">
        <h1 class="text-2xl font-bold mb-4">Edit Kelas</h1>
        Here's the extracted text from the image you uploaded:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
    <link href="../output.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
<div class="container mx-auto my-5 p-5 bg-white rounded shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Kelas</h1>
    <form action="" method="POST">
        <input type="hidden" name="id_kelas" value="<?= ($kelas['id_kelas']); ?>">
        <div class="mb-3">
            <label class="block font-semibold">Nama kelas</label>
            <input type="text" name="nama_kelas" value="<?= htmlspecialchars(string: $kelas['nama_kelas']); ?>" class="w-full">
        </div>
        <div class="mb-3">
            <label class="block font-semibold">Kompetensi Keahlian</label>
            <input type="text" name="kompetensi_keahlian" value="<?= htmlspecialchars(string: $kelas['kompetensi_keahlian']); ?>" class="w-full">
        </div>
        <div class="flex justify-end">
            <a href="../index.php" class="mr-3 px-4 py-2 bg-gray-300 rounded">Batal</a>
            <button type="submit" name="update" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
        </div>
    </form>
</div>
</body>
</html>


It seems you're working on a web page for editing "kelas" in a PHP and HTML project. Let me know if you'd like help refining or enhancing this code further!
