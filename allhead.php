<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/custom-style.css" />

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/ 5shiv/3.7.0/ 5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body style="overflow-x: hidden;">
    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index">Cloud Classrooms</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="about">About</a>
                        </li>
                        <?php
                        session_start();
                        if (!isset($_SESSION['sidx'])) {
                        ?>
                            <li>
                                <a href="registrationform">Registration</a>
                            </li>
                        <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['sidx'])) {
                        ?>
                            <li>
                                <a href="takeassessment">Take Assessment</a>
                            </li>
                        <?php
                        }
                        ?>
                        <li>
                            <a href="viewresult">Result</a>
                        </li>
                        <?php
                        // session_start();
                        if (!isset($_SESSION['umail']) && !isset($_SESSION['fidx']) && !isset($_SESSION['sidx'])) {
                        ?>
                            <li>
                                <a href="postquerypublic">Post Query</a>
                            </li>
                            
                        <?php
                        }
                        ?>

<?php
                        if (isset($_SESSION['umail'])) {
                            echo '<li><a href="welcomeadmin">Admin Dashboard</a></li>';
                        }
                        if (isset($_SESSION['fidx'])) {
                            echo '<li><a href="welcomefaculty">Faculty Dashboard</a></li>';
                        }
                        if (isset($_SESSION['sidx'])) {
                            echo '<li><a href="welcomestudent">Student Dashboard</a></li>';
                        }
                        ?>

<?php
$current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'postquerypublic.php' || $current_page == 'registrationform.php' || $current_page == 'studentlogin.php' || $current_page == 'facultylogin.php' || $current_page == 'adminlogin.php') {
    // Do not include the login dropdown on specified pages
} elseif (!isset($_SESSION['fidx']) && !isset($_SESSION['sidx']) && !isset($_SESSION['umail'])) { // Exclude login dropdown if faculty is logged in
?>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="studentlogin">Student Login</a>
            </li>
            <li>
                <a href="facultylogin">Faculty Login</a>
            </li>
            <li>
                <a href="adminlogin">Admin Login</a>
            </li>
        </ul>
    </li>
<?php
}
?>

<?php
if (isset($_SESSION['sidx'])){
    echo '<li><a href="logoutstudent" style="font-size: x-large;"><span class="glyphicon glyphicon-off title="title="logout"></span> </a></li>';
}
?>
<?php
if (isset($_SESSION['fidx'])) {
    echo '<li><a href="logoutfaculty" style="font-size: x-large;"><span class="glyphicon glyphicon-off title="title="logout"></span> </a></li>';
}
?>
<?php
if (isset($_SESSION['umail'])) {
    echo '<li><a href="logoutadmin" style="font-size: x-large;"><span class="glyphicon glyphicon-off title="title="logout"></span> </a></li>';
}
?>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </header>