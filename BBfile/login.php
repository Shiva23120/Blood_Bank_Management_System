<?php


require 'functions/functions.php';
require_once 'connection.php';

if (isset($_SESSION['user'])) {
    header("location:home.php");
}
session_destroy();
session_start();
ob_start(); 
?>

  <html>
   <head>
           <link rel = "icon" href =  
"images/logo.png" 
        type = "image/x-icon"> 
  
  <style>
  body{
  margin:5%;
  color:#6a6f8c;
  background-image: url("seamless.jpg");
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.button {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.login-wrap{
  width:100%;
  margin:auto;
  max-width:400px;
  min-height:600px;
  position:relative;
  background:url(abc.png) no-repeat center;
  box-shadow:10px 10px 15px 0 rgba(1,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:12%;
  position:absolute;
  padding:100px 40px 500px 63px;
  background:rgba(21, 39, 38, 0.83);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  transform:rotateY(180deg);
  backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
}
.login-html .tab{
  font-size:25px;
  margin-right:34px;
  padding-bottom:11px;
  margin:1 24px 15px 0;
  display:inline-block;
  border-bottom:9px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#d5e2dc;
  border-color:#969eab;
}
.login-form{
  min-height:355px;
  position:relative;
  perspective:1000px;
  transform-style:preserve-3d;
}
.login-form .group{
  margin-bottom:8px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
  width:100%;
  color:#121311;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:2px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-form .group .label{
  color:#3eeac1;
  font-size:17px;
}
.login-form .group .button{
  background:#1bad76;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:5px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  transform:rotate(0);
}

.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:rgba(255,255,255,.2);
}
.foot-lnk{
  text-align:center;

}  
.logo{
				color:#663399;
				font-size:25px;
				font-family:verdana;
				text-align:left;
				margin-top:10px;
				float:center;
				margin:10px;
				line-height:50px;
				padding-left:15px;
			}
   .header{
				width:105.5%;
				height:60px;
				background-color:#E6E6FA;
				margin-top:-74.5px;


			}
			.gogte
			     {

                font-family:verdana;
				text-align:left;
				margin-top:10px;
				float:center;
				margin:10px;
				line-height:50px;
				padding-left:15px;

			     }
 </style> 
  </head>
<body>


			</form>
<p style="text-align: center;font-size: 60px;font-family:cursive;color:black;text-decoration:underline;border-radius:0.5px">BBMS</p>
<p style="text-align: center;font-size: 20px;font-style:bold;color: black;text-decoration:underline"></p>


<div style="color:#0E5138;font-style: bold;text-align:center;"><font size="4.5"></div>
   

<div class="login-wrap">
  <div class="login-html">

  <form action="" method="post">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

            <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <form action="home.php">
          <label for="user" class="label">Username</label>
          <input id="user" type="text" class="input" name="user">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" data-type="password" name="pass">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" name="sub" value="Log In">
        </div>
          <div class="group">
            <a href="forgot.php">Forgot Password</a>


        

      <?php
      
      $user= $pass="";
      if(isset($_POST['sub']))
      {

        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $q=$db-> prepare("SELECT * from login where user='$user' && pass='$pass'");
        $q->execute();
        $res=$q->fetchAll(PDO::FETCH_OBJ);
        if($res)
        {
         $_SESSION['user']=$user;
        header("Location:home.php");
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
      	<div class="footer-left">
				<h3></span></h3>
				
             <div class="hr"></div>
        <div class="foot-lnk">
          <a href="forgot.html"></a>
        </div>
      </div>
