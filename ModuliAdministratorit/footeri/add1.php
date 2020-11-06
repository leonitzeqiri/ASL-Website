<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submit'])) {	
	$Emri = mysqli_real_escape_string($conn,$_POST['Emri']);
	$Pershkrimi = mysqli_real_escape_string($conn,$_POST['Pershkrimi']);
	
	
	
	
	
	// checking empty fields
	if(empty($Emri) || empty($Pershkrimi)) {
				
		if(empty($Emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		
		
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "CALL insertfooteri('$Emri','$Pershkrimi')");
		
		//display success messPershkrimi
		echo "<font color='green'>E dhena ,U shtua me Sukes.";
		echo "<br/><a href='admin.php'>Shiko Rezultatin</a>";
	}
}
?>

</body>
</html>
