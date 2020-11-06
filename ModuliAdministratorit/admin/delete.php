<?php
//including the database connection file
include("../config.php");

//getting uid of the data from url
$id_admin = $_GET['id'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deleteadmin('$id_admin')");

//redirecting to the display page (index.php in our case)
header("Location:adminlist.php");
?>

