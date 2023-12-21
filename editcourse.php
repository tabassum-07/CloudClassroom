<?php
// Include your database connection file
include("database.php");

// Check if the sl parameter is set in the URL
if (isset($_GET['sl'])) {
    $editID = $_GET['sl'];

    // Fetch the details of the selected course
    $sql = "SELECT * FROM courses WHERE sl = '$editID'";
    $result = mysqli_query($connect, $sql);
    $course = mysqli_fetch_assoc($result);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve updated form data
        $updatedTitle = $_POST["courseTitle"];
        $updatedCategory = $_POST["courseCategory"];
        $updatedDescription = $_POST["courseDescription"];

        // Validate and sanitize the data if needed

        // Update the course details in the database
        $updateSql = "UPDATE courses SET title='$updatedTitle', category='$updatedCategory', description='$updatedDescription' WHERE sl='$editID'";
        mysqli_query($connect, $updateSql);

        // Redirect to the course details page after updating
        header("Location: coursedetails.php");
    }
} else {
    // Redirect to the course details page if sl parameter is not set
    header("Location: coursedetails.php");
}

// Include your header file
include("adminhead.php");
?>

<!-- Edit Course Form -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">Edit Course</h3>

            <form action="" method="post">
                <div class="form-group">
                    <label for="courseTitle">Course Title:</label>
                    <input type="text" class="form-control" id="courseTitle" name="courseTitle" value="<?php echo $course['title']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="courseCategory">Course Category:</label>
                    <input type="text" class="form-control" id="courseCategory" name="courseCategory" value="<?php echo $course['category']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="courseDescription">Course Description:</label>
                    <textarea class="form-control" id="courseDescription" name="courseDescription" rows="4" required><?php echo $course['description']; ?></textarea>
                </div>

                <!-- Add more fields based on your course details -->

                <button type="submit" class="btn btn-primary">Update Course</button>
            </form>
        </div>
    </div>
</div>

<!-- Include your footer file -->
<?php include("footer.php"); ?>
