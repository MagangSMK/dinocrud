<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$idkasir = $_GET['idkasir'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kasir WHERE idkasir=$idkasir");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../login/homepage.php");
?>