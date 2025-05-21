<?php
include __DIR__ . '/../database.php';


function getAllData(): array {
    $conn = getDatabaseConnection();
    $sql = "SELECT * FROM kelas";
    $stnt = $conn->prepare(query: $sql);
    $stnt->execute();
    return $stnt->fetchAll(PDO::FETCH_ASSOC);
    exit;
}

function getKelasById($id_kelas): mixed {
    $conn = getDatabaseConnection();
    $sql = "SELECT * FROM kelas WHERE id_kelas = ?";
    $stnt = $conn->prepare(query: $sql);
    $stnt->execute(params: [$id_kelas]);
    return $stnt->fetch( PDO::FETCH_ASSOC);
    header(header: "Location: /admin/index.php");
    exit;
}

function createKelas($nama_kelas, $kompetensi_keahlian): never {
    $conn = getDatabaseConnection();
    $sql = "INSERT INTO kelas (nama_kelas, kompetensi_keahlian) VALUES (?, ?)";
    $stnt = $conn->prepare(query: $sql);
    $stnt->execute(params: [$nama_kelas, $kompetensi_keahlian]);
    header(header: "Location: /admin/index.php");
    exit;
}

function updateKelas($id_kelas, $nama_kelas, $kompetensi_keahlian): never {
    $conn = getDatabaseConnection();
    $sql = "UPDATE kelas SET nama_kelas = ?, kompetensi_keahlian = ? WHERE id_kelas = ?";
    $stnt = $conn->prepare(query: $sql);
    $stnt->execute(params: [$nama_kelas, $kompetensi_keahlian, $id_kelas]);
    header(header: "Location: /admin/index.php");
    exit;
}


function deleteKelas($id_kelas): never {
    $conn = getDatabaseConnection();
    $sql = "DELETE FROM kelas WHERE id_kelas = ?";
    $stnt = $conn->prepare(query: $sql);
    $stnt->execute(params:[$id_kelas]);
    header(header: "Location: /admin/index.php");
    exit;
}
?>
