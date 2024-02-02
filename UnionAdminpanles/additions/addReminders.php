<?php
// Include your database connection
include('/xampp/htdocs/UniConnect/config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission for adding news to the database
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $view = isset($_POST['view']) ? 'yes' : 'no';

    // Image upload handling
    if (isset($_FILES['Remainder_img']['name'])) {
        $image_name = $_FILES['Remainder_img']['name'];
        $ext = end(explode('.', $image_name));
        $image_name = "add_reminders" . rand(0000, 9999) . '.' . $ext;

        $source_path = $_FILES['Remainder_img']['tmp_name'];
        $destination_path  = "/xampp/htdocs/UniConnect/images/Reminder/" . $image_name;

        $upload = move_uploaded_file($source_path, $destination_path);
    } else {
        $image_name = ""; // If no image is uploaded
    }

    // Insert the news details into the database using prepared statements
    $insertQuery = "INSERT INTO tbl_reminder (image, title, date, discription, view, LastupdateAt) VALUES (?, ?, ?, ?, ?, ?)";

    $lastUpdateAt = date('Y-m-d H:i:s'); // Current timestamp for LastupdateAt

    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssssss", $image_name, $title, $date, $description, $view, $lastUpdateAt);

    if ($stmt->execute()) {
        // Redirect to the news dashboard or display a success message
        header("Location: Reminders.php?success=1");
        exit();
    } else {
        echo "Error inserting record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Edit Remainder Details</title>
    <link rel="shortcut icon" href="./picuters/logo/2-b.png" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/main.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="modal modal-sheet position-static d-block p-4 mt-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h2 class="fw-bold mb-4 fs-2">Add Remainder Details</h2>
                    </div>

                    <div class="modal-body p-5 pt-0">

                        <form action="addReminders.php" method="post" enctype="multipart/form-data">

                        <div class="col-sm-12">
                            <label for="view">Availability</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="view" name="view" value="yes" checked>
                                <label class="form-check-label" for="view">Available</label>
                            </div>
                        </div>



                            <div class="col-sm-12">
                                <label for="thumbnail">Remainder Thumbnail</label>
                                <input type="file" class="form-control" name="Remainder_img" id="thumbnail" required />

                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Remainder Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Remainder Title" required />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="date">Date & Time</label>
                                <input type="date" class="form-control" name="date" id="date" required />
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Remainder Descriptions</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div>
                            </div>

                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit">Add Remainder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>