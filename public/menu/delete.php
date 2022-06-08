<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$idmenu = $_GET['idmenu'];
 
// Delete user row from table based on given id
$result1 = mysqli_query($mysqli, "DELETE FROM menu WHERE idmenu=$idmenu");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../login/homepage.php");
?>