<?php
include 'config.php';
session_start();
if (isset($_POST['request'])) {
  # code...


$fullname=$_POST['fullname'];
$Address=$_POST['Address'];
$bloodgroup=$_POST['bloodgroup'];
$phno=$_POST['phno'];
$unit=$_POST['unit'];
$time=$_POST['bloodtime'];


$query = "INSERT INTO `requestblood`(`id`, `user`, `Address`, `bloodgroup`, `phno`, `unit`, `time-for-flood`) VALUES ('','$fullname','$Address','$bloodgroup','$phno','$unit','$time')";
  $result = $con->query($query); 
  
  
  if($result === TRUE){
    echo 'Request has Successfully been Approved';
  ?>
    <meta content="4; blooddetails.php" http-equiv="refresh" />
  <?php
  }
}
?>
  
        <html>
     <head>
            <link rel="stylesheet" type="text/css" href="css/main.css">

  <title>Request Blood</title>
   </head>
           <body>
   

  <h2>Send Blood Request</h2>

                      <?php 
                              $id=$_SESSION['user'];
                            $ret=mysqli_query($con,"select * from login where user='$id'");
              
                while($row=mysqli_fetch_array($ret))

                {?> 
                    <hr>
                    <form action="" method="post">                   
                    <label>Enter Your Full Name<span>*</span></label><br>
                    <input type="text" name="fullname" id="fullname" value="<?php echo $row['user']; ?>">
                    <div class="required"></div>
                    <br>
                    
                    <!--Last Name-->
                    <label>Your Address<span>*</span></label><br>
                    <input type="text" name="Address" id="Address">
                    <div class="required"></div>
                    <br>
                    <!--Nickname-->
                    <label>Bloodgroup You Want</label><br>
                    <input type="text" name="bloodgroup" id="bloodgroup">
                    <div class="required"></div>
                    <br>
                    <label>Your Contact Number<span>*</span></label><br>
                    <input type="Number" name="phno" id="phno">
                      <label>Unit<span>*</span></label><br>
                    <input type="Number" name="unit" id="unit">
                    <div class="required"></div>

                    <br>
                    <label>Time Of blood need<span>*</span></label><br>
                    <input type="text" name="bloodtime" id="bloodtime">
                    <div class="required"></div>
<br>
                                   <input type="submit" value="Request" name="request">
                </form>
                <?php 
                  }
                  ?>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>

                    
      

     


    </body>
    </html>