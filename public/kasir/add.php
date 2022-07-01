<?php
include_once("../../config/config.php");
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Add data</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
 
<body>
 
	<form action="add.php" method="post" name="form1">
		
		<div class="bg-blue-300 py-10 px-10 min-h-screen ">
		
  <!--   tip; mx-auto -- jagab ilusti keskele  -->
  <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">

      <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="kodecucian" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Id Kasir :</label>
        <input type="text"  name="idkasir" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="flex items-center mb-10">
        <label for="jumlahpotong" class="inline-block w-20 mr-6 text-right
                                    font-bold text-gray-600">Nama :</label>
        <input type="text"  name="nama" placeholder="" 
        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"> <!-- check other class spec upper section -->
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="jeniscucian" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Telepon :</label>
        <input type="text"  name="tlp" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="berat_kg" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Alamat :</label>
        <input type="text"  name="alamat" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="harga" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Username :</label>
        <input type="text"  name="username" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

	  <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="harga" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Password :</label>
        <input type="text"  name="password" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

	  <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="harga" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Akses :</label>
        <input type="text"  name="akses" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="text-right">
      <a
            href="../../login/homepage.php"
            type="submit"
            class="inline-block px-3 py-3 bg-black text-white uppercase rounded shadow-md hover:bg-black hover:shadow-lg focus:bg-black focus:shadow-lg focus:outline-none focus:ring-0 active:bg-black active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Go to home
          </a>
        <input name="Submit" type="submit" class="py-3 px-2 bg-blue-400 hover:bg-blue-700 text-white font-bold" value="Tambah Data">
      
		<?php
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
	 $idkasir = $_POST['idkasir'];
	 $nama = $_POST['nama'];
	 $tlp = $_POST['tlp'];
	 $alamat = $_POST['alamat'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $akses = $_POST['akses'];
	 // include database connection file
	 include_once("../../config/config.php");
			 
	 // Insert user data into table
	 $result = mysqli_query($mysqli, "INSERT INTO kasir(idkasir,nama,tlp,alamat,username,password,akses) VALUES('$idkasir','$nama','$tlp','$alamat','$username','$password','$akses')");
	 
	 // Show message when user added
	 echo "data added successfully. <a href='../../login/homepage.php' class='text-blue-600'>View Users</a>";
 }
 ?>	</div>
	</form>
	</div>
</div>
	
</body>
</html>