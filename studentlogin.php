<?php include('allhead.php'); ?>
<div class="container">
	<div class="row" style="padding-top: 100px;">
		<div class="col-md-3"></div>
		<div class="col-md-6">

			<!-- Stdeunt login page -->
			<div class="row" style="padding-top: 40px; padding-bottom: 150px;">

			<fieldset>
				<legend class="text-center">
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  Student Login</h3>
				</legend>
				<form name="studentlogin" action="loginlinkstudent" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Id:</label>
							<input type="text" class="form-control" name="sid" required>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="pass" required>
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-primary">Login</button>
						<button type="reset" class="btn btn-primary" style="
background-color: #E52727;
border-color: #D21B1B;">Reset</button>
					</center>
			</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
	</div>
	<?php include('footer.php'); ?>