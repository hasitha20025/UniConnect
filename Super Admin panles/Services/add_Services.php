<?php
include('/xampp/htdocs/UniConnect/config/constants.php');
ob_start()
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Add Services Details</title>
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
    <link rel="stylesheet" href="../css/main.css" />
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
              <h2 class="fw-bold mb-4 fs-2">Add Services Details</h2>
            </div>

            <div class="modal-body p-5 pt-0">


              
                <form method="POST" action="add_Services.php" enctype="multipart/form-data">
                <div class="row gx-4 gy-3">
                    <div class="col-sm-12">
                        <label for="Servicesproviderid" class="form-label">Select provider</label>
                        <select class="form-select" id="Servicesproviderid" name="Servicesproviderid" required>
                        <option value="" selected>Select Services provider</option>
                            <?php
                            // Fetch product sellers from the database
                            $sql = "SELECT * FROM services_owners";
                            $result = mysqli_query($conn, $sql);

                            // Check if any rows were returned
                            if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                
                                echo '<option value="' . $row['id'] . '">' . $row['F_name'] . ' ' . $row['L_name'] . '</option>';
                                
                            }
                            } else {
                                echo '<option value="" disabled>No sellers found</option>';
                            }
                            ?>
                        </select>
                    </div>

            <div class="col-sm-12">
                <label for="ServicesPicture" class="form-label">Services Picture</label>
                <input type="file" class="form-control" name="ServicesPicture" id="ServicesPicture" required accept="image/*" />
            </div>
            <div class="col-sm-12">
                <label for="ServicesTitle" class="form-label">Services Title</label>
                <input type="text" class="form-control" id="ServicesTitle" name="ServicesTitle" placeholder="News Title" required />
            </div>
            <div class="col-sm-12">
                <label for="ServicesCategory" class="form-label">Services Category</label>
                <input type="text" class="form-control" id="ServicesCategory" name="ServicesCategory" placeholder="Products Category" required />
            </div>
            <div class="col-sm-6">
                <label for="ServicesDate" class="form-label">Date & Time</label>
                <input type="date" class="form-control" name="ServicesDate" id="ServicesDate" required />
            </div>
            <div class="col-sm-6">
                <label for="ServicesPrice" class="form-label">Price</label>
                <input type="number" class="form-control" name="ServicesPrice" id="ServicesPrice" placeholder="99.99" required />
            </div>
        
              <div class="col-sm-12">
                <label for="ServicesAvailability" class="form-label">Services Availability</label>
                <select class="form-select" id="ServicesAvailability" name="ServicesAvailability" required>
                    <option value="" selected>Select Availability</option>
                    <option value="yes">Available</option>
                    <option value="no">Not Available</option>
                </select>
            </div>



            <div class="col-sm-12">
                <label for="ServicesDescription" class="form-label">Services Description</label>
                <textarea class="form-control" id="ServicesDescription" name="ServicesDescription" rows="3" required></textarea>
            </div>
        </div>
        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit">Add Services</button>
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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Servicesproviderid"])) {
    // Product data
    $Servicesproviderid = $_POST['Servicesproviderid'];
    $ServicesTitle = $_POST['ServicesTitle'];
    $ServicesCategory = $_POST['ServicesCategory'];
    $ServicesDate = $_POST['ServicesDate'];
    $ServicesPrice = $_POST['ServicesPrice'];
    $ServicesAvailability = $_POST['ServicesAvailability'];
    $ServicesDescription = $_POST['ServicesDescription'];

      // Image upload handling
    if (isset($_FILES['ServicesPicture']['name'])) {
      $image_name = $_FILES['ServicesPicture']['name'];

      // Explode the string into an array
      $image_name_parts = explode('.', $image_name);

      // Get the last element of the array
      $ext = end($image_name_parts);

      $image_name = "Services_" . rand(0000, 9999) . '.' . $ext;

      $source_path = $_FILES['ServicesPicture']['tmp_name'];
      $destination_path = "/xampp/htdocs/UniConnect/images/Services/" . $image_name;

      $upload = move_uploaded_file($source_path, $destination_path);
    } else {
      $image_name = ""; // If no image is uploaded
    }

    // SQL query to insert a new product
    $sql = "INSERT INTO tbl_service (image, titile, date, category, price, description, availability, service_provider)
            VALUES ('$image_name', '$ServicesTitle', '$ServicesDate', '$ServicesCategory', '$ServicesPrice', '$ServicesDescription', '$ServicesAvailability','$Servicesproviderid')";

    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
      // Redirect to services.php on success
      header("Location: services.php");
      exit();
  } else {
      echo "Failed to add service";
      // Handle error (you may redirect or display an error message)
  }
}
ob_end_flush();
?>
