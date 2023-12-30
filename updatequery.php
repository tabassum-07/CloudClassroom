<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
    header('Location: facultylogin.php');
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];
?>

<?php include('fhead.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3><a href="welcomefaculty.php"><span style="color:#FF0004"><?php echo htmlspecialchars($fname); ?></span></a></h3>

            <?php
            include('database.php');
            $editid = $_GET['gid'];
            $sql = "SELECT * FROM query WHERE Qid = $editid";
            $result = mysqli_query($connect, $sql);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <form action="" method="POST" name="update">
                    <fieldset>
                        <legend>Query Details</legend>
                        <div class="form-group">
                            Query ID:
                            <?php echo $row['Qid']; ?>
                        </div>
                        <div class="form-group">
                            Email ID:
                            <?php echo $row['Eid']; ?>
                        </div>
                        <div class="form-group">
                            Query: <br>
                            <textarea rows="5" cols="40" name="queryx"><?php echo htmlspecialchars($row['Query']); ?></textarea><br>
                        </div>
                        <div class="form-group">
                            Answer: <br>
                            <textarea rows="5" cols="40" name="ansx"><?php echo htmlspecialchars($row['Ans']); ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update!" name="update" class="btn btn-primary">
                        </div>
                    </fieldset>
                </form>

            <?php
            }
            ?>

            <?php
           if (isset($_POST['update'])) {
			$tempquery = $_POST['queryx'];
			$tempans = $_POST['ansx'];
		
			// Use prepared statement to prevent SQL injection
			$update_query = $connect->prepare("UPDATE `query` SET `Query`=?, `Ans`=? WHERE `Qid`=?");
			$update_query->bind_param("ssi", $tempquery, $tempans, $editid);
		
			if ($update_query->execute()) {
				echo "<script>
						alert('Query Details has been updated.');
						window.location.href = 'querydetails.php';
					  </script>";
				exit(); // Ensure that no further code is executed after the redirect
			} else {
				echo "<br><Strong>Query Details Updating Failure. Try Again</strong><br> Error Details: " . $update_query->error;
			}
		
			$update_query->close();
			mysqli_close($connect);
		}
            ?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
