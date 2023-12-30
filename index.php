<?php


// Check if a faculty member is not logged in
$isFacultyLoggedIn = isset($_SESSION['fidx']);
?>

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
			<div class="fill" style="background-image:url('images/Orange Illustrative.png');"></div>
			<div class="carousel-caption">
				<h2 style="color: black;"> Making Learning Easy</h2>
			</div>
		</div>
		<div class="item active">
			<div class="fill" style="background-image:url('images/Cloud Classroom.png');"></div>
			<div class="carousel-caption">
				<a href="registrationform">
					<h2 style="color: white;">Register Today</h2>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('images/Blue.png');"></div>
			<div class="carousel-caption">
				<a href="takeassessment">
					<h2 style="color: white;">Take Assessment</h2>
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

		<div class="col-md-12" style="padding-top: 20px; padding-bottom: 30px;">
			<div class="row">
				<div class="col-md-6">
					<img class="img-responsive" src="images/7fb1f193435815a86c8484f82b9589e1 - Copy.jpg" alt="">
				</div>
				<div class="col-md-6" style="margin-top: 40px;"> <!-- Add margin-top here -->
					<h2>About Us</h2>
					<div style="margin-top: 20px; font-weight: default;">
						<p>Unlike traditional educational platforms, Cloud Classroom is not just a website; it's a community of learners and educators dedicated to the pursuit of knowledge. We understand the challenges students face, and we're here to provide a free and inclusive online learning experience.</p><br>
						<a href="about" class="btn btn-default">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Photo Carousel Section -->

<style>
    /* Add this style block in the head or in your stylesheet */
    .carousel-inner .item {
        height: 400px; /* Set a fixed height for the carousel items */
    }

    .carousel-inner .item img {
        width: 100%; /* Make the images fill the entire width of the carousel item */
        height: 100%; /* Make the images fill the entire height of the carousel item */
        object-fit: cover; /* Maintain aspect ratio and cover the entire space */
    }
</style>

<div class="row">
    <div class="col-md-10 col-md-offset-1" style="padding-left: 50px; padding-right: 50px;">
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                <li data-target="#testimonialCarousel" data-slide-to="2"></li>
				<li data-target="#testimonialCarousel" data-slide-to="3"></li>
                <!-- Add more indicators as needed -->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row absTest">
                        <div class="col-md-12 col-md-offset-0">
                            <img class="img-responsive customer-img" src="images/HTML-Tutorials.jpg" alt="Testimonial 1">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row absTest">
                        <div class="col-md-12 col-md-offset-0 text-center">
                            <img class="img-responsive customer-img" src="images/PHP-tutorial.jpg" alt="Testimonial 2">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row absTest">
                        <div class="col-md-12 col-md-offset-0 text-center">
                            <img class="img-responsive customer-img" src="images/CSS-Tutorial.jpg" alt="Testimonial 3">
                        </div>
                    </div>
                </div>
				<div class="item">
                    <div class="row absTest">
                        <div class="col-md-12 col-md-offset-0 text-center">
                            <img class="img-responsive customer-img" src="images/Bootstrap-5.jpg" alt="Testimonial 4">
                        </div>
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div style="margin-top: 30px;"></div>

<!-- Objectives Section -->
<div class="row bg-success" style="padding-top: 50px; padding-bottom: 50px;">
	<div class="col-md-12 text-center">
		<h2 style="color: black; font-size: 35px; margin-bottom: 20px;">Our Objectives</h2>
		<div style="color: black; font-size: 15px; line-height: 1.6;">
			<p class="mb-4">At Cloud Classroom, we are driven by a commitment to fostering accessible and quality education for everyone. Our key objectives include:</p>
			<ul style="list-style-type: none; padding: 0;">
				<li class="mb-3">
					Make quality education universally accessible.
				</li>
				<li class="mb-3">

					Break down knowledge barriers and promote inclusivity.
				</li>
				<li class="mb-3">

					Facilitate learning through engaging video content (e-learning).
				</li>
				<li class="mb-3">

					Provide dedicated support to those facing financial constraints.
				</li>
			</ul>

		</div>
	</div>
</div>

<div style="margin-bottom: 70px;"></div>

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