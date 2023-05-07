<?php
  ob_start();
  session_start();
  ob_end_clean();
	$db=new PDO('mysql:host=localhost;dbname=bloodbank','root','');
	if($db)
	{
			echo "";
	}
	else
	{
			echo "";
	}
	?>
