<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
	header('Location: facultylogin');
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];
?>
<?php include('fhead.php'); ?>

<div class="container">
	<div class="row">
	<div class="col-md-10 col-md-offset-1" style="padding-top: 50px;">

			<h3> <a href="welcomefaculty.php"><span style="color:#FF0004"> <?php echo $fname; ?></span></a> </h3>

			<div style="padding-bottom: 40px;"></div>

			<?php

			include('database.php');
			$editid = $_GET['editid'];

			// below query will print the existing record of result details
			$sql = "SELECT * FROM result WHERE RsID=$editid";
			$result = mysqli_query($connect, $sql);

			while ($row = mysqli_fetch_array($result)) {
			?>
				<form action="" method="POST" name="update">
					<fieldset>
						<legend>Update Result Details</legend>
						<div class="form-group">
							Enrolment Number:
							<?php echo $row['Eno']; ?>
						</div>
						<div class="form-group">
							Exam ID:
							<?php echo $row['Ex_ID']; ?>
						</div>
						<div class="form-group">
							Marks: <input type="text" name="marks" value="<?php echo htmlspecialchars($row['Marks']); ?>">
						</div>
						<div class="form-group">
							<input type="submit" value="Update Result!" name="update" class="btn btn-primary">
						</div>
					</fieldset>
				</form>

			<?php
			}
			?>

			<?php
			if (isset($_POST['update'])) {
				$tempmarks = mysqli_real_escape_string($connect, $_POST['marks']);

				$sql = "UPDATE `result` SET Marks='$tempmarks' WHERE RsID=$editid";

				if (mysqli_query($connect, $sql)) {
					echo "
					<div class='alert alert-success fade in'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<strong>Success!</strong> Result has been updated.
					</div>
					";

					// Redirect to ResultDetails.php
					header("Location: ResultDetails.php");
					exit(); // Ensure that no further code is executed after the redirect
				} else {
					// below statement will print an error if SQL query fails.
					echo "<br><strong>Result Updation Failure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error($connect);
				}
				// for close connection
				mysqli_close($connect);
			}
			?>

		</div>
	</div>
</div>
<?php include('footer.php'); ?>
