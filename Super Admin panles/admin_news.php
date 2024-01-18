<?php include('./parts/header.php') ?>
<?php include('./parts/notification.php') ?>
<?php include('./parts/navigation.php') ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>


    <div class="container-fluid">

      <br />
      <br />
      <br />
      <br />

      <div class="container-fluid">
        <h5 class="px-1 mt-4 py-3">News Dashboard</h5>

        <div class="text-end">
          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/add-news-form.html">
            <button type="button" class="btn btn-primary px-3">
               Add News
            </button>
          </a>
        </div>

        <div class="container-fluid">
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th scope="col">ID</th>
                <th scope="col">News Thumbnail</th>
                <th scope="col">News Title</th>
                <th scope="col">Date</th>
                <th scope="col">News Descriptions</th>
                <th scope="col">View(Show or Hidden)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              
                <?php 
                      // SQL query to retrieve data
                      $sql = "SELECT * FROM tbl_news";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                              $viewStatus = $row["view"];
                              $visibilityClass = ($viewStatus == 'yes') ? 'visible-content' : 'hidden-content';
                              
                              echo '<tr class="' . $visibilityClass . '">';
                              echo '<th scope="row">' . $row['id'] . '</th>';
                              echo '<td>' . $row['id'] . '</td>';
                              echo '<td><img src="' . Config::SITEURL . 'Super Admin panles/picuters/news/' . $row['image'] . '" alt="" width="100" height="100%"></td>';
                              echo '<td>' . $row['title'] . '</td>';
                              echo '<td>' . $row['date'] . '</td>';
                              echo '<td>' . $row['description'] . '</td>';
                              echo '<td class="visibility-text">' . (($viewStatus == 'yes') ? 'Still Show' : 'Not in Show') . '</td>';
                              echo '<td>';
                              echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                              echo '<button type="button" class="btn btn-outline-warning">Edit</button>';
                              echo '<button type="button" class="btn btn-outline-danger">Delete</button>';
                              echo '</div>';
                              echo '</td>';
                              echo '</tr>';
                          }
                      } else {
                          echo "0 results";
                      }
                  ?>


            </tbody>
          </table>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="/Super Admin panles/js/script.js"></script>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      >

          function toggleVisibility(checkbox, newsId) {
              const isChecked = checkbox.checked;
              const newValue = isChecked ? 'yes' : 'no';

              // Send data to the server using AJAX
              $.ajax({
                  type: 'POST',
                  url: '/Super Admin panles/update_visibility.php',
                  data: { id: newsId, view: newValue },
                  success: function (response) {
                      // Optionally handle the response from the server
                      console.log(response);
                  },
                  error: function (error) {
                      console.error('Error updating visibility:', error);
                  }
              });
          }

    </script>
    </div>
  </body>
</html>
