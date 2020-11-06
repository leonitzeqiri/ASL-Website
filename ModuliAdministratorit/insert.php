<?php
include_once ('config.php');




if(isset($_POST['submit'])) {	
	$Emri = $_POST['Emri'];
	$Mbiemri = $_POST['Mbiemri'];
	$Emaili = $_POST['email'];
    $Mesazhi = $_POST['message'];
   
mysqli_query($conn,"call insertforma('$Emri','$Mbiemri','$Emaili','$Mesazhi')");
header("Location: contact.php");
}