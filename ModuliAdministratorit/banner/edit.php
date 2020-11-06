<?php
// including the database connection file
include_once("../config.php");

if(isset($_POST['update']))
{	
	$ID_headeri = $_POST['ID_headeri'];
	$p1=mysqli_real_escape_string($conn,$_POST['p1']);
	$p2=mysqli_real_escape_string($conn,$_POST['p2']);
	$img_Data =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$headertitle=mysqli_real_escape_string($conn,$_POST['headertitle']);
	$titulli=mysqli_real_escape_string($conn,$_POST['titulli']);

	
	// checking empty fields
 if(empty($p1) || empty($p2) || empty($headertitle) || empty($titulli))  {	
			
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
		
	} else {	
		$result = mysqli_query($conn,"CALL updatebanner('$p1','$p2','$img_Data','$headertitle','$titulli','$ID_headeri')");
		if($result)
		{	
			header("Location: admin.php");
		}
	
	}
}
?>
<?php
//getting ID_headeri from url
$ID_headeri = $_GET['ID_headeri'];

//selecting data associated with this particular id_headeri
$result = mysqli_query($conn,"CALL selectidheader('$ID_headeri')");

while($res = mysqli_fetch_array($result))
{
	$p1 = $res['p1'];
	$p2 = $res['p2'];
	$headertitle = $res['headertitle'];
	$titulli = $res['titulli'];

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
	<a href="admin.php">Home</a>
	<br/><br/>
	
	<form enctype="multipart/form-data"  name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>p1</td>
				<td><input type="text" name="p1" value='<?php echo $p1; ?>' ></td>
			</tr>
			<tr> 
				<td>p2</td>
				<td><input type="text" name="p2" value='<?php echo $p2; ?>'></td>
			</tr>
		     <tr>
			<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
			<td><input name="userfile" type="file" /></td>
			</tr>
			<tr> 
				<td>headertitle</td>
				<td><input type="text" name="headertitle" value='<?php echo $headertitle; ?>'></td>
			</tr>
			<tr> 
				<td>titulli</td>
				<td><input type="text" name="titulli" value='<?php echo $titulli; ?>'></td>
			</tr>
			

			
			
			<tr>
				<td><input type="hidden" name="ID_headeri" value='<?php echo $_GET['ID_headeri'];?>' /></td>
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
