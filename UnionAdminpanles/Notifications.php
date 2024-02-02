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
        <h5 class="px-1 mt-4 py-3">Notifications Dashboard</h5>

        <div class="text-end py-2">
          <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/additions/addNotification.php">
          
            <button type="button" class="btn btn-primary px-3 py-2">
              + Add Notifications
            </button>
          </a>
        </div>

        <div class="container-fluid">
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                
                <th scope="col">ID</th>
                <th scope="col">Notifications Title</th>
                <th scope="col">massages</th>
                <th scope="col">Date</th>
                <th scope="col">Send</th>                
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    // SQL query to retrieve data
                    $sql = "SELECT * FROM tbl_notifictions";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $counter = 1; // Initialize a counter variable
                        while ($row = $result->fetch_assoc()) {
                            $viewStatus = $row["view"];
                            $visibilityClass = ($viewStatus == 'yes') ? 'visible-content' : 'hidden-content';

                            
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['title'] . '</td>';
                            echo '<td>' . $row['massage'] . '</td>';
                            echo '<td>' . $row['date'] . '</td>';
                            
                            echo '<td class="visibility-text">' . (($viewStatus == 'yes') ? 'Show' : 'Hide') . '</td>';
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
    </div>
    <script>
        function deleteRecord(newsId) {
            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Config::SITEURL?>/Super Admin panles/parts/delete_notifications.php', // Adjust the path accordingly
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
            window.location.href = '<?php echo Config::SITEURL?>/Super Admin panles/edit_Notification.php?id=' + newsId;
        }



    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>