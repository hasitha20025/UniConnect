<?php
// Include your database connection
include('/xampp/htdocs/UniConnect/config/constants.php');

// Function to sanitize user input
function sanitizeInput($input)
{
    return htmlspecialchars(strip_tags(trim($input)));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission for updating the database
    $id = sanitizeInput($_POST['id']);
    $title = sanitizeInput($_POST['title']);
    $date = sanitizeInput($_POST['date']);
    $description = sanitizeInput($_POST['description']);
    $view = isset($_POST['view']) ? 'yes' : 'no';  // Set 'yes' if checked, 'no' otherwise

    // Handle image upload
    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        $ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_name = "news" . rand(0000, 9999) . '.' . $ext;

        $source_path = $_FILES['image']['tmp_name'];
        $destination_path = "/xampp/htdocs/UniConnect/images/news/" . $image_name;

        $upload = move_uploaded_file($source_path, $destination_path);

        if (!$upload) {
            $_SESSION['upload'] = "<div class='error'>Failed to upload image / please give the correct path of the image</div>";
            header('location: admin_news.php');
            die();
        }
    } else {
        $image_name = $row['image']; // If no new image is uploaded, use the existing one
    }

    // Update the record in the database
    $updateQuery = "UPDATE tbl_news SET title='$title', date='$date', description='$description', view='$view', image='$image_name' WHERE id='$id'";

    if ($conn->query($updateQuery) === TRUE) {
        // Redirect to the news dashboard or display a success message
        header("Location: admin_news.php?id=$id&success=1");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
} elseif (isset($_GET['id'])) {
    // Display the form for editing the news details
    $newsId = sanitizeInput($_GET['id']);

    // Fetch the specific news record from the database
    $selectQuery = "SELECT * FROM tbl_news WHERE id = '$newsId'";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Now you can use $row to pre-fill the form fields in your edit page
        // Add your HTML/PHP code for the edit form here
    } else {
        echo "News record not found";
    }
} else {
    echo "Invalid request";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Edit News Details</title>
    <link rel="shortcut icon" href="./picuters/logo/2-b.png" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="modal modal-sheet position-static d-block p-4 mt-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h2 class="fw-bold mb-4 fs-2">Edit News Details</h2>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="edit_news.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <div class="col-sm-12">
                                <label for="view">Availability</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view" name="view"
                                        value="yes" <?php echo ($row['view'] == 'yes') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="view">Available</label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="image">News Thumbnail</label>
                                <input type="file" class="form-control" name="image" id="image" />
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">News Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="News Title"
                                        value="<?php echo $row['title']; ?>" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="date">Date & Time</label>
                                <input type="date" class="form-control" name="date"
                                    value="<?php echo $row['date']; ?>" required>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">News Descriptions</label>
                                    <textarea class="form-control" name="description" rows="3"
                                        required><?php echo $row['description']; ?></textarea>
                                </div>
                            </div>

                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit">Save
                                Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
