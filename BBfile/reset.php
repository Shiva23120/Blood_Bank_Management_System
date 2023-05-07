      <?php
      
require 'functions/functions.php';
require_once 'connection.php';
      $user= $pass="";
      if(isset($_POST['sub']))
      {
       $useremail=$_POST['useremail'];
        $q=$db-> prepare("SELECT * from login where useremail='$useremail'");
        $q->execute();
        $res=$q->fetchAll(PDO::FETCH_OBJ);
        if($res)
        {
         $_SESSION['useremail']=$useremail;
         header("location:successfull.html");
        }
        else
        {
          echo"<script>alert('Wrong email or password')</script>";
        }
          
          function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;

          }

      }
      ?>
