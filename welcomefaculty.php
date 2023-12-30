<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
	header('Location:facultylogin');
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];

?>
<?php include('fhead.php');  ?>

<div style="padding-top: 30px;"></div>

<div class="container" style="background-image: url(https://img.freepik.com/premium-photo/soft-pastel-gradient-color-abstract-background_608068-1431.jpg); background-size: cover; background-position: center;">


	<div class="row" style="padding-top: 100px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<div class="row" style="padding-top: 20px; padding-bottom: 170px;">

				<!--Welcome page for faculty-->

				<div class="col-md-12 text-center" style="padding-top: 0px; padding-bottom: 50px;">
					<h3 class="text-center" style="padding-bottom: 20px;"> Welcome</h3>
					<h3 class="text-center" style="padding-bottom: 5px; font-weight: bold; "> <?php echo $fname; ?></h3>

					<?php
					include('database.php');
					$userid = $_SESSION["fidx"];
					//selecting data from faculty table
					$sql = "select * from  facutlytable where FID='$userid' ";
					$result = mysqli_query($connect, $sql);
					//loop below will print details of faculty
					while ($row = mysqli_fetch_array($result)) {
					?>
						<h4 class="text-center" style="padding-bottom: 0px; "> <?php echo $row['Occupation']; ?></h4>
						<h4 class="text-center" style="padding-bottom: 0px; "> <?php echo $row['Email']; ?></h4>

					<?php } ?>

				</div>

				<a href="mydetailsfaculty.php?myfid=<?php echo $userid ?>"><button href="" type="submit" class="btn btn-primary">My Details</button></a>

				<a href="viewstudentdetails.php"><button href="" type="submit" class="btn btn-primary">Student Details</button></a>

				<a href="assessment.php"><button href="" type="submit" class="btn btn-primary">Assessment</button></a>
				<a href="examDetails.php"><button href="" type="submit" class="btn btn-primary">Make Result</button></a>
				<a href="resultdetails.php"><button href="" type="submit" class="btn btn-primary">Result List</button></a>
				<a href="querydetails.php"> <button href="" type="submit" class="btn btn-primary">Query</button>
					<a href="videos.php"> <button href="" type="submit" class="btn btn-primary">Materials</button>

						<a href="logoutfaculty"><button href="" type="submit" class="btn btn-danger">Logout</button></a>

			</div>
			<div class="col-md-2"></div>

		</div>
	</div>
</div>

<?php include('footer.php'); ?>