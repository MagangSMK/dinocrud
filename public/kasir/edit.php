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
</head>
 
<body>
	<a href="../../login/homepage.php">Home</a>
	<br/><br/>
	
	<form name="update_databuku" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>idkasir</td>
				<td><input type="text" name="idkasir" value=<?php echo $idkasir;?>></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>tlp</td>
				<td><input type="text" name="tlp" value=<?php echo $tlp;?>></td>
			</tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr>
                <td>akses</td>
                <td><input type="text" name="akses" value=<?php echo $akses;?>></td>
            </tr>
			<tr>
				<td><input type="hidden" name="idkasir" value=<?php echo $_GET['idkasir'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>