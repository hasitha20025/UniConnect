<?php
include('/xampp/htdocs/UniConnect/config/constants.php');
ob_start();

if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $sql = "SELECT * from tbl_notifictions WHERE id = $newsId";
    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($rows = mysqli_fetch_assoc($res)) {
                
                $date = $rows["date"];
                $title = $rows["title"];
                $massage = $rows["massage"];
                $view = $rows["view"];
            }
        }
    }
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
        <div class="modal modal-sheet position-static d-block p-4 mt-5" tabindex="-1" role="dialog"
            id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h2 class="fw-bold mb-4 fs-2">Edit Notifications Details</h2>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form action="edit_Notification.php" method="post" enctype="multipart/form-data">

                            <!-- Hidden input for news id -->
                            <input type="hidden" name="new_id" value="<?php echo $newsId; ?>">

                            <!-- Availability checkbox -->
                            <div class="col-sm-12">
                                <label for="view">Availability</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="view" name="new_view"
                                        value="yes" <?php echo $view == 'yes' ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="view">Available</label>
                                </div>
                            </div>

                           

                            <!-- News Title input -->
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Notifications Title</label>
                                    <input type="text" class="form-control" name="new_title"
                                        placeholder="News Title" value="<?php echo $title; ?> " required>
                                </div>
                            </div>

                            <!-- Date & Time input -->
                            <div class="col-sm-6">
                                <label for="date">Date & Time</label>
                                <input type="date" class="form-control" name="new_date"
                                    value="<?php echo $date; ?>" required>
                            </div>

                            <!-- News Descriptions textarea -->
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Notifications massages</label>
                                    <textarea class="form-control" name="new_massages" rows="3"
                                        required><?php echo $massage; ?></textarea>
                                </div>
                            </div>

                            <!-- Save Changes button -->
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit"
                                name="submit">Save Changes</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

<?php

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $new_id = $_POST['new_id'];
    $new_title = $_POST['new_title'];
    
    $new_date = $_POST['new_date'];
    $new_massages = $_POST['new_massages'];
    $new_view = isset($_POST['new_view']) ? 'yes' : 'no'; // Set 'yes' if checked, 'no' otherwise


    $updateQuery = "UPDATE tbl_notifictions SET title = '$new_title', date = '$new_date', massage = '$new_massages', view = '$new_view' WHERE id = $new_id";

    if ($conn->query($updateQuery) === TRUE) {
        // Redirect to the news dashboard or display a success message
        header("Location: notifications.php?id=" . $new_id);
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
