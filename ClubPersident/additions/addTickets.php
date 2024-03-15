<?php
include('/xampp/htdocs/UniConnect/config/constants.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Add Tickets Details</title>
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
              <h2 class="fw-bold mb-4 fs-2">Add Ticket Details</h2>
            </div>

            <div class="modal-body p-5 pt-0">


            <form method="POST" action="addTickets.php" enctype="multipart/form-data">
                <div class="row gx-4 gy-3">
                <div class="col-sm-12">
                    <label for="providerID" class="form-label">Select provider</label>
                    <select class="form-select" id="providerID" name="providerID" required>
                    <option value="" selected>Select your provider</option>
                    <option value="2" >faculty admin</option>
                    <option value="3" >club president</option>
                        
                    </select>
                </div>
                  
                  <div class="col-sm-12">
                      <label for="TicketPicture" class="form-label">Ticket Picture</label>
                      <input type="file" class="form-control" name="TicketPicture" id="TicketPicture" required accept="image/*" />
                  </div>
                  <div class="col-sm-12">
                      <label for="TicketTitle" class="form-label">Ticket Title</label>
                      <input type="text" class="form-control" id="TicketTitle" name="TicketTitle" placeholder="Ticket Title" required />
                  </div>

                  

                  <div class="col-sm-6">
                    <label for="TicketDate" class="form-label">Date & Time</label>
                    <input type="date" class="form-control" name="TicketDate" id="TicketDate" required />
                </div>

                <div class="col-sm-6">
                    <label for="TicketPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" name="TicketPrice" id="TicketPrice" placeholder="99.99" required />
                </div>
                <div class="col-sm-12">
                    <label for="TicketAvailability" class="form-label">Availability</label>
                    <input type="number" class="form-control" name="TicketAvailability" id="TicketAvailability" placeholder="" required />
                </div>



                <div class="col-sm-12">
                    <label for="TicketDescription" class="form-label">Ticket Description</label>
                    <textarea class="form-control" id="TicketDescription" name="TicketDescription" rows="3" required></textarea>
                </div>
              </div>

              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit">Add Ticket</button>
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
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Product data
    $TicketTitle = $_POST['TicketTitle'];
    $TicketDate = $_POST['TicketDate'];
    $TicketPrice = $_POST['TicketPrice'];
    $providerID = $_POST['providerID'];
    $TicketDescription = $_POST['TicketDescription'];
    $TicketAvailability = $_POST['TicketAvailability'];

      // Image upload handling
    if (isset($_FILES['TicketPicture']['name'])) {
      $image_name = $_FILES['TicketPicture']['name'];

      // Explode the string into an array
      $image_name_parts = explode('.', $image_name);

      // Get the last element of the array
      $ext = end($image_name_parts);

      $image_name = "Ticket_" . rand(0000, 9999) . '.' . $ext;

      $source_path = $_FILES['TicketPicture']['tmp_name'];
      $destination_path = "/xampp/htdocs/UniConnect/images/Ticket/" . $image_name;

      $upload = move_uploaded_file($source_path, $destination_path);
    } else {
      $image_name = ""; // If no image is uploaded
    }

    // SQL query to insert a new product
    $sql = "INSERT INTO  tbl_ticket (title, price, description, img, availability, date, tiket_provider)
            VALUES ('$TicketTitle', '$TicketPrice', '$TicketDescription', '$image_name', '$TicketAvailability', '$TicketDate', '$providerID')";

    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
      // Redirect to products.php on success
      header("Location: ../tickets.php");
      exit(); // Ensure that no code is executed after the header() function
  
      // Note: Avoid any output (echo, print, HTML content) before the header() function
  } else {
      echo "Failed to add product";
      // Handle error (you may redirect or display an error message)
  }
}
?>