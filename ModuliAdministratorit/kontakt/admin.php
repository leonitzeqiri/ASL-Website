<?php
//including the database connection file
include("../config.php");

?>
<!DOCTYPE HTML>
<!--
	Broadcast by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
	<section>

<a href="add.php">Shto te dhena</a><br/><br/>

	<form action="" method="post" style="text-align:center;">  
Kerko te dhenat: <input type="text" name="term" /> 
<input type="submit" value="Kerko" />  
</form> 
<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>titulli</td>
		<td>Pershkrimi</td>
		
		<td>Modifiko</td>
	</tr> 

<?php
	if (!empty($_REQUEST['term'])) {

						mysqli_next_result($conn);

	$term = mysqli_real_escape_string($conn,$_REQUEST['term']);
	

	$sql = mysqli_query($conn,"CALL selectidadminkon('$term')");

					
					while($row = mysqli_fetch_array($sql))		
					{ 
            echo "<tr>";				
			echo "<td>".$row['titullikon']."</td>";
			echo "<td>".$row['Pershkrimi']."</td>";

			
			echo "<td><a href=\"edit.php?id_titullikontaktit=$row[id_titullikontaktit]\">Edit</a> | <a href=\"delete.php?id_titullikontaktit=$row[id_titullikontaktit]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";			
		}

	}

	?>
		
	



	</table>

	
	<br><br><br>
	
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



</body>
</html>
