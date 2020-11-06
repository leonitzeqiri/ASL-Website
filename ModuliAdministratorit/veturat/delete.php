<?php
//including the database connection file
include("../config.php");

//getting id_veturat of the data from url
$ID_Veturat = $_GET['ID_Veturat'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deleteveturat('$ID_Veturat')");

//redirecting to the display page (index.php in our case)
header("Location:admin.php");
?>

