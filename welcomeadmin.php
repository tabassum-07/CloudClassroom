<?php
session_start();

if ($_SESSION["umail"] == "" || $_SESSION["umail"] == NULL) {
	header('Location:AdminLogin.php');
}
$userid = $_SESSION["umail"];
?>
<!DOCTYPE HTML>
<?php include('adminhead.php'); ?>

<div style="padding-top: 50px;"></div>

<div class="container" style="background-image: url(https://img.freepik.com/premium-vector/holographic-colorful-pastel-cute-pink-purple-gradient-fluid-vector-background-poster-cards_659214-174.jpg); background-size: cover; background-position: center;">

<div class="container">
	<div class="row" style="padding-top: 100px;">


		<!--Welcome page for admin-->

		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h3 class="text-center" style="padding-bottom: 50px; padding-top: 30px;">
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
	</div>
	</div>
	<?php include('footer.php'); ?>