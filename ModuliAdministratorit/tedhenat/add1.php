<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submit'])) {	
	$Pershkrimi1 = mysqli_real_escape_string($conn,$_POST['Pershkrimi1']);
	$Pershkrimi2 = mysqli_real_escape_string($conn,$_POST['Pershkrimi2']);

	
	
	
	
	// checking empty fields
	if(empty($Pershkrimi1) || empty($Pershkrimi2)) {
				
		if(empty($Pershkrimi1)) {
			echo "<font color='red'>Pershkrimi1 field is empty.</font><br/>";
		}
		
		if(empty($Pershkrimi2)) {
			echo "<font color='red'>Pershkrimi2 field is empty.</font><br/>";
		}
		
		
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "CALL inserttedhenat('$Pershkrimi1','$Pershkrimi2')");
		
		//display success messPershkrimi
		echo "<font color='green'>E dhena,u shtua me sukses";
		echo "<br/><a href='admin.php'>Shiko Rezultatin</a>";
	}
}
?>

</body>
</html>
