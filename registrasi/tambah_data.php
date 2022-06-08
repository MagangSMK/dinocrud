<?php

session_start();
// Panggil koneksi
include '../config/config.php';

// mengambil data/memasukan data
$username = $_POST['username'];
$password = $_POST['password'];


// Insert Data
mysqli_query($mysqli, "INSERT into log_in VALUES('$username','$password')");

$data = mysqli_query($mysqli,"SELECT * from log_in where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	header("location:../index.php?pesan=berhasil_register");
}else{
	header("location:registrasi.php?pesan=gagal");
}

?>