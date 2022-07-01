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
  
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  bg-blue-800" id="sidenav-main">

<div class="sidenav-header bg-blue-800">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="../../login/homepage.php" >
    <span class="ms-1 font-weight-bold text-white">ECOMMERCE | HOME</span>
  </a>
</div>

<marquee class="bg-white" scrollamount="2"><h6 class="text-red-600" >Database Kasir</h6></marquee>
<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    

    
      

        

        

<li class="nav-item">
<a class="nav-link text-white " href="kasir.php">
  
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
<a class="nav-link text-white " href="../transaksi/transaksi.php">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">person</i>
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
            class="inline-block px-4 py-3 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Tambah Kasir
          </a>
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<div name="kolom1">
<?php
if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      echo "<b>Hasil pencarian : ".$cari."</b>";
}
 ?>
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-blue-800">

    <tr>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Id Kasir</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Nama</th>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Telepon</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Alamat</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Username</th> 
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Password</th>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Akses</th>
     <th scope="col" class="text-sm font-medium text-white px-1 py-2">Update</th> 
    </tr>
    </thead>
<tbody>
    
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $result = mysqli_query($mysqli,"select * from kasir where idkasir Like '%".$cari."%'");
    }  else{
        $result = mysqli_query($mysqli, "SELECT * FROM kasir ORDER BY idkasir asc");
    }
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr class='bg-white border-b' >";
        echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900' >".$idkasir = $user_data['idkasir']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$nama =$user_data['nama']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$tlp = $user_data['tlp']."</td>";
		    echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$alamat = $user_data['alamat']."</td>";
	    	echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium text-gray-900'>".$username = $user_data['username']."</td>"; 
            echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium
            text-gray-900'>".$password = $user_data['password']."</td>"; 
            echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium
            text-gray-900'>".$akses = $user_data['akses']."</td>";
            echo "<td class='px-1 py-1 whitespace-nowrap text-sm font-medium  
            text-gray-900'><a  href='edit.php?idkasir=$user_data[idkasir]'>Edit</a> | <a href='delete.php?idkasir=$user_data[idkasir]'>Delete</a></td></tr>";        
    }
    ?>
</tbody>
    </table>
      </div>
    </div>
  </div>
 </div>
</div>
</body>
</html>