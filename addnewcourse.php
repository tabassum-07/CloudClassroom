<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Course</title>
    <!-- Include any necessary stylesheets or scripts here -->
</head>
<body>
    <?php include('adminhead.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-header">Add New Course</h3>

                <!-- Add New Course Form -->
                <form action="process_add_course.php" method="post">
                    <div class="form-group">
                        <label for="courseTitle">Course Title:</label>
                        <input type="text" class="form-control" id="courseTitle" name="courseTitle" required>
                    </div>

                    <div class="form-group">
                        <label for="courseCategory">Course Category:</label>
                        <input type="text" class="form-control" id="courseCategory" name="courseCategory" required>
                    </div>

                    <div class="form-group">
                        <label for="courseDescription">Course Description:</label>
                        <textarea class="form-control" id="courseDescription" name="courseDescription" rows="4" required></textarea>
                    </div>

                    <!-- Add more fields based on your course details -->

                    <button type="submit" class="btn btn-primary">Add Course</button>
                </form>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
