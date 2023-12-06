<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];
?>
<?php include('fhead.php');  ?>
<div class="container">
	<div class="row text-center" style="padding-top: 100px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h3 style="padding-bottom: 20px;">  <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fname; ?></span></a> </h3>
			<a href="addassessment.php"><button  href="" type="submit" class="btn btn-primary">Add Assessment</button></a>
			<a href="manageassessment.php"><button  href="" type="submit" class="btn btn-primary">Manage Assessment</button></a>
			</div>
			<div class="col-md-2"></div>
	</div>
	<?php include('footer.php'); ?>