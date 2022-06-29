<?php
include_once("config/config.php");
?>
<html>
<head>
    <title>Login Form</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
     <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-gray-300" style="font-family:Roboto">
    <div class="w-full h-screen flex items-center justify-center">
        <form   action="index.php" method="post" name="form5" class="w-full md:w-1/3 bg-white rounded-lg">
            <div class="flex font-bold justify-center mt-6">
                <img class="h-20 w-20"
                    src="pic/resto.jpg">
            </div>
            <h2 class="text-3xl text-center text-gray-700 mb-4">WELCOME</h2>
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                        <input name="username" type='text' placeholder="Username"
                            class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                        <input name="password" type='password' placeholder="Password"
                            class="-mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                    </div>
                </div>
                <p class="text-sm">Don't have an account?,Let's <a href="registrasi/registrasi.php" class="text-sm text-blue-500 hover:text-blue-700 float-none mb-4">Sign Up</a></p>
                <button type="submit"
                    class="w-full py-2 rounded-full bg-blue-600  hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg text-gray-100  focus:outline-none">Sign In</button>    
        </form>
    </div>
    <?php 
include 'config/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result4 = mysqli_query($mysqli, "select * from log_in where username='$username' and password='$password'");
$cek = mysqli_num_rows($result4);

if($cek <=0){
    echo "";
}else{
    header("location:login/homepage.php");
}

?>
</body>

</html>