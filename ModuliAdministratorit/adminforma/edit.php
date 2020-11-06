<?php
// including the database connection file
include_once("../config.php");

if(isset($_POST['update']))
{	
$id_kontakti = $_POST['id_kontakti'];
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
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"CALL updateforma('$Emri','$Mbiemri','$Email','$Pershkrimi','$id_kontakti')");
		
		//redirectig to the display pPershkrimi. In our case, it is admin.php
		header("Location: admin.php");
	}
}
?>
<?php
//getting  from url
$id_kontakti = $_GET['id_kontakti'];

//selecting data associated with this particular 
$result = mysqli_query($conn,"CALL selectidforma('$id_kontakti')");

while($res = mysqli_fetch_array($result))
{
	$Emri = $res['Emri'];
	$Mbiemri = $res['Mbiemri'];
	$Email = $res['Email'];
	$Pershkrimi = $res['Pershkrimi'];
}
?>
<html>
	<head>
	<?php
	 $conn = mysqli_connect("localhost","root","","autosallonileo")
 or die('Gabim ne lidhje!');
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
			
				<h1><a href="index.php"><?php echo "$titulli"; ?></a></h1>
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


<body>
	<a href="admin.php">Kthehu</a>
	<br/><br/>
	
	<form enctype="multipart/form-data"  name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Emri</td>
				<td><input type="text"  value="<?php echo $Emri?>"name="Emri"></td>
			</tr>
			<tr> 
				<td>Mbiemri</td>
				<td><input type="text" value="<?php echo $Mbiemri?>" name="Mbiemri"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" value="<?php echo $Email?>" name="Email"></td>
			</tr>
			<tr> 
				<td>Pershkrimi</td>
				<td><input type="text" value="<?php echo $Pershkrimi?>" name="Pershkrimi"></td>
			</tr>
			

			
			
			<tr>
				<td><input type="hidden" name="id_kontakti" value='<?php echo $_GET['id_kontakti'];?>' /></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>
