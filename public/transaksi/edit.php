<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	

    $idtransaksi = $_POST['idtransaksi'];

	$idtransaksi=$_POST['idtransaksi'];
    $idmenu=$_POST['idmenu'];
    $idkasir=$_POST['idkasir'];
	$nama=$_POST['nama'];
	$jumlah=$_POST['jumlah'];
    $total=$_POST['total'];
		
	// update user data
	$result2 = mysqli_query($mysqli, "UPDATE transaksi SET idtransaksi='$idtransaksi',
    idmenu='$idmenu',
    idkasir='$idkasir',
    nama='$nama',
    jumlah='$jumlah',
    total='$total' WHERE idtransaksi=$idtransaksi");
	
	// Redirect to homepage to display updated user in list
	header("Location: ../../login/homepage.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idtransaksi = $_GET['idtransaksi'];
 
// Fetech user data based on id
$result2 = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE idtransaksi=$idtransaksi");
 
while($user_data2 = mysqli_fetch_array($result2))
{
	$idtransaksi = $user_data2['idtransaksi'];
    $idmenu = $user_data2['idmenu'];
    $idkasir = $user_data2['idkasir'];
	$nama = $user_data2['nama'];
	$jumlah = $user_data2['jumlah'];
    $total = $user_data2['total'];
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
				<td>idtransaksi</td>
				<td><input type="text" name="idtransaksi" value=<?php echo $idtransaksi;?>></td>
			</tr>
			<tr> 
				<td>idmenu</td>
				<td><input type="text" name="idmenu" value=<?php echo $idmenu;?>></td>
			</tr>
			<tr> 
				<td>idkasir</td>
				<td><input type="text" name="idkasir" value=<?php echo $idkasir;?>></td>
			</tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
			<tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
			<tr>
                <td>total</td>
                <td><input type="text" name="total" value=<?php echo $total;?>></td>
            </tr>
			<tr>
				<td><input type="hidden" name="idtransaksi" value=<?php echo $_GET['idtransaksi'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>