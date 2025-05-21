<?php

include "../../database.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['usernmae'];

mysqli_query($conn, "INSERT INTO tb_user VALUES('','$id','$$nama','$username')");

header("location:user.php");

?>