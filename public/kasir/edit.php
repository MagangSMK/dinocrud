<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	

    $idkasir = $_POST['idkasir'];

	$idkasir=$_POST['idkasir'];
	$nama=$_POST['nama'];
	$tlp=$_POST['tlp'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $akses=$_POST['akses'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE kasir SET idkasir='$idkasir',
    nama='$nama',
    tlp='$tlp',
    alamat='$alamat',
    username='$username',
    password='$password',
    akses='$akses' WHERE idkasir=$idkasir");
	
	// Redirect to homepage to display updated user in list
	header("Location: ../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idkasir = $_GET['idkasir'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kasir WHERE idkasir=$idkasir");
 
while($user_data = mysqli_fetch_array($result))
{
	$idkasir = $user_data['idkasir'];
	$nama = $user_data['nama'];
	$tlp = $user_data['tlp'];
    $alamat = $user_data['alamat'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $akses = $user_data['akses'];
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
                                 font-bold text-gray-600">Id Kasir :</label>
        <input type="text"  disabled name="idkasir" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"  value=<?php echo $idkasir;?>>
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
                                 font-bold text-gray-600">Telepon :</label>
        <input type="text"  name="tlp" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $tlp;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="berat_kg" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Alamat :</label>
        <input type="text"  name="alamat" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none"value=<?php echo $alamat;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="harga" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Username :</label>
        <input type="text"  name="username" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $username;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="harga" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Password :</label>
        <input type="text"  name="password" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $password;?>>
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="harga" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Akses :</label>
        <input type="text"  name="akses" placeholder="" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" value=<?php echo $akses;?>>
      </div>

      <div class="text-right">
	  <input type="hidden" name="idkasir" value=<?php echo $_GET['idkasir'];?>>
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