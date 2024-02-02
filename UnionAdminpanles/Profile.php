<?php

include("./parts/top_navbar.php");
include("./parts/offcanvas.php");

if (!isset($_SESSION['user_id'])) {
            header("Location: " . Config::SITEURL . "UnionAdminpanles/index.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

?>

  <div class="container-fluid">
    

    <div class="container-fluid">
      <h5 class="px-1 mt-4">Profile</h5>

      <div class="container-fluid">
        <div class="row g-4">
          <div class="col-sm-12">
            <div class="imgcontainer text-center pb-1">
              <img src="./picuters/profile-pic/p-1.jpg" width="100" height="100" alt="Avatar"
                class="avatar rounded-circle" id="profile-pic" />
            </div>
          </div>

          <div class="col-sm-6">
            <label for="profile">
              <h6>Frist Name</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> Hasitha </span></span>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="profile">
              <h6>Last Name</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> Dhananjaya </span></span>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="profile">
              <h6>Email Address</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> Hasitha@gmail.com </span></span>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="profile">
              <h6>Phone No</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> 0763094665 </span> </span>
            </div>
          </div>
          <div class="col-sm-12 text-center">
            <a href="./edit-own-profile.html">
              <button class="btn btn-primary" type="button">
                Edit Profile
              </button>
            </a>
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