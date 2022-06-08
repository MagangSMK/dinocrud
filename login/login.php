<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config/config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result4 = mysqli_query($mysqli,"select * from log_in where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($result4);
 
if($cek <= 0){
	echo "Akun Tidak Terdaftar";
}else{
	header("location:homepage.php");
}
?>