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
        <h5 class="px-1 mt-1 py-3">Services Dashboard</h5>

        <div class="text-end py-2">
          <a href="<?php echo Config::SITEURL?>UnionAdminpanles/additions/addServices.php">
            <button type="button" class="btn btn-primary px-3 py-2">
              + Add Services
            </button>
          </a>
        </div>

        <div class="container-fluid">
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th scope="col">ID</th>
                <th scope="col">Services Picture</th>
                <th scope="col">Services Title</th>
                <th scope="col">Services Category</th>
                <th scope="col">Date</th>
                <th scope="col">Services Descriptions</th>
                <th scope="col">Prise ($)</th>
                <th scope="col">View(Show or Hidden)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

<?php
// Fetch products from the database
$sql = "SELECT * FROM tbl_service";
$result = mysqli_query($conn, $sql);
// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
  $counter = 1;
  while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
    <th scope="row"><?php echo $counter++; ?></th>
      <td><?php echo $row['id']; ?></td>
      <td>
        <img
          src="<?php echo Config::SITEURL; ?>images/Services/<?php echo $row['image']; ?>"
          alt=""
          width="100"
          height="100%"
        />
      </td>
      <td><?php echo $row['titile']; ?></td>
      <td><?php echo $row['category']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td>
      <?php echo $row['availability']; ?>
      </td>
      <td>
      
        <button type="button" class="btn btn-outline-warning" onclick="editRecord(<?php echo $row['id']; ?>)">Edit</button>
        <button type="button" class="btn btn-outline-danger" onclick="deleteRecord(<?php echo $row['id']; ?>)">Delete</button>
      </td>
      
    </tr>
<?php
  }
} else {
  // No products found
  echo '<tr><td colspan="10">No products available</td></tr>';
}
?>
</tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
    function deleteRecord(serviceId) {
        if (confirm('Are you sure you want to delete this service?')) {
            $.ajax({
                type: 'POST',
                url: '<?= Config::SITEURL ?>/UnionAdminpanles/parts/deleteServices.php',
                data: { id: serviceId },
                success: function (response) {
                    console.log(response);
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error('Error deleting record:', xhr.responseText);
                }
            });
        }
    }

    function editRecord(serviceId) {
        // Redirect to the edit_services.php page with the serviceId as a parameter
        window.location.href = '<?= Config::SITEURL ?>UnionAdminpanles/edit/editServices.php?id=' + serviceId;
    }
</script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
