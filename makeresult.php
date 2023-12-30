<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
    header('Location: facultylogin');
    exit(); // Ensure that no further code is executed after the redirect
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];
?>

<?php include('fhead.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3><a href="welcomefaculty.php"><span style="color:#FF0004"> <?php echo $fname; ?></span></a></h3>

            <?php
            include('database.php');
            $make = $_GET['makeid'];
            // Selecting data from the result table from the database
            $sql = "SELECT * FROM examans WHERE ExamID=$make";
            $rs = mysqli_query($connect, $sql);

            while ($row = mysqli_fetch_array($rs)) {
                ?>
                <fieldset>
                    <legend>Make Result</legend>
                    <form action="" method="POST" name="makeresult">
                        <table class="table table-hover">
                            <tr>
                                <td><strong>Enrolment number </strong></td>
                                <td><?php $eno = $row['Senrl'];
                                    echo $eno; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Exam ID:</strong></td>
                                <td><?php $ExamID = $row['ExamID'];
                                    echo $ExamID; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Marks</strong></td>
                                <td><input type="text" class="form-control" name="marks" placeholder="Enter Marks" required></td>
                            </tr>
                            <td><button type="submit" name="make" class="btn btn-primary">Make</button></td>
                        </table>
                    </form>
                </fieldset>
            <?php
            } // end of while loop

            if (isset($_POST['make'])) {
                $mark = mysqli_real_escape_string($connect, $_POST['marks']);

                $sql = "INSERT INTO `result`(`Eno`, `Ex_ID`, `Marks`) VALUES ($eno, '$ExamID' ,'$mark')";

                if (mysqli_query($connect, $sql)) {
                    echo "
                    <br><br>
                    <div class='alert alert-success fade in'>
                        <a href='ResultDetails.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Success!</strong> Result Updated.
                    </div>";
                    // Redirect to ResultDetails.php
                    // Ensure that no further code is executed after the redirect
                } else {
                    // Error message if SQL query fails
                    echo "<br><strong>Result Updation Failure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error($connect);
                    // Close the connection
                    mysqli_close($connect);
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
