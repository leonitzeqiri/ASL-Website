<?php
//including the database connection file
include("../config.php");

//getting id_titullikontaktit of the data from url
$id_titullikontaktit = $_GET['id_titullikontaktit'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deletetitullikontakti('$id_titullikontaktit')");

//redirecting to the display page (index.php in our case)
header("Location:admin.php");
?>

