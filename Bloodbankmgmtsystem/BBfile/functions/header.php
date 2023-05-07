<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel = "icon" href="images/logo.png" 
        type = "image/x-icon">
    <title>BBMS</title>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="icon" class="logo-icon"/>
                    BBMS
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="d
                
                </li>
            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['login_user'])) {
                        $name = $_SESSION['login_user'];
                        $encode = base64_encode($name); 
                        echo "<li><a href=\"profile.php?id=$encode\"> Welcome, $name </a></li>";
                        echo "<li><a href=\"classes/logout.php\">Logout</a></li>";
                    }
                    else {
                        $str = "<li>
                                    <a href=\"signup.php\">
                                        <span class=\"glyphicon glyphicon-user\"></span> Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a href=\"login.php\">
                                        <span class=\"glyphicon glyphicon-log-in\"></span> Login
                                    </a>
                                <li>
                                  <a href=\"admin\index.php\">
                                        <span class=\"glyphicon glyphicon-user\"></span> Admin View
                                    </a>
                                    </li>
                                   
                                </li>";
                        
                        echo $str;
                    }
                ?>
            </ul>
        </div>
    </nav>
    <!-- Navigation Bar Section Ends -->