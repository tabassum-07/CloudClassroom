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

		<h3 class="text-center" style="padding-bottom: 0px;"> Welcome</h3>

				<h3 class="text-center" style="padding-bottom: 0px;"> <a href="welcomeadmin">Admin</a></h3>
			
				<h3 class="text-center" style="padding-bottom: 0px;">
			<a href="studentdetails"><button  href="" type="submit" class="btn btn-primary">Student Details</button></a>

			<a href="facultydetails"><button  href="" type="submit" class="btn btn-primary">Faculty Details</button></a>

			<a href="guestdetails"><button  href="" type="submit" class="btn btn-primary">Guest Details</button></a>

			<a href="logoutadmin"><button  href="" type="submit" class="btn btn-danger">Logout</button></a>
</h3>
		</div>
		<div class="col-md-2"></div>
	</div>
	<?php include('allfoot.php'); ?>