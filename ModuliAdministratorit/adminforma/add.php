<?php
//including the database connection file
include("../config.php");

?>
<html>
	<head>
	<?php
					 $result = mysqli_query($conn, "call selectheader();") ;
					   while ($row = mysqli_fetch_assoc($result)) {

					   extract($row);
					   if($result==null)
					   mysqli_free_result($result);
					   ?>
		<title><?php echo "$headertitle"; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
			
				<h1><a href="../index.php"><?php echo "$titulli"; ?></a></h1>
				<a href="#menu">Menu</a>
			</header>
<?php } ?>

			<nav id="menu">
				<?php
								mysqli_free_result($result);
						mysqli_next_result($conn);
					 $result = mysqli_query($conn, "call selectmenuadmin();") ;
					   while ($row = mysqli_fetch_assoc($result)) {

					   extract($row);
					   if($result==null)
					   mysqli_free_result($result);
					   ?>
				<ul class="links">
					
					<li><a href="../<?= $menu_link ?>"><?= $menu ?></a></li>
				</ul>
					   <?php } ?>
					   </nav>
	
					   </nav>


			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
		
					   
		

			<?php echo	'<section id="banner" style="background-image: url(data:image/jpg;base64,'.base64_encode($img_Data).')">' ?>
					<div class="inner">
						<header>
							<h1><?php echo "$p1"; ?></h1>
							<p><?php echo "$p2"; ?></p>
						</header>

					</div>

				</section>
				
				    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
		  
	<a href="admin.php">Kthehu</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
						
			<tr> 
				<td>Emri</td>
				<td><input type="text" name="Emri"></td>
			</tr>
			<tr> 
				<td>Mbiemri</td>
				<td><input type="text" name="Mbiemri"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			<tr> 
				<td>Pershkrimi</td>
				<td><input type="text" name="Pershkrimi"></td>
			</tr>
			
			
			<tr> 
				<td></td>
				<td><input type="Submit" name="Submit" value="Shto"></td>
			</tr>
			
		</table>
	</form>
	
	<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
if(isset($_POST['Submit'])) {	
	$Emri = mysqli_real_escape_string($conn,$_POST['Emri']);
	$Mbiemri = mysqli_real_escape_string($conn,$_POST['Mbiemri']);
	$Email = mysqli_real_escape_string($conn,$_POST['Email']);
	$Pershkrimi = mysqli_real_escape_string($conn,$_POST['Pershkrimi']);
	
	
	
	
	
	// checking empty fields
	if(empty($Emri) || empty($Mbiemri) || empty($Email) || empty($Pershkrimi)){
				
		if(empty($Emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($Mbiemri)) {
			echo "<font color='red'>Mbiemri field is empty.</font><br/>";
		}
		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		
		
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		 $conn = mysqli_connect("localhost","root","","autosallonileo")
 or die('Gabim ne lidhje!');
 
		$result = mysqli_query($conn, "CALL addforma('$Emri','$Mbiemri','$Email','$Pershkrimi')");
		
		//display success messPershkrimi
		echo "<font color='green'>E dhena u shtua me sukses.";
		echo "<br/><a href='admin.php'>Shiko Rezultatin.</a>";
	}
}
?>

</body>
</html>
			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	


</body>
</html>