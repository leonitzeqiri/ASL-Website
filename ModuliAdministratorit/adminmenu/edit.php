<?php
// including the database connection file
include_once("../config.php");

if(isset($_POST['update']))
{	
	$id_menu = $_POST['id_menu'];
	$menu=mysqli_real_escape_string($conn,$_POST['menu']);
	$menu_link=mysqli_real_escape_string($conn,$_POST['menu_link']);
	$Moduli=mysqli_real_escape_string($conn,$_POST['Moduli']);
	
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
		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"CALL updatemenu('$menu','$menu_link','$Moduli','$id_menu')");
		
		//redirectig to the display pPershkrimi. In our case, it is admin.php
		header("Location: admin.php");
	}
}
?>
<?php
//getting  from url
$id_menu = $_GET['id_menu'];

//selecting data associated with this particular 
$result = mysqli_query($conn,"CALL selectidmenu('$id_menu')");

while($res = mysqli_fetch_array($result))
{
	$menu1 = $res['menu'];
	$menu_link1 = $res['menu_link'];
	$Moduli1 = $res['Moduli'];
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
				<td>menu</td>
				<td><input type="text" name="menu" value='<?php echo $menu1;?>' /></td>
			</tr>
			<tr> 
				<td>menu_link</td>
				<td><input type="text" name="menu_link" value='<?php echo $menu_link1;?>' /></td>
			</tr>
			<tr> 
				<td>Moduli</td>
				<td><input type="text" name="Moduli" value='<?php echo $Moduli1;?>' /></td>
			</tr>
			

			
			
			<tr>
				<td><input type="hidden" name="id_menu" value='<?php echo $_GET['id_menu'];?>' /></td>
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
