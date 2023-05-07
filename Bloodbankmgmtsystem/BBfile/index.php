<?php
    session_start();
    include "functions/header.php";
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-theme.css">
     <link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
         
  <style>
    


     {
    margin:0;
    padding:0;
}
body {
    background:url('seamless.jpg');
}
.navbar {
    border-radius: 0;
}
.logo-icon {
    width: 60px;
}
.navbar-brand>img {
    float: left;
    margin: -15px 0 0 0;
}
.navbar>.container-fluid .navbar-brand {
    margin-left: 40px;
}
.navbar-inverse {
    background-color: #ae0202;
    border-color: #ae0202;
}
.navbar-inverse .navbar-brand {
    color: #ffffff;
}
.navbar-inverse .navbar-nav>li>a {
    color: #ffffff;
}
.navbar-nav>li>.dropdown-menu {
    background: #ae0202;
}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
    background-color: #740202;
}
.dropdown-menu>li>a {
    color: #fff;
}
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    color: #ffffff;
    background-color: #740202;
}
.dropdown-menu>li>a {
    color: #fff;
    padding: 12px 20px;
}
.navbar {
    margin-bottom: 0;
}
.cover {
    height: 300px;
    background: url(../images/cover.jpg);
    background-attachment: fixed;
}
.banner img {
    width: 100%;
    height: 400px;
}
.footer {
    background: #191919;
    height: 20px;
}
.copyright {
    background: #000;
    color: #fff;
    padding: 15px 0;
}
.input-group:hover {
    text-decoration: none;
}
.error{
    color:red;
}
.spacer {
    height: 20px;
}
@media (min-width: 768px)
{
    .modal-dialog {
        width: 500px;
        margin: 30px auto;
    }
}
.navbar>.container-fluid .navbar-brand {
    margin-left: 0;
}
.heading-reg {
    font-family: 'Varela Round';
    padding: 10px;
    text-align: center;
    color: #ae0202;
}
button.banner-try {
    background: #ae0202;
    color: #fff;
    padding: 20px;
    margin: 40px 0;
    width: 100%;
}
.error-image {
    margin-top: 40px;
    width: 100%;
}
.col-md-6 img {
    width: 180px;
}
.icon-col {
    text-align: center;
    margin-top: -30px;
}
.request {
    background: #191919;
    padding: 10px;
    color:#fff;
    margin: 10px;
    transition: 0.2s;
    cursor: pointer;
    box-shadow: 4px 4px 8px -2px #ae0202;
}
.request:hover {
    transform: scale(1.02);
}
.blood {
    font-size: 7em;
}
.col-md-5.contact {
    padding: 20px;
    font-size: 18px;
}
.myTable td{
    padding: 5px;
}

td.table_row {
    color: #adadad;
}
.sbutton {
    width: 100%;
    margin-top: 25px;
}
.main-section {

}
.col-md-8.main-section h2 {
    font-size: 40px;
    font-family: 'Varela Round';
    color: #d3181f;
}
.main-section p {
    letter-spacing: 1px;
    line-height: 23px;
    text-align: justify;
}
.note{
    font-size: 16px;
}
.sidebar {
    padding: 30px;
}
.sidebar img {
    width:100%;
}
 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
      }
        .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
</style>

<marquee scrollamount=5 onmouseover="this.stop(); onmouseover="this.start() >
<b><i>Hi,Welcome to our Website.The platform where you save lives of others through your Generosity.DONATE BLOOD AND SAVE LIVES</b></i>
</marquee>
    <section>
 <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      
        <img src="images/clip4.jpg" alt="Chania" width="460" height="345">
        <p></p>
      </div>
   
      <div class="item">
        <img src="images/clip3.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/clip2.jpeg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        
        <img src="images/clip1.jpg" alt="blood" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span +class="sr-only">Next</span>
    </a>
  </div>
  </section>
    <!-- Banner Section Ends -->

    <!-- Description Section -->
    <div class="container">
        <div class="col-md-8 main-section">
            <h2>Our Mission</h2>
            <p>
                To fulfill the needs of the Asian people for the safest, most reliable and most cost-effective
                blood services through voluntary donations.The Blood Bank empowers ordinary people to perform 
                extraordinary acts of service. Our blood donors are ordinary people – high school students, factory
                 and office workers, business executives, parents and grandparents, and people from every walk of life. 
                 But they share one thing – a generous spirit, a desire to give back to their community and help others. 
                 Blood donors play an integral role in the delivery of modern healthcare. Many life-saving medical 
                 treatments and procedures involve blood transfusions and would not be possible without a safe and reliable 
                 blood supply.
            </p>
            <p class="note">
                <strong>Every two seconds someone receives a unit of blood. The need is constant. It is our mission 
                to meet that need.</strong>
            </p>
            <div class="spacer"></div>
        </div>
        <div class="col-md-4">
           <div class="sidebar">
               <img src="images/poster.jpg" alt="Blood Donation"/>
           </div>
        </div>
    </div>
    <!-- Description Section Ends -->


    <!-- Modal -->
  <div class="modal fade" id="SignUpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="classes/register.php" onSubmit="return Validate()">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" name="username" type="email" class="form-control" placeholder="Email">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="cpassword" onKeyUp="Validate();" name="cpassword" type="password" class="form-control" placeholder="Confirm Password">
            </div>
            <br>
            <div class="input-group">
                <span class="error" id="perror"></span>
            </div>
            <br>
            <div class="input-group">
                <input type="submit" value="Sign Up" name="submit" class="btn btn-success">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

      <!-- Modal -->
    <div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button>
          <a href=login.php class="close" data-dismiss="modal">&times; login
          </button>
          
        </div>
        <div class="modal-body">
        <form method="POST" action="classes/login.php">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" name="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <br>
            <div class="input-group">
                <input type="submit" value="Login" name="login" class="btn btn-success" name="msg" placeholder="Additional Info">
                Not a Member? <a href="#" data-toggle="modal" data-target="#LoginModal">Sign Up</a>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

