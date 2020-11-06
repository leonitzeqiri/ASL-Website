<?php
include_once ('config.php');




if(isset($_POST['submit'])) {	
	$Emri = mysqli_real_escape_string($conn,$_POST['Emri']);
	$Mbiemri = mysqli_real_escape_string($conn,$_POST['Mbiemri']);
	$Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Mesazhi = mysqli_real_escape_string($conn,$_POST['message']);
   
   if(!filter_var($Email,FILTER_VALIDATE_EMAIL)==false){
echo("$Email is a Valida email adress");
mysqli_query($conn,"call insertforma('$Emri','$Mbiemri','$Email','$Mesazhi')");
header("Location: contact.php");
}
else
{
	echo("$Email nuk eshte valid ,pritni 10 sekonda te ktheheni ne faqen kryesore;");
header('Refresh: 5; URL=contact.php');

}
}