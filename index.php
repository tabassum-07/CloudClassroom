<?php include('allhead.php'); ?>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item">
			<div class="fill" style="background-image:url('images/1900x10802.png');"></div>
			<div class="carousel-caption">
				<h2 style="color: black;"> Making Learning Easy</h2>
			</div>
		</div>
		<div class="item active">
			<div class="fill" style="background-image:url('images/1900x10801.png');"></div>
			<div class="carousel-caption">
				<a href="registrationform">
					<h2 style="color: white;">Register Today</h2>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('images/1900x10803.png');"></div>
			<div class="carousel-caption">
				<a href="takeassessment">
					<h2 style="color: white; ">Take Assessment</h2>
			</div>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>

</header>

<!-- Page Content -->
<div class="container" style="max-width: 1200px;">

	<!-- Marketing Icons Section -->
	<div class="row">

		<div class="col-md-12" style="padding-top: 50px; padding-bottom: 50px;">
			<div class="row">
				<div class="col-md-6">
					<img class="img-responsive" src="images/7fb1f193435815a86c8484f82b9589e1 - Copy.jpg" alt="">
				</div>
				<div class="col-md-6" style="margin-top: 40px;"> <!-- Add margin-top here -->
					<h2>About Us</h2>
					<div style="margin-top: 20px;">
					<p>Unlike traditional educational platforms, Cloud Classroom is not just a website; it's a community of learners and educators dedicated to the pursuit of knowledge. We understand the challenges students face, and we're here to provide a free and inclusive online learning experience.</p><br>
					<a href="about" class="btn btn-default">Learn More</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="row  bg-success" style="padding-top: 50px; padding-bottom: 50px;">
		<div class="col-md-12 text-center">
			<div class="ss">
				<h2>Objectives</h2>
				<div class="ss">
					<p>Make quality education universally accessible.</p>
					<p>Knowledge knows no boundaries.</p>
					<p>To learn from by watching videos (e-learn).</p>
					<p>Especially dedicated to those facing financial constraints.</p>
				</div>
			</div>
		</div>
	</div>


</div>
<!-- /.row -->

</style>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 4000 //changes the speed
            })
        </script>

<?php include('footer.php'); ?>