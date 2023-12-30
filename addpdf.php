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
        <div class="col-md-8">

            <h3><a href="welcomefaculty.php"><span style="color:#FF0004"><?php echo $fname; ?></span></a></h3>
            
            <?php
            include("database.php");

            if (isset($_POST['submit'])) {
                $title = $_POST['pdftitle'];
                $pdf_url = $_POST['PDFURL'];
                $pdf_info = $_POST['PDFinfo'];

                $done = "
                    <center>
                    <div class='alert alert-success fade in __web-inspector-hide-shortcut__'' style='margin-top:10px;'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>
                    <strong><h3 style='margin-top: 10px;
                    margin-bottom: 10px;'> PDF added successfully.</h3>
                    </strong>
                    </div>
                    </center>
                    ";

                $sql = "INSERT INTO `pdfs` (`P_Title`, `P_Url`, `P_Remarks`) VALUES ('$title','$pdf_url','$pdf_info')";
                mysqli_query($connect, $sql);

                echo $done;
            }
            ?>

            <fieldset>
                <legend>Add PDFs</legend>
                <form action="" method="POST" name="AddPDF">
                    <table class="table table-hover">
                        <tr>
                            <td><strong>PDF Title</strong></td>
                            <td><input type="text" name="pdftitle" required></td>
                        </tr>
                        <tr>
                            <td><strong>PDF URL</strong></td>
                            <td><textarea name="PDFURL" rows="1" cols="150" required></textarea></td>
                        </tr>
                        <tr>
                            <td><strong>PDF Description</strong></td>
                            <td><textarea name="PDFinfo" rows="5" cols="150" required></textarea></td>
                        </tr>
                        <td><button type="submit" name="submit" class="btn btn-primary">Add PDF</button></td>
                    </table>
                </form>
            </fieldset>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>
