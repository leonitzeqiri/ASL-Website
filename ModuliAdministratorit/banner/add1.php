<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submit'])) {	
    $p1=mysqli_real_escape_string($conn,$_POST['p1']);
	$p2=mysqli_real_escape_string($conn,$_POST['p2']);
	$img_Data =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$maxsize = 10000000; //set to approx 10 MB
	$headertitle=mysqli_real_escape_string($conn,$_POST['headertitle']);
	$titulli=mysqli_real_escape_string($conn,$_POST['titulli']);



	
	
	
	
	// checking empty fields
	if(empty($p1) || empty($p2) || empty($headertitle) || empty($titulli)) {
				
		if(empty($p1)) {
			echo "<font color='red'>p1 field is empty.</font><br/>";
		}
		
		if(empty($p2)) {
			echo "<font color='red'>p2 field is empty.</font><br/>";
		}
		if(empty($headertitle)) {
			echo "<font color='red'>headertitle field is empty.</font><br/>";
		}
		if(empty($titulli)) {
			echo "<font color='red'>titulli field is empty.</font><br/>";
		}
		{	
			//header("Location: admin.php");
		}
		
		
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn,"CALL insertbanner('$p1','$p2','$img_Data','$headertitle','$titulli')");
		
		//display success messPershkrimi
		echo "<font color='green'>E dhena,u shtua me sukses";
		echo "<br/><a href='admin.php'>Shiko Rezultatin</a>";
	}
}
?>

</body>
</html>
