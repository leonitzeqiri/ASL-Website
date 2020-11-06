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
			
				<h1><a href="#"><?php echo "$titulli"; ?></a></h1>
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
			
		


          
			
        
        </div>
      </nav>
    </header>
	<section>
	
	<?php echo	'<section id="banner" style="background-image: url(data:image/jpg;base64,'.base64_encode($img_Data).')">' ?>
	
	</section>
	</div>
      
		<form action="add1.php" method="post" name="form1">
		<table style="width:50%;margin-left:30%;">

		
			<tr> 
				<td>Emri</td>
				<td><input type="text" name="Emri"></td>
			</tr>
			<tr> 
				<td>Fjalekalimi</td>
				<td><input type="password" name="Fjalekalimi" ></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submita" value="Add"></td>
			</tr>
				<?php
			    if(isset($_SESSION['passwordgabim']))
			    {
			    	 echo "<h3 style='font-weight:bold; text-align:center;'>".$_SESSION['passwordgabim']."</h3>";
			    	 unset($_SESSION['passwordgabim']);

			    }
			?>
		</table>
	
	</form>

	</br>
		<form action="" method="post" style="width:50%;margin-left:30%;"> 
Search username or password: <input type="text" name="term"  /> 
<input type="submit" value="Search" />  
</form> 
<br>
<table width='100%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Emri</td>
		<td>Fjalekalimi</td>
		<td>Update</td>
	</tr> 

<?php
if (!empty($_REQUEST['term'])) {

$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
mysqli_free_result($result);
						mysqli_next_result($conn);
 $conn = mysqli_connect("localhost","root","","autosallonileo")
 or die('Gabim ne lidhje!');
 
$sql = mysqli_query($conn,"CALL selectadminlist('$term')"); 
 
/*
while ($row = mysqli_fetch_array($sql)){  
//echo 'Primary key: ' .$row['PRIMARYKEY'];  
echo '<br /> Code: ' .$row['uid'];  
echo '<br /> username: '.$row['username'];  
echo '<br /> password: '.$row['password'];    
}  */

while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Emri']."</td>";
		echo "<td>".$row['Fjalekalimi']."</td>";	
		echo "<td><a href=\"edit.php?id=$row[id_admin]\">Edit</a> | <a href=\"delete.php?id=$row[id_admin]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}

}

?>
	</table>
	</section>
				
          
        </div>
      </div>
    </footer>
  </div>
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>