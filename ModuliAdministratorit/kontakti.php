<?php
include_once ('config.php');
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
			
				<h1><a href="#"><?php echo "$titulli"; ?></a></h1>
				<a href="#menu">Menu</a>
			</header>
<?php } ?>
		<!-- Nav -->
	
			<<nav id="menu">
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
					
					<li><a href="<?= $menu_link ?>"><?= $menu ?></a></li>
				</ul>
					   <?php } ?>
			</nav>
				<?php
								mysqli_free_result($result);
						mysqli_next_result($conn);
					 $result = mysqli_query($conn, "call selectmenuadmin();") ;
					   while ($row = mysqli_fetch_assoc($result)) {

					   extract($row);
					   if($result==null)
					   mysqli_free_result($result);
					   ?>
					  
			

				
					
					
				</ul>
					   <?php } ?>

			</nav>

			</nav>

			
		


          
			
        
        </div>
      </nav>
    </header>
	<section>
	
	<?php echo	'<section id="banner" style="background-image: url(data:image/jpg;base64,'.base64_encode($img_Data).')">' ?>
	
	</section>
	</div>
<html>
	<head>
		<title>AutosalloniLeo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
	</head>
	<body>
	


			<!-- Three -->
				<section class="wrapper ">
					<div class="inner">
						<header class="align-center">
							<h2>Menaxho te dhenat e Kontaktit</h2>
							
						</header>

						<!-- 3 Column Video Section -->
							<div class="flex flex-3">

								<div class="video col">
									<div class="image fit">
										<img src="images/addlogo.jpg" alt="" />
										<div class="arrow">
											
										</div>
									</div>
									<p class="caption">
									Shto te dhena tek Kontakti
									</p>
									<a href="adminforma/admin.php" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/editlogo.jpg" alt="" />
										<div class="arrow">
											
										</div>
									</div>
									<p class="caption">
										Modifiko te dhenat te Kontakti
									</p>
									<a href="adminforma/admin.php" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/deletelogo.jpg" alt="" />
										<div class="arrow">
										</div>
									</div>
									<p class="caption">
										Fshij te dhenat tek Kontakti
									</p>
									<a href="adminforma/admin.php" class="link"><span>Click Me</span></a>
								</div>
							</div>
					</div>
					
				<section class="wrapper ">
					<div class="inner">
						<header class="align-center">
							<h2>Menaxho Titujt dhe Pershkrimet e Kontaktit</h2>
							
						</header>

						<!-- 3 Column Video Section -->
							<div class="flex flex-3">

								<div class="video col">
									<div class="image fit">
										<img src="images/addlogo.jpg" alt="" />
										<div class="arrow">
											
										</div>
									</div>
									<p class="caption">
									Shto Titujt ose Pershkrim tek Kontakti
									</p>
									<a href="kontakt/admin.php" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/editlogo.jpg" alt="" />
										<div class="arrow">
											
										</div>
									</div>
									<p class="caption">
										Modifiko Titujt dhe Pershkrimet tek Kontakti
									</p>
									<a href="kontakt/admin.php" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/deletelogo.jpg" alt="" />
										<div class="arrow">
										</div>
									</div>
									<p class="caption">
										Fshij te dhenat te Kontakti
									</p>
									<a href="kontakt/admin.php" class="link"><span>Click Me</span></a>
								</div>
							</div>
					</div>
					</section>

					
					

			</div>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>