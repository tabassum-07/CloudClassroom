<?php
session_start();

if ( $_SESSION[ "umail" ] == "" || $_SESSION[ "umail" ] == NULL ) {
	header( 'Location:AdminLogin.php' );
}
$userid = $_SESSION[ "umail" ];
?>
<!DOCTYPE  HTML>
<?php include('adminhead.php'); ?>

<div class="container">
<div class="row" style="padding-top: 100px;">
		

			<!--Welcome page for admin-->

			<div class="col-md-2"></div>
		<div class="col-md-8">

		<h3 class="text-center" style="padding-bottom: 20px;">
    <a href="welcomeadmin">Admin</a>
</h3>
<h3 class="text-center" style="padding-bottom: 20px;">
    <a href="studentdetails"><button type="submit" class="btn btn-primary">Student Details</button></a>

    <a href="facultydetails"><button type="submit" class="btn btn-primary">Faculty Details</button></a>

    <a href="guestdetails"><button type="submit" class="btn btn-primary">Guest Details</button></a>

    <a href="coursedetails"><button type="submit" class="btn btn-primary">Course Details</button></a>

    <a href="logoutadmin"><button type="submit" class="btn btn-danger">Logout</button></a>
</h3>
<h3 class="text-center" style="padding-bottom: 80px;"></h3>
		</div>
		<div class="col-md-2"></div>
	</div>
	<?php include('footer.php'); ?>