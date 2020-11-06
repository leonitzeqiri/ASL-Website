<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
</head>

<body>
<? 
include_once("../config.php");
if(isset($_POST['Submit'])) {
	
	$Emri = $_POST['Emri'];
	$Fjalekalimi =MD5($_POST['Fjalekalimi']);
	
	 $maxsize = 10000000; //set to approx 10 MB
	// checking empty fields
	if(empty($Emri) || empty($Fjalekalimi)  {
				
		if(empty($Emri)) {
			echo "<script type='text/javascript'>alert('Emri eshte i zbrazet! Ju lutemi plotesoni!!');</script>";
		}
		
		if(empty($Fjalekalimi)&&empty($Fjalekalimi)) {
			echo "<script type='text/javascript'>alert('Fjalekalimi eshte e zbrazet! Ju lutemi plotesoni!!');</script>";
		}
		
		//link to the previous pMbiemri
	} else {
       
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT into admin(Emri,Fjalekalimi) VALUES('$Emri','$Fjalekalimi')");
		echo "<font color='green'>E dhena,U shtua me Sukses.";
		//display success messMbiemri
		header("Location:home.php");
	}
}
?>

</body>
</html>
