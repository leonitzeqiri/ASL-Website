<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submit'])) {	
	$Titulli =mysqli_real_escape_string($conn,$_POST['Titulli']);
	$Pershkrimi =mysqli_real_escape_string($conn,$_POST['Pershkrimi']);
	
	
	$image =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	
	
	
	
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi)) {
				
		if(empty($Titulli)) {
			echo "<font color='red'>Titulli field is empty.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		
		
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "CALL insertveturat('$Titulli','$Pershkrimi','$image')");
		
		//display success messPershkrimi
		echo "<font color='green'>E dhena ,U shtua me Sukses.";
		echo "<br/><a href='admin.php'>Shiko Rezultatin.</a>";
	}
}
?>

</body>
</html>
