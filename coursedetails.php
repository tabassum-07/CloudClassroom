<?php
session_start();

if ($_SESSION["umail"] == "" || $_SESSION["umail"] == NULL) {
    header('Location:AdminLogin.php');
}

$userid = $_SESSION["umail"];
?>

<!DOCTYPE HTML>
<?php include('adminhead.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">Welcome <a href="welcomeadmin">Admin</a></h3>

            <h3 class="page-header">Course Details</h3>

            <?php
            // Include your database connection file
            include("database.php");

            // Check if the deleteid parameter is set in the URL
            if (isset($_GET['deleteid'])) {
                // Get the course ID to be deleted
                $deleteID = $_GET['deleteid'];

                // Perform the delete operation
                $deleteSql = "DELETE FROM courses WHERE sl = '$deleteID'";
                mysqli_query($connect, $deleteSql);
            }

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $courseTitle = $_POST["courseTitle"];
                $courseCategory = $_POST["courseCategory"];
                $courseDescription = $_POST["courseDescription"];

                // Insert the new course into the database
                $sql = "INSERT INTO courses (title, category, description) VALUES ('$courseTitle', '$courseCategory', '$courseDescription')";
                mysqli_query($connect, $sql);
            }



            // Fetch and display course details
            $sql = "SELECT * FROM courses";
            $result = mysqli_query($connect, $sql);

            // Display the course details in a table
            echo "<table class='table table-striped' style='width:100%'>
            <tr>
              <th>SL</th>
               <th>Course Name</th>
               <th>Category</th>
               <th>Description</th>
               <th>Edit</th>
               <th>Delete</th>
               </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>
            <td>{$row['sl']}</td>
            <td>{$row['title']}</td>
            <td>{$row['category']}</td>
            <td>{$row['description']}</td>
            <td><a href='editcourse.php?sl={$row['sl']}'><button type='button' class='btn btn-info btn-sm'>Edit</button></a></td>
            <td><a href='coursedetails.php?deleteid={$row['sl']}'><button type='button' class='btn btn-danger btn-sm'>Delete</button></a></td>
        </tr>";
            }

            echo "</table>";
            ?>

            <!-- Add New Course Button -->
            <a href="addnewcourse.php"><button type="button" class="btn btn-success">Add New Course</button></a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>