<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submit'])) {	
	$menu = mysqli_real_escape_string($conn,$_POST['menu']);
	$menu_link = mysqli_real_escape_string($conn,$_POST['menu_link']);
	$Moduli = mysqli_real_escape_string($conn,$_POST['Moduli']);
	
	
	
	
	
	// checking empty fields
	if(empty($menu) || empty($menu_link) || empty($Moduli)) {
				
	if(empty($menu)) {
			echo "<font color='red'>menu field is empty.</font><br/>";
		}
		
		if(empty($menu_link)) {
			echo "<font color='red'>menu_link field is empty.</font><br/>";
		}
			if(empty($Moduli)) {
			echo "<font color='red'>Moduli field is empty.</font><br/>";
		}
		
		
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "CALL insertmenu('$menu','$menu_link','$Moduli')");
		
		//display success messPershkrimi
		echo "<font color='green'>E dhena u shtua me Sukses.";
		echo "<br/><a href='admin.php'>Shiko Rezultatin</a>";
	}
}
?>

</body>
</html>
