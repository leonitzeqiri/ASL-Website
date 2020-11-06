	<?php require 'header.php'; ?>
	<body class="subpage">

		<!-- Header -->

		<!-- Main -->
			<div id="main">
				<section class="wrapper style1">
				<div class="inner">
				<?php
								mysqli_free_result($result);
						mysqli_next_result($conn);
					 $result = mysqli_query($conn, "CALL selecttitullikontakti();") ;
					   while ($row = mysqli_fetch_assoc($result)) {

					   extract($row);
					   if($result==null)
					   mysqli_free_result($result);
					   ?>



							<!-- Form -->
								<h3><?php echo $titullikon; ?></h3>
								<h4><?php echo $Pershkrimi; ?></h4>
								<?php } ?>

								<form method="post" action="insert.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="Emri" id="Emri" value="" placeholder="Emri" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="Mbiemri" id="Mbiemri" value="" placeholder="Mbiemri" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="email" id="email" value="" placeholder="Email" />
										</div>

							
										<!-- Break -->
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Shkruaj mesazhin tend" rows="6"></textarea>
										</div>
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Dergo Mesazhin" /></li>
												<li><input type="reset" value="Rikthe" class="alt" /></li>
											</ul>
										</div>
									</div>
								</form>

								<hr />

								
	<!-- Footer -->
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
