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
                    <p>The <strong>“Cloud Classroom”</strong> Website (web based application) is useful for the
                        students, , guest whomever likes to learn from web using E-Learn
                        (Videos), as well Check result, schedules of assessment and all that task like
                        event, news, students can find out list of fresh courses offered by them and
                        admission procedure, discussion forum, fee structure etc. without going to
                        institute. It provides the facility to the students or guest to have complete
                        information about the institute.</p><br>
                    <p>
                        In this application, student can attend his\her missed classes from e-learn.</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Team Members -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Our Teachers</h2>
                </div>

                <?php
                include("database.php");
                $sql = "select * from facutlytable";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($result)){
                ?>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <!-- <img class="img-responsive" src="images/new/download (1).jpeg" alt=""> -->
                        <div class="caption">
                            <h3><?php echo $row['FName']; ?><br>
                                <small>Teacher</small>
                            </h3>
                            <p>Our Computer teacher is my favorite teacher..</p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                <!-- <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/new/download (1).jpeg" alt="">
                        <div class="caption">
                            <h3>Jubayer Mahmud<br>
                                <small>Teacher</small>
                            </h3>
                            <p>Our Computer teacher is my favorite teacher..</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/new/images.jpeg" alt="">
                        <div class="caption">
                            <h3>Shaikh Khan<br>
                                <small>Teacher</small>
                            </h3>
                            <p>Because of my Science Teacher, Science has become my favorite subject too..</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/new/download (2).jpeg" alt="">
                        <div class="caption">
                            <h3>Farhan Rashid<br>
                                <small>Teacher</small>
                            </h3>
                            <p>No one in our class has failed in Science because of his teaching.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/new/teacher2.jpg" alt="">
                        <div class="caption">
                            <h3>Farhana Islam<br>
                                <small>Teacher</small>
                            </h3>
                            <p>Our Science teacher is my favorite teacher.</p>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/new/teacher222223.jpg" alt="">
                        <div class="caption">
                            <h3>Rita Ahmed<br>
                                <small>Teacher</small>
                            </h3>
                            <p>He is very kind to all the students.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/new/20160518144520.jpg" alt="">
                        <div class="caption">
                            <h3>Suchi Saha<br>
                                <small>Teacher</small>
                            </h3>
                            <p>He teaches the lessons every day and keeps tests regularly.</p>

                        </div>
                    </div>
                </div> -->



            </div>
            <!-- /.row -->

            <!-- Our Customers -->
            <!-- Our Customers (Students) - Carousel -->
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
            <!-- Footer -->
            <footer>

                <p class="footer text-center">Copyright &copy; Cloud Classroom 2023 <strong>MCA</strong> project Made by <strong>Ti & Na</strong></p>

            </footer>

        </div>
        <!-- /.container -->
        <style>
            .footer {
                background: #000;
                padding: 10px 0px;
                color: #fff;
                position: fixed;
                left: 0;
                right: 0;
                bottom: -10px;
            }
        </style>
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

        </body>

        </html>