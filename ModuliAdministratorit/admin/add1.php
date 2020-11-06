<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submita'])) {	
	$Emri =mysqli_real_escape_string($conn,$_POST['Emri']);
	$Fjalekalimi =mysqli_real_escape_string($conn, MD5($_POST['Fjalekalimi']));
		
	// checking empty fields
	if(empty($Emri) || empty($Fjalekalimi))  {
				
		if(empty($Emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($Fjalekalimi)) {
			echo "<font color='red'>Fjalekalimi field is empty.</font><br/>";
		}
		
		
		
		//link to the previous ppassword
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
function customError($errno, $errstr) {
    echo "<b> Error </b> [$errno] $errstr<br>";	
    
    die();
    }
     set_error_handler("customError", E_USER_WARNING);

    if(strlen($Fjalekalimi) < 6){
    trigger_error ("Fjalekalimi duhet ti kete me shume se 6 karaktere");
       { 
			$_SESSION['passwordgabim'] = "<b style='color:red'>Passwordi duhet ti kete me shume se 6 karaktere!</b>";
			//header ("Location:adminlist.php"); die();

		}

}				
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "CALL insertadmin('$Emri','$Fjalekalimi')");
		
		//display success messpassword
		echo "<font color='green'>E dhena u shtua me sukses";
		echo "<br/><a href='adminlist.php'>Shiko Rezultatin</a>";
	}
}
?>
</body>
</html>
