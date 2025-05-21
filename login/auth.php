<?php
require_once "../database.php";
session_start();

function getAllOutlet(): array{
    $conn = getDatabaseConnection();
    $result = $conn->query('SELECT * FROM tb_outlet');
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

function register($table, $nama, $username, $password): bool|string {
    $conn = getDatabaseConnection();
    
    $res = $conn->prepare("SELECT * FROM $table WHERE username = :username");
    $res->execute([':username' => $username]);

    if ($res->rowCount() > 0) {
        return "Username sudah terdaftar";
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $res = $conn->prepare("INSERT INTO $table (nama, username, password) VALUES (:nama, :username, :password)");
    $res->execute([
        ':nama' => $nama,
        ':username' => $username,
        ':password' => $hashedPassword
    ]);

    return true;
}


function login($tipe, $username, $password): string {
    $conn = getDatabaseConnection();

    $res = $conn->prepare(query: "SELECT * FROM $tipe WHERE username = :username");
    $res->execute(params: [$username]);
    $data = $res->fetch(mode: PDO::FETCH_ASSOC);

    if ($data && password_verify(password: $password, hash: $data['password'])) {
        $_SESSION['user'] = $data;
        $_SESSION['tipe'] = $tipe;

        return "Berhasil Login!";
    }

    return "Gagal Login";
}

    ?>
