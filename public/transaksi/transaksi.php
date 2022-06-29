<?php
include_once("../../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="../../aset/css/nucleo-icons.css" rel="stylesheet" />
<link href="../../aset/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link id="pagestyle" href="../../aset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show" >
<div class="bg-slate-300 py-25 px-1 min-h-screen">
  
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-blue-800" id="sidenav-main">

<div class="sidenav-header bg-blue-800">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="../../login/homepage.php">
    <span class="ms-1 font-weight-bold text-white">Home Page</span>
  </a>
</div>

<marquee class="bg-white" scrollamount="2"><h6 class="text-red-600" >Database Transaksi</h6></marquee>
<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    

    
      

        

        

<li class="nav-item">
<a class="nav-link text-white " href="../kasir/kasir.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">dashboard</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Kasir</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="../menu/menu.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">person</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Menu</span>
</a>
</li>



<li class="nav-item">
<a class="nav-link text-white " href="transaksi.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">receipt_long</i>
    </div>
  
  <span class="nav-link-text ms-1">Tabel Transaksi</span>
</a>
</li>
<div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../../login/logout.php" type="button">Log Out</a>
    </div>
    
  </div>
  
</aside>
<main class="main-content border-radius-lg ">

<a
            href="add.php"
            type="submit"
            class="inline-block px-4 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Tambah Transaksi 
          </a>
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari2">
    <input
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-slate-600 text-white uppercase rounded shadow-md hover:bg-slate-700 hover:shadow-lg focus:bg-slate-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-slate-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
if(isset($_GET['cari2'])){
      $cari2 = $_GET['cari2'];
      echo "<b>Hasil pencarian : ".$cari2."</b>";
}
 ?>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800">

    <tr>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Id Transaksi</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Id Menu</th>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Id Kasir</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Nama</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Jumlah</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Total</th> 
    </tr>
    </thead>
    <tbody>
    <?php  
    if(isset($_GET['cari2'])){
        $cari2 = $_GET['cari2'];
        $result3 = mysqli_query($mysqli,"select * from transaksi where idtransaksi Like '%".$cari2."%'");
    } else{
        $result3 = mysqli_query($mysqli, "SELECT * FROM transaksi ORDER BY idtransaksi ASC");
    }
    while($user_data3 = mysqli_fetch_array($result3)) {         
        echo "<tr class='bg-white border-b' >";
        echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$idtransaksi = $user_data3['idtransaksi']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$idmenu =$user_data3['idmenu']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$idkasir = $user_data3['idkasir']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$nama = $user_data3['nama']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$jumlah = $user_data3['jumlah']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$total = $user_data3['total']."</td>";
        
        
    } 
    ?>
    </tbody>
    </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>