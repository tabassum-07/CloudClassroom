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
            $sql = "SELECT * FROM pdfs"; // Assuming your PDF table is named 'pdfs'
            $rs = mysqli_query($connect, $sql);

            if ($rs) {
                echo "<h2 class='page-header'>PDF Details</h2>";
                echo "<table class='table table-striped' style='width:100%'>
                    <tr>
                        <th>PDF Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>";

                while ($row = mysqli_fetch_array($rs)) {
                    echo "<tr>
                            <td>{$row['P_Title']}</td>
                            <td>{$row['P_Remarks']}</td>
                            <td>
                                <a href='viewpdfs2.php?pdfid={$row['P_id']}' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal'>View</a>
                            </td>
                          </tr>";
                }

                echo "</table>";
            } else {
                echo "Error: " . mysqli_error($connect);
            }
            mysqli_close($connect);
            ?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
