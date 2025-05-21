<?php
include "../../database.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE from tb_user where id='$id'");

header ("location:user.php");

?>