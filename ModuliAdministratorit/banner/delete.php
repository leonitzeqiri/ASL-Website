<?php
//including the database connection file
include("../config.php");

//getting ID_headeri of the data from url
$ID_headeri = $_GET['ID_headeri'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deletebanner($ID_headeri)");

//redirecting to the display page (index.php in our case)
header("Location:admin.php");
?>

