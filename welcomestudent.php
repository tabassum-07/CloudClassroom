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

<div class="container">

    <!-- Include the footer -->

<div class="row" style="padding-top: 80px; padding-bottom: 200px;">

    <!-- Welcome page for student -->
    <div class="col-md-12 text-center" style= "padding-top: 80px; padding-bottom: 50px;">
        <h3 style="padding-bottom: 0px;"> Welcome</h3>
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
            <a href="viewvideos.php?eid=<?php echo $userid; ?>" class="btn btn-primary">Videos (E-Learn)</a>
            <a href="logoutstudent.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<?php include('footer.php'); ?>
