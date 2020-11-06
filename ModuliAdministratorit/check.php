<?php 
//Kontrollo sesionin
include ('config.php');
session_start();
$users_check = $_SESSION['Emri'];
$ses_sql=mysqli_query($conn, "SELECT Emri FROM admin WHERE  Emri = '$users_check'");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user = $row['Emri'];
if (!isset($users_check)) {
	header ("Location: adminlist.php");
}
?>

