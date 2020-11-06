<?php
//including the database connection file
include("../config.php");

//getting id_footeri of the data from url
$ID_footeri = $_GET['ID_footeri'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deletefooteri('$ID_footeri')");

//redirecting to the display page (index.php in our case)
header("Location:admin.php");
?>

