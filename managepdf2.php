<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
    header('Location: facultylogin');
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];

include('database.php');

if (isset($_GET['editassid'])) {
    $editid = $_GET['editassid'];
    $sql = "SELECT * FROM pdfs WHERE P_id = $editid";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $pdfTitle = $row['P_Title'];
        $pdfUrl = $row['P_Url'];
        $pdfRemarks = $row['P_Remarks'];
    } else {
        echo "Error fetching PDF details: " . mysqli_error($connect);
    }
} else {
    header('Location: managepdf.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newTitle = $_POST['new_title'];
    $newUrl = $_POST['new_url'];
    $newRemarks = $_POST['new_remarks'];

    $updateSql = "UPDATE pdfs SET P_Title = '$newTitle', P_Url = '$newUrl', P_Remarks = '$newRemarks' WHERE P_id = $editid";

    if (mysqli_query($connect, $updateSql)) {
        echo "
            <br><br>
            <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Success!</strong> PDF details updated.
            </div>
            ";
        
        // Redirect to managepdf.php after updating
        header('Location: managepdf.php');
        exit();
    } else {
        echo "<br><Strong>PDF Details Update Failure. Try Again</strong><br> Error Details: " . $updateSql . "<br>" . mysqli_error($connect);
    }
}

mysqli_close($connect);
?>

<?php include('fhead.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3><a href="welcomefaculty.php"><span style="color:#FF0004"> <?php echo $fname; ?></span></a></h3>

            <h2 class="page-header">Edit PDF Details</h2>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?editassid=" . $editid; ?>">
                <div class="form-group">
                    <label for="new_title">PDF Title:</label>
                    <input type="text" class="form-control" id="new_title" name="new_title" value="<?php echo $pdfTitle; ?>">
                </div>

                <div class="form-group">
                    <label for="new_url">PDF URL:</label>
                    <input type="text" class="form-control" id="new_url" name="new_url" value="<?php echo $pdfUrl; ?>">
                </div>

                <div class="form-group">
                    <label for="new_remarks">Description:</label>
                    <textarea class="form-control" id="new_remarks" name="new_remarks"><?php echo $pdfRemarks; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update PDF Details</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
