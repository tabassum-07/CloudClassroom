<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}
$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$userlname = $_SESSION[ "lname" ];
?>
<?php include('studenthead.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
		<h3><a href="welcomestudent.php"><span style='color:red'><?php echo $userfname." ".$userlname; ?></span></a></h3>

			<?php 

include('database.php');
$sEno = isset($_GET['seno']) ? $_GET['seno'] : null;
//below query will print the existing record of result
$sql="SELECT * FROM result WHERE Eno='$sEno'";
$rs=mysqli_query($connect,$sql);
echo "<h2 class='page-header'>Result View</h2>";
echo "<table class='table table-striped' style='width:100%'>
<tr>
<th>Exam ID</th>
<th>Enrolment Number</th>
<th>Marks</th>

</tr>";

while ($row = mysqli_fetch_array($rs)) {
    ?>
    <tr>
        <td><?php echo $row['Eno']; ?></td>
        <td><?php echo $row['Ex_ID']; ?></td>
        <td><?php echo $row['Marks']; ?></td>
    </tr>
    <?php
}
			?>
			</table>
		</div>
	</div>
	</div>
	<?php include('footer.php'); ?>