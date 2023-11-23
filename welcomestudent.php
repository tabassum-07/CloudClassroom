	<?php
	session_start();

	if ($_SESSION["sidx"] == "" || $_SESSION["sidx"] == NULL) {
		header('Location:studentlogin');
	}

	$userid = $_SESSION["sidx"];
	$userfname = $_SESSION["fname"];
	$sEno = $_SESSION["seno"];
	$userlname = $_SESSION["lname"];
	?>
	<?php include('studenthead.php'); ?>

	<div class="container">
		<div class="row" style="padding-top: 100px;">

			<!--Welcome page for student-->
			<h3 class="text-center" style="padding-bottom: 0px;"> Welcome</h3>

			<h3 class="text-center" style="padding-bottom: 20px; font-weight: bold; "> <?php echo $userfname . " " . $userlname; ?></h3>

			<div class="col-md-2"></div>
			<div class="col-md-8">
				
				<a href="mydetailsstudent.php?myds=<?php echo $userid;  ?>"> <button type="submit" class="btn btn-primary" title="My Details">My Details</button></a>

				<a href="takeassessment.php?seno=<?php echo $sEno; ?>"> <button type="submit" class="btn btn-primary">Take Assessment</button></a>

				<a href="viewresult.php?seno=<?php echo $sEno;  ?>"> <button href="" type="submit" class="btn btn-primary">Result</button> </a>

				<a href="askquery.php?eid=<?php echo $userid;  ?>"> <button href="" type="submit" class="btn btn-primary">Ask Query</button></a>

				<a href="viewquery.php?eid=<?php echo $userid;  ?>"> <button href="" type="submit" class="btn btn-primary">My Query</button> </a>

				<a href="viewvideos.php?eid=<?php echo $userid;  ?>"> <button href="" type="submit" class="btn btn-primary">Videos (E-Learn)</button></a>

				<a href="logoutstudent"><button href="" type="submit" class="btn btn-danger">Logout</button></a>

			</div>
			<div class="col-md-2"></div>

		</div>
		<?php include('allfoot.php'); ?>