<?php

include("check.php");

/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("config.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Emri"]) || empty($_POST["Fjalekalimi"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$Emri=mysqli_real_escape_string($conn,$_POST['Emri']);
			$Fjalekalimi=mysqli_real_escape_string($conn,$_POST['Fjalekalimi']);
			//Check username and password from database
			
			$result=mysqli_query($conn,"CALL selectadmin('$Emri','$Fjalekalimi')");
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($result) ==1){

				$_SESSION['Emri'] = $Emri; // Initializing Session
				$_SESSION['IncorrectPassword'] = null;
				header("Location: adminballina.php");
				// Redirecting To Other Page
			}
			else 
			{
			
				$_SESSION['IncorrectPassword'] = true;
				
				header("Location:index.php");
				
				
			}

		
		}
	}
?>
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
