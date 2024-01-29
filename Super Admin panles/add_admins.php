<?php
include('/xampp/htdocs/UniConnect/config/constants.php');
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
            <form class="needs-validation" novalidate>
              <div class="row gx-4 gy-3">
                <div class="col-sm-12">
                  <label for="profilePicture">Choose profile picture</label>
                  <input type="file" name="profilePicture" class="form-control" id="profilePicture" placeholder="Choose profile picture" />
                </div>
                <div class="col-sm-6">
                  <label for="firstName">First Name</label>
                  <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Hasitha" required />
                  <div class="invalid-feedback">Please provide a first name.</div>
                </div>
                <div class="col-sm-6">
                  <label for="lastName">Last Name</label>
                  <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Hasitha" required />
                  <div class="invalid-feedback">Please provide a last name.</div>
                </div>
                <div class="col-sm-12">
                  <label for="mobileNo">Mobile No</label>
                  <input type="text" name="mobileNo" class="form-control" id="mobileNo" placeholder="0763094665" required />
                  <div class="invalid-feedback">Please provide a mobile number.</div>
                </div>
                <div class="col-sm-12">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="hasitha@gmail.com" required />
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
                    <select class="form-select" id="adminRole" required>
                      <option value="" disabled selected>Select Admin Role</option>
                      <option value="facultyAdmin">Faculty Admin</option>
                      <option value="clubAdmin">Club Admin</option>
                      <option value="productSeller">Product Seller</option>
                      <option value="serviceProvider">Service Provider</option>
                    </select>
                    <div class="invalid-feedback">Please select an admin role.</div>
                  </div>
                </div>
              </div>

              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit">Add Admins</button>
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
