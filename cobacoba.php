<?php
// include database connection file
include_once("config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kodecucian = $_POST['kodecucian'];
		$jumlahpotong = $_POST['jumlahpotong'];
		$jeniscucian = $_POST['jeniscucian'];
		$berat = $_POST['berat_kg'];
		$harga = $_POST['harga'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE cucian SET kodecucian='$kodecucian',jumlahpotong='$jumlahpotong',jeniscucian='$jeniscucian',berat_kg='$berat',harga='$harga' WHERE kodecucian=$kodecucian");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kodecucian = $_GET['kodecucian'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cucian WHERE kodecucian=$kodecucian");
 
while($user_data = mysqli_fetch_array($result))
{
      $kodecucian = $user_data['kodecucian'];
		$jumlahpotong =$user_data['jumlahpotong'];
		$jeniscucian = $user_data['jeniscucian'];
		$berat = $user_data['berat_kg'];
		$harga = $user_data['harga'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	<link rel="stylesheet" href="public/css/style.css">
</head>
 
<body>
	<form name="update" method="post" action="edit.php">
		
		<div class="bg-green-200 py-10 px-10 min-h-screen ">
		
  <!--   tip; mx-auto -- jagab ilusti keskele  -->
  <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">

      <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="kodecucian" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Kode Cucian</label>
        <input type="text"  disabled name="kodecucian" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"  value=<?php echo $kodecucian;?>>
      </div>

      <div class="flex items-center mb-10">
        <label for="jumlahpotong" class="inline-block w-20 mr-6 text-right
                                    font-bold text-gray-600">Jumlah Potong</label>
        <input type="text"  name="jumlahpotong" placeholder="...." 
        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $jumlahpotong;?>> <!-- check other class spec upper section -->
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="jeniscucian" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Jenis Cucian</label>
        <input type="text"  name="jeniscucian" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $jeniscucian;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="berat_kg" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Berat Kg</label>
        <input type="text"  name="berat_kg" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"value=<?php echo $berat;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="harga" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Harga</label>
        <input type="text"  name="harga" placeholder="...." 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $harga;?>>
      </div>

      <div class="text-right">
	  <input type="hidden" name="kodecucian" value=<?php echo $_GET['kodecucian'];?>>
      <a
            href="../../login/homepage.php"
            type="submit"
            class="inline-block px-3 py-3 bg-green-600 text-white uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Go to homepage
          </a>
		  <input name="update" type="submit" class="py-3 px-2 bg-green-400 hover:bg-green-700 text-white font-bold" value="update">
	  </div>
  </div>
		</div>
	</form>
</body>
</html>