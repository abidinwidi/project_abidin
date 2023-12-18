<?php
session_start();
//untuk memvalidasi inputan pada web dengan field yang ada pada tabel database
include "konek.php";

$user = $_POST['emaildiweb'];
$pass = $_POST['passworddiweb'];
// echo $user." ". $pass;
//tahap memanggil semua data tabel nama tabel di database yang mana disamakan dengan $user dan $pass

if (empty($user)) { //kondisi untuk username kosong
    $_SESSION['info'] = 'Username dan Password Tidak Boleh Kosong';
    header("Location: ../login.php");
    exit(); //exit untuk mengakhiri sessionnya
} else {
    if (empty($pass)) { //kondisi untuk password kosong
        $_SESSION['info'] = 'Username dan Password Tidak Boleh Kosong';
        header("Location: ../login.php");
        exit();
    } else {
        $sql = "SELECT * FROM tb_akun WHERE EMAIL LIKE '$user' AND PASSWORD LIKE '$pass'";
        $cek = mysqli_query($kon, $sql);
        $row = mysqli_fetch_assoc($cek);

        if($row['EMAIL'] === $user && $row['PASSWORD'] === $pass){
            $_SESSION['login'] = true;
            
        }else{
            $_SESSION['info'] = 'email atau Password salah';
            header("location: ../login.php");
        }

        if (isset($_SESSION['login'])) {
            header("location: ../index.php");
        }else {
            header("location: ../login.php");
            exit();
        }   
    }
}
