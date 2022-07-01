<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	

    $idmenu = $_POST['idmenu'];

	$idmenu=$_POST['idmenu'];
	$nama=$_POST['nama'];
	$stock=$_POST['stock'];
    $harga=$_POST['harga'];
		
	// update user data
	$result1 = mysqli_query($mysqli, "UPDATE menu SET idmenu='$idmenu',
    nama='$nama',
    stock='$stock',
    harga='$harga' WHERE idmenu=$idmenu");
	
	// Redirect to homepage to display updated user in list
	header("Location: ../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idmenu = $_GET['idmenu'];
 
// Fetech user data based on id
$result1 = mysqli_query($mysqli, "SELECT * FROM menu WHERE idmenu=$idmenu");
 
while($user_data1 = mysqli_fetch_array($result1))
{
	$idmenu = $user_data1['idmenu'];
	$nama = $user_data1['nama'];
	$stock = $user_data1['stock'];
    $harga = $user_data1['harga'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
 
<body>
	<form name="update" method="post" action="edit.php">
		
		<div class="bg-blue-300 py-10 px-10 min-h-screen ">
		
  <!--   tip; mx-auto -- jagab ilusti keskele  -->
  <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">

      <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="kodecucian" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Id Menu :</label>
        <input type="text"  disabled name="idmenu" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"  value=<?php echo $idmenu;?>>
      </div>

      <div class="flex items-center mb-10">
        <label for="jumlahpotong" class="inline-block w-20 mr-6 text-right
                                    font-bold text-gray-600">Nama :</label>
        <input type="text"  name="nama" placeholder="" 
        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $nama;?>> <!-- check other class spec upper section -->
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="jeniscucian" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Stock :</label>
        <input type="text"  name="stock" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $stock;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="berat_kg" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Harga :</label>
        <input type="text"  name="harga" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"value=<?php echo $harga;?>>
      </div>

      <div class="text-right">
	  <input type="hidden" name="idmenu" value=<?php echo $_GET['idmenu'];?>>
      <a
            href="../../login/homepage.php"
            type="submit"
            class="inline-block px-3 py-3 bg-black text-white uppercase rounded shadow-md hover:bg-black hover:shadow-lg focus:bg-black focus:shadow-lg focus:outline-none focus:ring-0 active:bg-black active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Go to homepage
          </a>
		  <input name="update" type="submit" class="py-3 px-2 bg-blue-400 hover:bg-blue-700 text-white font-bold" value="update">
	  </div>
  </div>
		</div>
	</form>
</body>
</html>