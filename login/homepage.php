<?php
include_once("../config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="../aset/css/nucleo-icons.css" rel="stylesheet" />
<link href="../aset/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="../aset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show" >
<div class="bg-slate-300 py-25 px-1 min-h-screen">
  
<aside class="sidenav navbar bg-blue-600 navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-blue-800" id="sidenav-main">

<div class="sidenav-header bg-blue-800">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="homepage.php" >
    <span class="ms-1 font-weight-bold text-white">ECOMMERCE | HOME</span>
  </a>
</div>

<marquee class="bg-white" scrollamount="2"><h6 class="text-red-600" >Database Restoran</h6></marquee>
<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    

    
      

        

        

<li class="nav-item">
<a class="nav-link text-white " href="../public/kasir/kasir.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">person</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Kasir</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="../public/menu/menu.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">dashboard</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Menu</span>
</a>
</li>




<li class="nav-item">
<a class="nav-link text-white " href="../public/transaksi/transaksi.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">receipt_long</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Transaksi</span>
</a>
</li>

<div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="./logout.php" type="button">Log Out</a>
    </div>
    
  </div>
  
</aside>
<main class="main-content border-radius-lg ">
<?php 
session_start();

?>
    <h1>
      Selamat Datang <span style="color:#6e85ad;">Admin!</span>
    </h1>
    <h2>My Dashboard</h2>
    <h3>Apa yang ingin anda lakukan hari ini!</h3>
  
</body>
</html>