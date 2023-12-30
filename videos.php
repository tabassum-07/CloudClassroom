<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];
?>
<?php include('fhead.php');  ?>
<div class="row text-center" style="padding-top: 150px;">
<div class="container">

		<div class="col-md-2"></div>
		<div class="col-md-8">

		<h3 style="padding-bottom: 30px;"> <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fname; ?></span></a> </h3>
			<a href="addvideos.php"><button  href="" type="submit" class="btn btn-primary">Add Videos</button></a>
			<a href="managevideos.php"><button  href="" type="submit" class="btn btn-primary">Manage Videos</button></a>
			<a href="addpdf.php"><button type="submit" class="btn btn-primary">Add PDF</button></a>
            <a href="managepdf.php"><button type="submit" class="btn btn-primary">Manage PDF</button></a>

			

			</div>
			<div class="col-md-2"></div>
	</div>
	</div>
	<div class="row text-center" style="padding-top: 50px; padding-bottom: 50px;"></div>

	<?php include('footer.php'); ?>