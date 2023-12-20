<?php
session_start();

if ($_SESSION["fidx"] == "" || $_SESSION["fidx"] == NULL) {
	header('Location:facultylogin');
}

$userid = $_SESSION["fidx"];
$fname = $_SESSION["fname"];
?>

<style>
	.show-password-icon {
		cursor: pointer;
		position: absolute;
		right: 40%;
		top: 390px;
		transform: translateY(-50%);
	}
</style>

<?php include('fhead.php');  ?>
<div class="container">
	<div class="row">
		<div class="col-md-5">

			<h3> <a href="welcomefaculty.php"><span style="color:#FF0004"> <?php echo $fname; ?></span></a></h3>
			<?php
			include("database.php");
			$new2 = $_GET['myfid'];

			$sql = "select * from  facutlytable where FID=$new2";
			$result = mysqli_query($connect, $sql);

			while ($row = mysqli_fetch_array($result)) {
			?>
				<form action="" method="POST" name="update">

					<div class="form-group">
						Faculty ID : <?php echo $row['FID']; ?></div>
					<div class="form-group">
						Faculty Name : <input type="text" name="fname" value="<?php echo $row['FName']; ?>"></div>
					<div class="form-group">
						Father Name : <input type="text" name="email" value="<?PHP echo $row['Email']; ?>"><br></div>
					<div class="form-group">
						Address : <input type="text" name="addrs" rows="5" cols="40" value="<?PHP echo $row['Addrs']; ?>"><br></div>
					<div class="form-group">
						Gender : <input type="text" name="gender" value="<?PHP echo $row['Gender']; ?>"><br></div>
					<div class="form-group">
						Phone Number : <input type="tel" name="phno" value="<?PHP echo $row['PhNo']; ?>" maxlength="11"><br></div>
					<div class="form-group">
						Joining Date : <input type="date" name="jdate" value="<?PHP echo $row['JDate']; ?>" readonly> <br></div>
					<div class="form-group">
						City : <input type="text" name="city" value="<?PHP echo $row['City']; ?>"><br></div>

<!-- Add this script for password toggle -->
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('passwordInput');
        var icon = document.querySelector('.show-password-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.textContent = '👁️';
        } else {
            passwordInput.type = 'password';
            icon.textContent = '👁️';
        }
    }
</script>

					<div class="form-group">
						Password:
						<input type="password" name="pass" id="passwordInput" value="<?PHP echo $row['Pass']; ?>" maxlength="10">
						<i class="show-password-icon" onclick="togglePasswordVisibility()">👁️</i>
					</div>

					<div class="form-group">
						<input type="submit" value="Update!" name="update" class="btn btn-primary">
					</div>
				</form>
			<?php
			}
			?>

			<?php
			if (isset($_POST['update'])) {
				$tempfname = $_POST['fname'];
				$tempemail = $_POST['email'];
				$tempaddrs = $_POST['addrs'];
				$tempgender = $_POST['gender'];
				$tempphno = $_POST['phno'];
				$tempcity = $_POST['city'];
				$temppass = $_POST['pass'];

				$done = "<script>alert( 'Update Success.'); window.location = 'welcomefaculty.php';
				</script>";

				//below SQL query will update the existing faculty 
				$sql = "UPDATE `facutlytable` SET FName='$tempfname', Email='$tempemail', Addrs='$tempaddrs', Gender='$tempgender', City='$tempcity', Pass='$temppass', PhNo='$tempphno' WHERE FID=$new2";


				if (mysqli_query($connect, $sql)) {
					echo $done;
				} else {
					//below statement will print error if SQL query fail.
					echo "<script>alert( 'Update Submitting Faliure. Try Again. Error Details: " . $sql . "<br>" . mysqli_error($connect) . "');</script>";
				}
				//for close connection
				mysqli_close($connect);
			}
			?>
		</div>
	</div>
	</div>
	<?php include('footer.php'); ?>