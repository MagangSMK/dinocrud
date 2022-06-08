<?php
include_once("config/config.php");
?>
<html></html>
<head>
	<title>Membuat Login</title>
	<link rel="stylesheet" href="public/css/style.css"	>
</head>
<body>
	<secttion class="h-screen">
	<div class="container px-6 py-12 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="md:w-6/8 lg:w-6/8 mb-10 md:mb-0">
        <table>
      <div class="mb-1">
        <tr class="align-middle">
        <img src="pic/pic.jpg" class=" max-w-full h-auto rounded-full" alt="Sample image">
        </tr>
      </div>
  </table>
<!--username input-->
<div class="bg-center">
	<form
     action="index.php" 
     method="post" 
     name="form5">
     <div class="mb-6">

 
<input 
type="text"  
class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
name="username" 
placeholder=" masukkan username"
/>
</div>
<!--password-->
<div class="mb-6">
<input type="password" 
class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
name="sandi" 
placeholder="masukkan password"
/>
</div>	
<div class="flex justify-between items-center mb-6">
            <div class="form-group form-check">	
            <input
                type="checkbox"
                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                id="exampleCheck3"
                checked
              />
              <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                >Remember me</label>	
                <td>|</td>	
                <a
              href="#!"
              class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out"
              >Forgot password?</a>
              <!--tombol submit-->
              <button
            type="submit"
            class="inline-block px-2 py-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            Sign in
          </button>

          <div
            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
          >
          </div>

	</form>

	  </div>
	</div>
	</div>
	</secttion>
	<?php 
 
// menghubungkan dengan koneksi
include 'config/config.php';
 
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
	header("location:login/homepage.php");
}
?>
</body>
</html>