<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
    header('Location: facultylogin');
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];
?>

<?php include('fhead.php');  ?>

<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1" style="padding-top: 10px;">
            <h3><a href="welcomefaculty.php"><span style="color:#FF0004"> <?php echo $fname; ?></span></a></h3>

            <?php
            include("database.php");

            if (isset($_REQUEST['deleteid'])) {
                $deleteid = $_GET['deleteid'];
                $sql = "DELETE FROM `pdfs` WHERE P_id = $deleteid";

                if (mysqli_query($connect, $sql)) {
                    echo "
                        <br><br>
                        <div class='alert alert-success fade in'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Success!</strong> PDF details deleted.
                        </div>
                        ";
                } else {
                    echo "<br><Strong>PDF Details Deletion Failure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error($connect);
                }
            }

            mysqli_close($connect);
            ?>

            <?php
            include('database.php');
            $sql = "SELECT * FROM pdfs";
            $rs = mysqli_query($connect, $sql);
            echo "<h2 class='page-header'>PDF Details</h2>";
            echo "<table class='table table-striped' style='width:100%'>
                <tr>
                    <th>ID</th>
                    <th>PDF Title</th>
                    <th>PDF URL</th>
                    <th>Description</th>
                    <th>Delete</th>		
                    <th>Edit</th>		
                </tr>";

            while ($row = mysqli_fetch_array($rs)) {
                ?>
                <tr>
                    <td><?php echo $row['P_id']; ?></td>
                    <td><?php echo $row['P_Title']; ?></td>
                    <td><?php echo $row['P_Url']; ?></td>
                    <td><?php echo $row['P_Remarks']; ?></td>
                    <td>
                        <a href="managepdf.php?deleteid=<?php echo $row['P_id']; ?>">
                            <input type="button" value="Delete" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                        </a>
                    </td>
                    <td>
                        <a href="managepdf2.php?editassid=<?php echo $row['P_id']; ?>">
                            <input type="button" value="Edit" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
