<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
	header('Location:facultylogin');
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];

?>
<?php include('fhead.php');  ?>
<div class="container">
	<div class="row" style="padding-top: 100px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">

		<div class="row" style="padding-top: 30px; padding-bottom: 170px;">

			<!--Welcome page for faculty-->

			<div class="col-md-12 text-center" style= "padding-top: 40px; padding-bottom: 50px;">

    <!-- ... (rest of your code) ... -->


			<h3 class="text-center" style="padding-bottom: 0px;"> Welcome</h3>
			<h3 class="text-center" style="padding-bottom: 20px; font-weight: bold; "> <?php echo $fname; ?></h3>
			<!-- <h3 class="text-center" style="padding-bottom: 20px; font-weight: bold; "> <?php echo $PhNo; ?></h3> -->
			</div>

			<a href="mydetailsfaculty.php?myfid=<?php echo $userid ?>"><button href="" type="submit" class="btn btn-primary">My Details</button></a>

			<a href="viewstudentdetails.php"><button href="" type="submit" class="btn btn-primary">Student Details</button></a>
			
			<a href="assessment.php"><button href="" type="submit" class="btn btn-primary">Assessment</button></a>
			<a href="examDetails.php"><button href="" type="submit" class="btn btn-primary">Make Result</button></a>
			<a href="resultdetails.php"><button href="" type="submit" class="btn btn-primary">Edit Result</button></a>
			<a href="qureydetails.php"> <button href="" type="submit" class="btn btn-primary">Query</button>
				<a href="videos.php"> <button href="" type="submit" class="btn btn-primary">Videos</button>

					<a href="logoutfaculty"><button href="" type="submit" class="btn btn-danger">Logout</button></a>

		</div>
		<div class="col-md-2"></div>

	</div>
	</div>
	</div>

	<?php include('footer.php'); ?>