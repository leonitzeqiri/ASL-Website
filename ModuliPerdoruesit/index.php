
			<?php require 'header.php'; ?>
		<!-- Main -->
			<div id="main">

			<!-- One -->
			<?php
						mysqli_free_result($result);
						mysqli_next_result($conn);
					 $result = mysqli_query($conn, "call selecttedhenatnemes();") ;
					  while ($row = mysqli_fetch_assoc($result)) {

					   extract($row);
					   if($result==null)
					   mysqli_free_result($result);
					   ?>
				<section class="wrapper style1">
					
					<div class="inner">
					
						<header class="align-center">
						
							<h2><?php echo "$Pershkrimi1"; ?></h2>
							<p><?php echo "$Pershkrimi2"; ?></p>
						</header>
						<?php } ?>
						
					
							<div class="flex flex-2">
								<?php
								mysqli_free_result($result);
						mysqli_next_result($conn);
					 $result = mysqli_query($conn, "call selectveturat") ;
					   while ($row = mysqli_fetch_assoc($result)) {

					   extract($row);
					   if($result==null)
					   mysqli_free_result($result);
					   ?>
								<div class="video col">
									<div class="image fit">
										<img width="800" height="400" src='<?php echo  "data:image/jpeg;base64,".base64_encode($image)."";?>' />
										<div class="arrow">
										
											
										</div>
									</div>
									<h2 class="caption"> <?php echo $Titulli; ?> </h2>
									
									<p class="caption"> <?php echo $Pershkrimi; ?> </p>
									
									
								
									
								</div>
								<?php } ?>
							</div>
					</div>
				</section>



			


		<!-- Footer -->
		<?php $visits = 1;
			if (isset($_COOKIE["visits"])){
				$visits = (int)$_COOKIE["visits"]; }
				$Month = 2592000 + time();
				setcookie("visits", date("F jS - g:i a"), $Month);
				if(isset($_COOKIE['visits']))
				{
					$last = $_COOKIE['visits'];
					echo "<p style='text-align:right;'>Vizita juaj e fundit ishte me: " .$last."</p>";
				}
				else
				{ echo "<p style='text-align:right;'>Vizita juaj e parë në webaplikacionin tonë! Ju dëshirojmë mirëseardhje!</p>";
				}
			?>
		
			<footer id="footer">
			
			
				<div class="inner">
					<div class="flex flex-3">

					<?php
					mysqli_free_result($result);
						mysqli_next_result($conn);
					 $result = mysqli_query($conn, "call selectfooteri();") ;
					   while ($row = mysqli_fetch_assoc($result)) {

					   extract($row);
					   if($result==null)
					   mysqli_free_result($result);
					   ?>
						<div class="col">
							<h3><?php echo "$Emri"; ?></h3>
							<ul class="alt">
								<li><a href="#"><?php echo "$Pershkrimi"; ?></a></li>
							</ul>
						</div>
						<?php } ?>
					</div>
				</div>
				
				
				<br> </br>
				<div class="copyright">
					
					&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Coverr</a>. Video: <a href="https://coverr.co">Coverr</a>.
					<br> <br>
					https://www.wardsauto.com/technology/bmw-m8-gran-coupe-unveiled 1 ||<br>  https://www.audiusa.com/models/audi-e-tron  ||<br>  https://www.mercedes-benz.com/en/innovation/the-new-amg-4-0-litre-v8-biturbo-engine/    <br>||
					   https://www.vw.com/models/arteon/section/gallery/   <br> ||          https://www.bmwusa.com/vehicles/bmwi/i8/overview.html
				</div>
				
			</footer>

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>