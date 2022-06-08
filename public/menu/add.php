<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="../../login/homepage.php">Go to Home</a>
	<br><br>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>idmenu</td>
				<td><input type="text" name="idmenu"></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>stock</td>
				<td><input type="text" name="stock"></td>
			</tr>
			<tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$idmenu = $_POST['idmenu'];
		$nama = $_POST['nama'];
		$stock = $_POST['stock'];
        $harga = $_POST['harga'];
		
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result1 = mysqli_query($mysqli, "INSERT INTO menu(idmenu,nama,stock,harga) VALUES('$idmenu','$nama','$stock','$harga')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../login/homepage.php'>View Users</a>";
	}
	?>
</body>
</html>