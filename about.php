        <?php include('allhead.php'); ?>
        <!-- Page Content -->
        <div class="container" style="max-width: 1200px;">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About
                        <!-- <small>Cloud Classroom</small> -->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href=" index">Cloud Classroom</a>
                        </li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Intro Content -->
            <div class="row">
                <!-- <div class="col-md-4">
        <img class="img-responsive" src="images/7fb1f193435815a86c8484f82b9589e1 - Copy.jpg" alt="">
        </div> -->
                <div class="col-md-12">
                    <h2>Our Cloud Classrom</h2>

                    <p>The <strong>“Cloud Classroom”</strong> is not just a website; it's a community of learners and educators dedicated to the pursuit of knowledge. We understand the challenges students face, and we're here to provide a free and inclusive online learning experience.</p><br>

                    <p>We are driven by a singular mission to make quality education accessible to all. We believe that knowledge knows no boundaries, and we are committed to breaking down barriers to learning, especially for those who face financial constraints.</p><br>
                    <p>
                        In this application, student can attend his\her missed classes from e-learn.</p>
                </div>
            </div>
            <!-- /.row -->



            <!-- /.row -->

            <style>
                .grey-bg {
                    background-color: #f2f2f2;
                    /* Light grey color */
                }
            </style>

            <!-- Our Courses -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Modules</h2>
                </div>

                <?php
                include("database.php"); // Ensure that this file has the database connection code

                $sql = "SELECT * FROM courses";
                $result = mysqli_query($connect, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-4">
                        <div class="thumbnail grey-bg">
                            <div class="caption">
                                <h3><?php echo $row['title']; ?><br>
                                    <small><?php echo $row['category']; ?></small>
                                </h3>
                                <p><?php echo $row['description']; ?></p>

                            <!-- Add Learn More Button without a specific course ID -->
                    <a href="registrationform.php" class="btn btn-default" role="button">Learn More</a>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- Teachers -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Our Teachers</h2>
                </div>

                <?php
                include("database.php");
                $sql = "select * from facutlytable";
                $result = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <!-- <img class="img-responsive" src="images/new/download (1).jpeg" alt=""> -->
                            <div class="caption">
                                <h3><?php echo $row['FName']; ?><br>
                                    <small><?php echo $row['Occupation']; ?></small>
                                </h3>
                                <p><?php echo $row['Description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- Testimonials -->

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Testimonials</h2>
                </div>
                <div class="col-md-12">
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                            <!-- Add more indicators as needed -->
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row absTest">
                                    <div class="col-md-6">
                                        <img class="img-responsive customer-img" src="images/welcome46.jpg" alt="Testimonial 1">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="testimonial-text">"I had an amazing learning experience with Cloud Classroom. The instructors are knowledgeable, and the online platform is user-friendly."</p>
                                        <p class="testimonial-author">- John Doe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row absTest">
                                    <div class="col-md-6">
                                        <img class="img-responsive customer-img" src="images/smilingFemaleStudent.jpg" alt="Testimonial 2">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="testimonial-text">"The flexibility of online learning at Cloud Classroom allowed me to balance my studies with other commitments. Highly recommended!"</p>
                                        <p class="testimonial-author">- Jane Smith</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row absTest">
                                    <div class="col-md-6">
                                        <img class="img-responsive customer-img" src="images/Returning-Student.jpg" alt="Testimonial 3">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="testimonial-text">"I appreciate the supportive and interactive learning environment. The Cloud Classroom team is dedicated to student success."</p>
                                        <p class="testimonial-author">- Alex Johnson</p>
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

            <!-- /.row -->

            <hr>


        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
        <?php include('footer.php'); ?>
        </body>

        </html>