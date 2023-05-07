<?php


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Blood Aviavble</title>
</head>
<body>


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Total Blood </h2>
			<ul class="properties_list">
			<?php
						include '../config.php';
						$sel = "SELECT SUM(unit) FROM bloodgroup";
						$rs = $con->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<center>
						<h2><span style="font-size:25px; color: #FF0000">Total Blood on bank:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['SUM(unit)'];?></span></h2>
						<a href="bloodupdate.php">Go Back</a>
					</center>
						
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

</body>
</html>