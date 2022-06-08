<?php
include_once("../config/config.php");

// Create database connection using config file


// Fetch all users data from database



?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
 
<body>
<a href="../public/kasir/add.php" type="submit"
            class="inline-block px-4 py-3 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Tambah Data
          </a>

<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input  
            name="cari"
            href="../public/karyawan/add.php"
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil Pencarian : ".$cari."</b>";
    }
?>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800">

    <tr>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id Kasir</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nama</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Telepon</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Alamat</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Username</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Password</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Akses</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th> 
    </tr>
    </thead>
<tbody>
<tr class="bg-white border-b">  
    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($mysqli,"select * from kasir where idkasir like '%".$cari."%'");
        }
        else{
            $result= mysqli_query($mysqli, "SELECT * FROM kasir order BY idkasir asc");
        }
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-900'>".$idkasir = $user_data['idkasir']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$nama =$user_data['nama']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$tlp = $user_data['tlp']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$alamat = $user_data['alamat']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'd>".$username = $user_data['username']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$password = $user_data['password']."</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$akses = $user_data['akses']."</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'><a  href='../public/kasir/edit.php?idkasir=$user_data[idkasir]'>Edit</a> | <a href='../public/kasir/delete.php?idkasir=$user_data[idkasir]'>Delete</a></td></tr>";        
    }
    ?>
    </tr>
    </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>

    <br>
    <br>

<a href="../public/menu/add.php" type="submit"
            class="inline-block px-4 py-3 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Tambah Data
          </a>
 
<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input
            name="cari"
            href="../public/karyawan/add.php"
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil Pencarian : ".$cari."</b>";
    }
?>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800">
 
    <tr>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id Menu</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nama</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Stock</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Harga</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Update</th>
    </tr>
    </thead>
    <tbody>

    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result1 = mysqli_query($mysqli,"select * from menu where idmenu like '%".$cari."%'");
            }
        else{
            $result1= mysqli_query($mysqli, "SELECT * FROM menu order BY idmenu asc");
        } 
    while($user_data1 = mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$idmenu = $user_data1['idmenu']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$nama =$user_data1['nama']."</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$stock = $user_data1['stock']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$harga = $user_data1['harga']."</td>";    
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'><a  href=' ../public/menu/edit.php?idmenu=$user_data1[idmenu]'>Edit</a> | <a href='../public/menu/delete.php?idmenu=$user_data1[idmenu]'>Delete</a></td></tr>";
    }
    ?>
    </tbody>
    </table>
      </div>
    </div>
  </div>
</div>

    <br>
    <br>
 
<body>
<a href="../public/transaksi/add.php" 
            class="inline-block px-4 py-3 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Tambah Data</a>

<form method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input
            name="cari"
            href="../public/karyawan/add.php"
            type="submit"
            value="Cari"
            class="inline-block px-3 py-2 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
</form>
<?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil Pencarian : ".$cari."</b>";
    }
?>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
    <table class="min-w-full text-center">
    <thead class="border-b bg-gray-800">
 
    <tr>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id Transaksi</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id Menu</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Id Kasir</th>
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nama</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Jumlah</th> 
     <th scope="col" class="text-sm font-medium text-white px-6 py-4">Total</th> 
    </tr>
    </thead>
    <tbody>

    <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result2 = mysqli_query($mysqli,"select * from transaksi where idtransaksi like '%".$cari."%'");
            }
        else{
            $result2= mysqli_query($mysqli, "SELECT * FROM transaksi order BY idtransaksi asc");
        }
    while($user_data2 = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$idtransaksi = $user_data2['idtransaksi']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$idmenu =$user_data2['idmenu']."</td>";
        echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$idkasir = $user_data2['idkasir']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$nama = $user_data2['nama']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$jumlah = $user_data2['jumlah']."</td>";
		echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$total = $user_data2['total']."</td>";   
        
    }
    ?>
    </tbody>
    </table>
      </div>
    </div>
  </div>
  </div>

    <br>
    <a href="logout.php" type="submit"
            class="inline-block px-4 py-3 bg-blue-600 text-white uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Logout
          </a></a>
</body>
</html>