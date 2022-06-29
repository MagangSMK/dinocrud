<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<title>Add Users</title>
</head>
 
<body bgcolor="#99a9c8">
	<a href="../../login/homepage.php">Go to Home</a>
	<br><br>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>idtransaksi</td>
				<td><input type="text" name="idtransaksi"></td>
			</tr>
			<tr> 
				<td>idmenu</td>
				<td><input type="text" name="idmenu"></td>
			</tr>
			<tr> 
				<td>idkasir</td>
				<td><input type="text" name="idkasir"></td>
			</tr>
			<tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td>total</td>
                <td><input type="text" name="total"></td>
            </tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
        $idtransaksi = $_POST['idtransaksi'];
		$idmenu = $_POST['idmenu'];
        $idkasir = $_POST['idkasir'];
		$nama = $_POST['nama'];
		$jumlah = $_POST['jumlah'];
        $total = $_POST['total'];
		
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result2 = mysqli_query($mysqli, "INSERT INTO transaksi(idtransaksi,idmenu,idkasir,nama,jumlah,total) VALUES('$idtransaksi','$idmenu','$idkasir','$nama','$jumlah','$total')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../login/homepage.php'>View Users</a>";
	}
	?>
</body>
</html>