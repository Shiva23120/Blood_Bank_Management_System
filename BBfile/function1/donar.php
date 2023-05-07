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
    <title>Blood Bank</title>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="images/logo.png" alt="icon" class="logo-icon"/>
                    Blood Bank
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="login.php">Become a Donar</a></li>
                    <li><a href="request.php">Request Blood</a></li>
                    <li><a href="search.php">Search Database</a></li>
                    <li><a href="check_requests.php">Check Requests</a></li>
                    <li><a href="profile.php?id=<?php echo base64_encode($_SESSION['login_user']); ?>">Update Profile</a></li>
                    <li><a href="/">Our Mission</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
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
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#donateModal\" >
                                        <span class=\"glyphicon glyphicon-user\"></span> Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#LoginModal\">
                                        <span class=\"glyphicon glyphicon-log-in\"></span> Login
                                    </a>
                                </li>";
                        
                        echo $str;
                    }
                ?>
            </ul>
        </div>
    </nav>
    <!-- Navigation Bar Section Ends -->