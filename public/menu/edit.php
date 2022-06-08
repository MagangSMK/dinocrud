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
</head>
 
<body>
	<a href="../../login/homepage.php">Home</a>
	<br/><br/>
	
	<form name="update_menu" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>idmenu</td>
				<td><input type="text" name="idmenu" value=<?php echo $idmenu;?>></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>stock</td>
				<td><input type="text" name="stock" value=<?php echo $stock;?>></td>
			</tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
			<tr>
				<td><input type="hidden" name="idmenu" value=<?php echo $_GET['idmenu'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>