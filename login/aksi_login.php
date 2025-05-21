<?php
// session_start();
// include "../database.php";
// function loginUser($username, $password) : string 
// {
//     $conn =getDatabaseConnection();
//     $reqst = $conn->prepare(query: "SELECT * FROM tb_user WHERE username = :username");
//     $reqst->execute(params:[':username' => $username]);
//     $user = $reqst->fetch(PDO::FETCH_ASSOC);
    
//     if($user && password_verify(password: $password, hash: $user['password'])) {
//     $_SESSION['username'] = $user['username'];
//     return "berhasil";
//     } else{
//     return "gagal";
//     }
// }

// ------
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];


//     $stmt = $koneksi->prepare("SELECT * FROM admin WHERE username=?");
//     $stmt->bind_param("s", $username);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();

//         if (password_verify($password, $row['password'])) {
//             $_SESSION['username'] = $username;
//             $_SESSION['status'] = "login";
//             header("Location: dashboard/index.php");
//         } else {
//             header("Location: index.php?pesan=gagal");
//         }
//     } else {
//         header("Location: index.php?pesan=gagal");
//     }

//     $stmt->close();
//     $db->close();
// } else {
//     header("Location: index.php");
// }


include "../database.php";
function loginUser($username,$password){
    $conn = getDatabaseConnection();
    $reqst = $conn->prepare(query: "SELECT * FROM user WHERE username = :username");
    $reqst->execute([':username' => $username]);
    $user = $reqst->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['password'] = $user['password'];
        return "Berhasil";
    } else {
        return "Gagal";
    }
// include '../database.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = $_POST['username'];
//     $password = md5($_POST['password']);

//     $queryAdmin = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
//     if (mysqli_num_rows($queryAdmin) > 0) {
//         $id_find = mysqli_query($conn, "SELECT id FROM tb_user WHERE username='$username'");
//         $id = mysqli_fetch_assoc($id_find);
//         $_SESSION['username'] = $username;
//         $_SESSION['id'] = $id;
//         $_SESSION['status'] = "login";
//         header("location:../dashboard/index.php");
//         exit;
//     }

//     $queryKasir = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
//     if (mysqli_num_rows($queryKasir) > 0) {
//         $_SESSION['username'] = $username;
//         $_SESSION['status'] = "login";
//         header("location:../dashboard_Kasir/index.php");
//         exit;
//     }

//     header("location:aksi_login.php?pesan=gagal");
//     exit;


    // $nik_find = mysqli_query($conn, "SELECT nik FROM masyarakat WHERE username='$username'");
    // $nik = mysqli_fetch_assoc($nik_find);

    // $cek = mysqli_num_rows($data);
    // if ($cek > 0) {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['nik'] = $nik;
    //     $_SESSION['status'] = "login";
    //     header("location:../main/masyarakat.php");
    // } else {
    //     header("location:login-fe.php?pesan=gagal");
    // }
}


?>