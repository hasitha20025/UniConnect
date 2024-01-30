<?php include('./parts/header.php') ?>
<?php

if (!isset($_SESSION['user_id'])) {
            header("Location: " . Config::SITEURL . "Super Admin panles/index.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

?>



<?php include('./parts/notification.php') ?>
<?php include('./parts/navigation.php') ?>

    <div class="container-fluid">
      <br />
      <br />
      <br />
      <br />

      <div class="container-fluid">
        <h5 class="px-1 mt-4 py-3">Admins Dashboard</h5>

        <div class="text-end py-2">
          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/add_admins.php">
            <button type="button" class="btn btn-primary px-3 py-2">
              + Add Admins
            </button>
          </a>
        </div>
                   
       <div class="container-fluid" id="Faculty Admins">


        
       <?php
          

          // Fetch faculty admins from the database
          $sql = "SELECT * FROM faculty_admins";
          $result = mysqli_query($conn, $sql);

          // Check if any rows were returned
          if (mysqli_num_rows($result) > 0) {
              echo '<h5>Faculty Admins</h5>';
              echo '<br>';
              echo '<table class="table table-hover table-borderless table-sm caption-top table-responsive">';
              echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#No</th>';
           
              echo '<th>Profile pic</th>';
              echo '<th scope="col">F-Name</th>';
              echo '<th scope="col">L-Name</th>';
              echo '<th scope="col">Mobile No</th>';
              echo '<th scope="col">Email</th>';
              echo '<th>password</th>';
              echo '<th>Role</th>';
              echo '<th scope="col">Access(Active or Disable)</th>';
              echo '<th scope="col">Actions</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';

              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr id="user_' . $row['id'] . '">';
                  echo '<tr>';
                  echo '<th scope="row">' . sprintf('%03d', $counter) . '</th>';
                  echo '<td><img src="./picuters/profile-pic/' . $row['image'] . '" alt="" class="rounded-circle" width="50" height="100%"></td>';
                  
                  echo '<td>' . $row['F_name'] . '</td>';
                  echo '<td>' . $row['L_name'] . '</td>';
                  echo '<td>' . $row['phone'] . '</td>';
                  echo '<td>' . $row['email'] . '</td>';
                  echo '<td>'. $row['password'] .'</td>';
                  echo '<td>Faculty Admin</td>'; // Assuming a fixed role for faculty admins
                  echo '<td>';
                  echo '<div class="form-check form-switch">';
                  echo '<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">';
                  echo '<label class="form-check-label" for="flexSwitchCheckDefault"></label>';
                  echo '</div>';
                  echo '</td>';
                  echo '<td>';
                  echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                  echo '<button type="button" class="btn btn-outline-warning" onclick="editFacultyUser(' . $row['id'] . ')">Edit</button>';
                  echo '<button type="button" class="btn btn-outline-danger" onclick="deleteFacultyUser(' . $row['id'] . ')">Delete</button>';
                  echo '</div>';
                  echo '</td>';
                  echo '</tr>';

                  $counter++;
              }

              echo '</tbody>';
              echo '</table>';
          } else {
              echo '<p>No faculty admins found</p>';
          }

          ?>












        <div class="container-fluid" id="Club President">
          <br><br>


          <?php
              // Fetch club presidents from the database
              $sql = "SELECT * FROM club_president";
              $result = mysqli_query($conn, $sql);

              // Check if any rows were returned
              if (mysqli_num_rows($result) > 0) {
                  echo '<h5>Club Presidents</h5>';
                  echo '<br>';
                  echo '<table class="table table-hover table-borderless table-sm caption-top table-responsive">';
                  echo '<thead>';
                  echo '<tr>';
                  echo '<th scope="col">#No</th>';
                  echo '<th>Profile pic</th>';
                  echo '<th scope="col">F-Name</th>';
                  echo '<th scope="col">L-Name</th>';
                  echo '<th scope="col">Mobile No</th>';
                  echo '<th scope="col">Email</th>';
                  echo '<th>password</th>';
                  echo '<th>Role</th>';
                  echo '<th scope="col">Access(Active or Disable)</th>';
                  echo '<th scope="col">Actions</th>';
                  echo '</tr>';
                  echo '</thead>';
                  echo '<tbody>';

                  $counter = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr id="user_' . $row['id'] . '">';
                      echo '<th scope="row">' . sprintf('%03d', $counter) . '</th>';
                      echo '<td><img src="./picuters/profile-pic/' . $row['image'] . '" alt="" class="rounded-circle" width="50" height="100%"></td>';
                      echo '<td>' . $row['F_name'] . '</td>';
                      echo '<td>' . $row['L_name'] . '</td>';
                      echo '<td>' . $row['phone'] . '</td>';
                      echo '<td>' . $row['email'] . '</td>';
                      echo '<td>' . $row['password'] . '</td>';
                      echo '<td>Club President</td>'; // Assuming a fixed role for club presidents
                      echo '<td>';
                      echo '<div class="form-check form-switch">';
                      echo '<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">';
                      echo '<label class="form-check-label" for="flexSwitchCheckDefault"></label>';
                      echo '</div>';
                      echo '</td>';
                      echo '<td>';
                      echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                      echo '<button type="button" class="btn btn-outline-warning" onclick="editClubPresident(' . $row['id'] . ')">Edit</button>';
                      echo '<button type="button" class="btn btn-outline-danger" onclick="deleteClubPresident(' . $row['id'] . ')">Delete</button>';
                      echo '</div>';
                      echo '</td>';
                      echo '</tr>';

                      $counter++;
                  }

                  echo '</tbody>';
                  echo '</table>';
              } else {
                  echo '<p>No club presidents found</p>';
              }
              ?>
















        <div class="container-fluid" id="Services Owners">
          <br><br>


          <?php
              // Fetch club presidents from the database
              $sql = "SELECT * FROM services_owners";
              $result = mysqli_query($conn, $sql);

              // Check if any rows were returned
              if (mysqli_num_rows($result) > 0) {
                  echo '<h5>Services Owners </h5>';
                  echo '<br>';
                  echo '<table class="table table-hover table-borderless table-sm caption-top table-responsive">';
                  echo '<thead>';
                  echo '<tr>';
                  echo '<th scope="col">#No</th>';
                  echo '<th>Profile pic</th>';
                  echo '<th scope="col">F-Name</th>';
                  echo '<th scope="col">L-Name</th>';
                  echo '<th scope="col">Mobile No</th>';
                  echo '<th scope="col">Email</th>';
                  echo '<th>password</th>';
                  echo '<th>Role</th>';
                  echo '<th scope="col">Access(Active or Disable)</th>';
                  echo '<th scope="col">Actions</th>';
                  echo '</tr>';
                  echo '</thead>';
                  echo '<tbody>';

                  $counter = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr id="user_' . $row['id'] . '">';
                      echo '<th scope="row">' . sprintf('%03d', $counter) . '</th>';
                      echo '<td><img src="./picuters/profile-pic/' . $row['image'] . '" alt="" class="rounded-circle" width="50" height="100%"></td>';
                      echo '<td>' . $row['F_name'] . '</td>';
                      echo '<td>' . $row['L_name'] . '</td>';
                      echo '<td>' . $row['phone'] . '</td>';
                      echo '<td>' . $row['email'] . '</td>';
                      echo '<td>' . $row['password'] . '</td>';
                      echo '<td>Services Owners</td>'; // Assuming a fixed role for club presidents
                      echo '<td>';
                      echo '<div class="form-check form-switch">';
                      echo '<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">';
                      echo '<label class="form-check-label" for="flexSwitchCheckDefault"></label>';
                      echo '</div>';
                      echo '</td>';
                      echo '<td>';
                      echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                      echo '<button type="button" class="btn btn-outline-warning" onclick="editClubPresident(' . $row['id'] . ')">Edit</button>';
                      echo '<button type="button" class="btn btn-outline-danger" onclick="deleteClubPresident(' . $row['id'] . ')">Delete</button>';
                      echo '</div>';
                      echo '</td>';
                      echo '</tr>';

                      $counter++;
                  }

                  echo '</tbody>';
                  echo '</table>';
              } else {
                  echo '<p>No Services Owners found</p>';
              }
              ?>





        <div class="container-fluid" id="Products Sellers">
          <br><br>
          <?php
              // Fetch club presidents from the database
              $sql = "SELECT * FROM products_sellers";
              $result = mysqli_query($conn, $sql);

              // Check if any rows were returned
              if (mysqli_num_rows($result) > 0) {
                  echo '<h5>Products Sellers </h5>';
                  echo '<br>';
                  echo '<table class="table table-hover table-borderless table-sm caption-top table-responsive">';
                  echo '<thead>';
                  echo '<tr>';
                  echo '<th scope="col">#No</th>';
                  echo '<th>Profile pic</th>';
                  echo '<th scope="col">F-Name</th>';
                  echo '<th scope="col">L-Name</th>';
                  echo '<th scope="col">Mobile No</th>';
                  echo '<th scope="col">Email</th>';
                  echo '<th>password</th>';
                  echo '<th>Role</th>';
                  echo '<th scope="col">Access(Active or Disable)</th>';
                  echo '<th scope="col">Actions</th>';
                  echo '</tr>';
                  echo '</thead>';
                  echo '<tbody>';

                  $counter = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr id="user_' . $row['id'] . '">';
                      echo '<th scope="row">' . sprintf('%03d', $counter) . '</th>';
                      echo '<td><img src="./picuters/profile-pic/' . $row['image'] . '" alt="" class="rounded-circle" width="50" height="100%"></td>';
                      echo '<td>' . $row['F_name'] . '</td>';
                      echo '<td>' . $row['L_name'] . '</td>';
                      echo '<td>' . $row['phone'] . '</td>';
                      echo '<td>' . $row['email'] . '</td>';
                      echo '<td>' . $row['password'] . '</td>';
                      echo '<td>Products Sellers</td>'; // Assuming a fixed role for club presidents
                      echo '<td>';
                      echo '<div class="form-check form-switch">';
                      echo '<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">';
                      echo '<label class="form-check-label" for="flexSwitchCheckDefault"></label>';
                      echo '</div>';
                      echo '</td>';
                      echo '<td>';
                      echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                      echo '<button type="button" class="btn btn-outline-warning" onclick="editClubPresident(' . $row['id'] . ')">Edit</button>';
                      echo '<button type="button" class="btn btn-outline-danger" onclick="deleteClubPresident(' . $row['id'] . ')">Delete</button>';
                      echo '</div>';
                      echo '</td>';
                      echo '</tr>';

                      $counter++;
                  }

                  echo '</tbody>';
                  echo '</table>';
              } else {
                  echo '<p>No Services Owners found</p>';
              }
              ?>




      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>


    <script>
    function editFacultyUser(userId) {
        // You can implement the edit functionality here
        // For example, redirect to an edit page with the user ID
        window.location.href = 'edit_user.php?id=' + userId;
    }

    function deleteFacultyUser(userId) {
        // You can implement the delete functionality here
        // For example, show a confirmation dialog and send an AJAX request to delete the user
        var confirmDelete = confirm('Are you sure you want to delete this user?');

        if (confirmDelete) {
            // Perform the deletion (you may use AJAX to send a request to the server)
            // For simplicity, we'll just redirect to a delete_user.php page with the user ID
            window.location.href = 'delete_user.php?id=' + userId;
        }
    }
</script>







  </body>
</html>
