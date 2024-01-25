<?php
include('./parts/header.php');
include('./parts/notification.php');
include('./parts/navigation.php');


?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"> </script>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->
      
    <div class="container-fluid">
      <br />
      <br />
      <br />
      <br />

      <div class="container-fluid">
        <h5 class="px-1 mt-4 py-3">Feedbacks Dashboard</h5>

        <div class="container-fluid">
        <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Messages</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Fetch data from tbl_feedback (You need to have your database connection and query here)
                $result = mysqli_query($conn, "SELECT * FROM tbl_feedback");

                // Loop through the results and display each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['message'] . '</td>';
                    echo '<td>';
                    echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                    echo '<button type="button" class="btn btn-outline-danger" onclick="deleteRecord(' . $row['id'] . ')">Delete</button>';
                    echo '</div>';
                    echo '</td>';
                    echo '</tr>';
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
                    url: '<?php echo Config::SITEURL?>/Super Admin panles/parts/delete_feedbacks.php', // Adjust the path accordingly
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





    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
