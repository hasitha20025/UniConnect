<?php
// Include your database connection
include('/xampp/htdocs/UniConnect/config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission for adding notifications to the database
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $description = mysqli_real_escape_string($conn, $_POST['massage']);
    $view = isset($_POST['view']) ? 'yes' : 'no';

    // Insert the notification details into the database using prepared statements
    $insertQuery = "INSERT INTO tbl_notifictions (title, date, massage, view) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssss", $title, $date, $description, $view);

    if ($stmt->execute()) {
        // Redirect to the notifications dashboard or display a success message
        header("Location: ../Notifications.php?success=1");
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
    <title>UniConnect add notifictions</title>
    <link
      rel="shortcut icon"
      href="./picuters/logo/2-b.png"
      type="image/x-icon"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div
        class="modal modal-sheet position-static d-block p-4 mt-5"
        tabindex="-1"
        role="dialog"
        id="modalSignin"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h2 class="fw-bold mb-4 fs-2">Add notifictions</h2>
            </div>

            <div class="modal-body p-5 pt-0">
            <form action="addNotification.php" method="post" enctype="multipart/form-data">


                        <div class="col-sm-12">
                            <label for="view">Availability</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="view" name="view" value="yes" checked>
                                <label class="form-check-label" for="view"> Hide / Show</label>
                            </div>
                        </div>

               
                        <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Notifictions Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Notifictions Title" required />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="date">Date & Time</label>
                                <input type="date" class="form-control" name="date" id="date" required />
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Notifictions Descriptions</label>
                                    <textarea class="form-control" id="description" name="massage" rows="3" required></textarea>
                                </div>
                            </div>

                <button
                  class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3"
                  type="submit"
                >
                  Add Notifictions
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
