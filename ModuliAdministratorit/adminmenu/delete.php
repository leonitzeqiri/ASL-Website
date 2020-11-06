<?php
//including the database connection file
include("../config.php");

//getting id_footeri of the data from url
$id_menu = $_GET['id_menu'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deletemenu('$id_menu')");

//redirecting to the display page (index.php in our case)
header("Location:admin.php");
?>

