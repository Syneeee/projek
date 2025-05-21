<?php
include '../database.php';
function getAllOutlet():array{
    $conn =getDatabaseConnection();
    $result =$conn->query('SELECT*FROM tb_outlet');
    return $result->fetchAll(PDO:: FETCH_ASSOC);
}
?>