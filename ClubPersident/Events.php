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
        <h5 class="px-1 mt-1 py-3">Events Dashboard</h5>

        <div class="text-end">
          <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/additions/addEvents.php">
            <button type="button" class="btn btn-primary px-3">
              + Add Event
            </button>
          </a>
        </div>

        <div class="container-fluid">
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th scope="col">ID</th>
                <th scope="col">Event Thumbnail</th>
                <th scope="col">Event Title</th>
                <th scope="col">Date</th>
                <th scope="col">Event Descriptions</th>
                <th scope="col">View(Show or Hidden)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                  <?php
                    // SQL query to retrieve data
                    $sql = "SELECT * FROM tbl_event";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $counter = 1; // Initialize a counter variable
                        while ($row = $result->fetch_assoc()) {
                            $viewStatus = $row["view"];
                            $visibilityClass = ($viewStatus == 'yes') ? 'visible-content' : 'hidden-content';

                            echo '<th scope="row">' . $counter . '</th>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td><img src="' . Config::SITEURL . 'images/Event/' . $row['image'] . '" alt="" width="100" height="100%"></td>';

                            echo '<td>' . $row['titile'] . '</td>';
                            echo '<td>' . $row['date'] . '</td>';
                            echo '<td>' . $row['description'] . '</td>';
                            echo '<td class="visibility-text">' . (($viewStatus == 'yes') ? 'Still Show' : 'Not in Show') . '</td>';
                            echo '<td>';
                            echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                            echo '<button type="button" class="btn btn-outline-warning" onclick="editRecord(' . $row['id'] . ')">Edit</button>';
                            echo '<button type="button" class="btn btn-outline-danger" onclick="deleteRecord(' . $row['id'] . ')">Delete</button>';
                            echo '</div>';
                            echo '</td>';
                            echo '</tr>';

                            $counter++; // Increment the counter variable
                        }
                    } else {
                        echo "0 results";
                    }
                  ?>

                </tbody>
          </table>
        </div>
      </div>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>

      <script>
        function deleteRecord(newsId) {
            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::SITEURL?>/Super Admin panles/parts/delete_Event.php', // Adjust the path accordingly
                    data: { id: newsId },
                    success: function (response) {
                        console.log(response);
                        location.reload();
                    },
                    error: function (error) {
                        console.error('Error deleting record:', error);
                    }
                });
            }
        }

        function editRecord(newsId) {
            // Redirect to the edit_news.php page with the newsId as a parameter
            window.location.href = '<?php echo Config::SITEURL; ?>UnionAdminpanles/edit/editEvents.php?id=' + newsId;
        }



    </script>
    </div>
  </body>
</html>
