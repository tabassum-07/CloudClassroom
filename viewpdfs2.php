<?php
session_start();

if (empty($_SESSION["sidx"]) || empty($_SESSION["fname"]) || empty($_SESSION["lname"])) {
    header('Location: studentlogin');
    exit();
}

$userid = $_SESSION["sidx"];
$userfname = $_SESSION["fname"];
$userlname = $_SESSION["lname"];
?>

<?php include('studenthead.php'); ?>

<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
            <h3>
                <a href="welcomestudent.php">
                    <span style='color:red'>
                        <?php echo $userfname . " " . $userlname; ?>
                    </span>
                </a>
            </h3>

            <?php
            include('database.php');

            // Check if 'pdfid' is set in the URL
            if (isset($_GET['pdfid'])) {
                $pdf_id = $_GET['pdfid'];

                // Retrieve details for the specific PDF
                $sql = "SELECT * FROM pdfs WHERE P_id = ?";
                $stmt = mysqli_prepare($connect, $sql);
                mysqli_stmt_bind_param($stmt, "i", $pdf_id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    echo "<h2 class='page-header'>PDF Details</h2>";
                    echo "<p><strong>Title:</strong> {$row['P_Title']}</p>";
                    echo "<p><strong>Description:</strong> {$row['P_Remarks']}</p>";

                    // Display PDF using the URL
                    echo "<iframe src='{$row['P_Url']}' width='800' height='600'></iframe>";
                } else {
                    echo "Invalid PDF ID.";
                }

                
                mysqli_stmt_close($stmt);
            } else {
                echo "Invalid PDF ID.";
            }

            mysqli_close($connect);
            ?>
            <td><a href="viewpdfs.php"> <input type="button" Value="Back" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"></a>
						</td>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
