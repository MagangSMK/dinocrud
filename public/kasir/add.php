<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Users</title>
</head>
 
<body bgcolor="#99a9c8">
	<a href="../../login/homepage.php">Go to Home</a>
	<br><br>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>idkasir</td>
				<td><input type="text" name="idkasir"></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>tlp</td>
				<td><input type="text" name="tlp"></td>
			</tr>
			<tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>akses</td>
                <td><input type="text" name="akses"></td>
            </tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
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
		echo "data added successfully. <a href='../../login/homepage.php'>View Users</a>";
	}
	?>
</body>
</html>