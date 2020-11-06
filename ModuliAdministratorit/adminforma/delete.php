<?php
//including the database connection file
include("../config.php");

//getting id_footeri of the data from url
$id_kontakti = $_GET['id_kontakti'];

//deleting the row from table
echo $result = mysqli_query($conn,"CALL deleteforma('$id_kontakti')");

//redirecting to the display page (index.php in our case)
header("Location:admin.php");
?>

