<?php
include('/xampp/htdocs/UniConnect/config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Other form data
    $F_name = $_POST['firstName'];
    $L_name = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['mobileNo'];
    $password = $_POST['password'];
    $role_id = $_POST['adminRole'];

    // Image upload handling
    if (isset($_FILES['profilePicture']['name'])) {
        $image_name = $_FILES['profilePicture']['name'];
        $ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_name = "admins" . rand(0000, 9999) . '.' . $ext;

        $source_path = $_FILES['profilePicture']['tmp_name'];
        $destination_path  = "/xampp/htdocs/UniConnect/images/admins/other_admin/" . $image_name;

        if (move_uploaded_file($source_path, $destination_path)) {
            // Upload successful
        } else {
            // Handle upload failure
            $image_name = ""; // Set a default image if upload fails
        }
    } else {
        $image_name = ""; // If no image is uploaded
    }

    // Determine the table name based on the role_id
    $roleTableMap = [
        2 => 'faculty_admins',
        3 => 'club_president',
        4 => 'products_sellers',
        5 => 'services_owners',
        // Add more mappings as needed
    ];

    $insertTable = $roleTableMap[$role_id] ?? 'default_table';

    // SQL query to insert a new user profile
    $sql = "INSERT INTO $insertTable (F_name, L_name, email, phone, image, role_id, password)
            VALUES ('$F_name', '$L_name', '$email', '$phone', '$image_name', '$role_id', '$password')";

    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
        $_SESSION['success'] = "Admin added successfully";
        header("Location: all_admin.php?success=1");
    } else {
        $_SESSION['error'] = "Failed to add admin";
        // Redirect to the appropriate page or handle error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Add Admins Details</title>
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
              <h2 class="fw-bold mb-4 fs-2">Add Admins Details</h2>
            </div>

            <div class="modal-body p-5 pt-0">
            <form class="needs-validation" novalidate method="POST" action="" enctype="multipart/form-data">
              <div class="row gx-4 gy-3">
                <div class="col-sm-12">
                  <label for="profilePicture">Choose profile picture</label>
                  <input type="file" name="profilePicture" class="form-control" id="profilePicture" placeholder="Choose profile picture" />
                </div>
                <div class="col-sm-6">
                  <label for="firstName">First Name</label>
                  <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" required />
                  <div class="invalid-feedback">Please provide a first name.</div>
                </div>
                <div class="col-sm-6">
                  <label for="lastName">Last Name</label>
                  <input type="text" name="lastName" class="form-control" id="lastName" placeholder="" required />
                  <div class="invalid-feedback">Please provide a last name.</div>
                </div>
                <div class="col-sm-12">
                  <label for="mobileNo">Mobile No</label>
                  <input type="text" name="mobileNo" class="form-control" id="mobileNo" placeholder="" required />
                  <div class="invalid-feedback">Please provide a mobile number.</div>
                </div>
                <div class="col-sm-12">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="" required />
                  <div class="invalid-feedback">Please provide a valid email.</div>
                </div>
                <div class="col-sm-6">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="******" required />
                  <div class="invalid-feedback">Please provide a password.</div>
                </div>
                <div class="col-sm-6">
                  <label for="adminRole">Select Admin Role</label>
                  <div class="input-group">
                    <select class="form-select" id="adminRole" name="adminRole" required>
                      <option value="" disabled selected>Select Admin Role</option>
                      <option value="2">Faculty Admin</option>
                      <option value="3">Club Admin</option>
                      <option value="4">Product Seller</option>
                      <option value="5">Service Provider</option>
                    </select>
                    <div class="invalid-feedback">Please select an admin role.</div>
                  </div>
                </div>
              </div>

              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit" name="submit">Add Admins</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
  })();
</script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
