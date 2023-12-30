<?php
session_start();

if ($_SESSION["sidx"] == "" || $_SESSION["sidx"] == NULL) {
    header('Location: studentlogin');
}

$userid = $_SESSION["sidx"];
$userfname = $_SESSION["fname"];
$sEno = $_SESSION["seno"];
$userlname = $_SESSION["lname"];
?>
<?php include('studenthead.php'); ?>

<div style="padding-top: 30px;"></div>

<div class="container" style="background-image: url(https://img.freepik.com/free-vector/winter-blue-pink-gradient-background-vector_53876-117275.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1703030400&semt=ais); background-size: cover; background-position: center;">

    <!-- Include the footer -->

    <div class="row" style="padding-top: 90px; padding-bottom: 200px;">

        <!-- Welcome page for student -->
        <div class="col-md-12 text-center" style="padding-top: 30px; padding-bottom: 50px;">
            <h3 style="padding-bottom: 10px;"> Welcome</h3>
            <h3 style="padding-bottom: 20px; font-weight: bold;"> <?php echo $userfname . " " . $userlname; ?></h3>
        </div>

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Buttons for various actions -->
            <div class="text-center">
                <a href="mydetailsstudent.php?myds=<?php echo $userid; ?>" class="btn btn-primary" title="My Details">My Details</a>
                <a href="takeassessment.php?seno=<?php echo $sEno; ?>" class="btn btn-primary">Take Assessment</a>
                <a href="viewresult.php?seno=<?php echo $sEno; ?>" class="btn btn-primary">Result</a>
                <a href="askquery.php?eid=<?php echo $userid; ?>" class="btn btn-primary">Ask Query</a>
                <a href="viewquery.php?eid=<?php echo $userid; ?>" class="btn btn-primary">My Query</a>
                <a href="viewvideos.php?eid=<?php echo $userid; ?>" class="btn btn-primary">Videos</a>
                <a href="viewpdfs.php?eid=<?php echo $userid; ?>" class="btn btn-primary">PDFs</a>
                <a href="logoutstudent.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php include('footer.php'); ?>