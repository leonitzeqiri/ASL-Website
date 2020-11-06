<?php
//including the database connection file
include("../config.php");

//getting ID_tedhenat of the data from url
$ID_tedhenat = $_GET['ID_tedhenat'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deletetedhenat('$ID_tedhenat')");

//redirecting to the display page (index.php in our case)
header("Location:admin.php");
?>

