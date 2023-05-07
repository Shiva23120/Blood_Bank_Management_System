

<?php
	include '../config.php';
	

	if(isset($_POST['signup']))
	{
		$book=$_POST['bid'];
		
	$query = "UPDATE `requestblood` SET `message`='$book' WHERE `id`='".$_GET['uid']."'";
	$result = $con->query($query);	
	
	
	if($result === TRUE){
		echo 'Request has Successfully been Approved';
	?>
		<meta content="4; bloodupdate.php" http-equiv="refresh" />
	<?php
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>

<section class="bg-primary">
  <article class="py-5 text-center text-dark">
    <div>
      <h3 class="display-4">Message to Blood Request User</h3>
    <p>Thank you for being a part of Bloodbank.DONATE BLOOD,SAVE LIVES!</p>

<div class="register">
              <form name="registration" method="POST" action="" enctype="multipart/form-data">
                <p>Massages </p>
                <input type="Massage" class="text" value=""  name="bid" required >
               
                <div class="sign-up">
                  <input type="submit" name="signup"  value="Send" >
                  <div class="clear"> </div>
                </div>
              </form>

            </div>
        </form>
    </div> 
   
  
        </div>
      
  </article>
</section>
<br><br><br>
<section>
</body>
</html>
