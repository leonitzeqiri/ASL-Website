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
<?php
include_once("../config.php");
?>
	<a href="admin.php">Kthehu</a>
	<br/><br/>

	<form enctype="multipart/form-data"  action="add1.php" method="post" name="form1">
		<table width="25%" border="0">
						
			<tr> 
				<td>Emri</td>
				<td><input type="text" name="Emri"></td>
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
			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	


</body>
</html>

