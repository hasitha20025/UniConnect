<?php
include('../parts/header.php');

// Redirect if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: " . Config::SITEURL . "Super Admin panles/index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
?>

<?php include('../parts/notification.php') ?>
<?php include('../parts/navigation.php') ?>

<br />
<br />
<br />
<br />

<div class="container-fluid">
    <h5 class="px-1 mt-4 py-3">Tickets Orders Dashboard</h5>
    <br>

    <div class="container-fluid">
        <h5>Tickets</h5>
        <br>

        <?php
        if (isset($_POST['check_orders'])) {
            $selectedTicketId = $_POST['ticket_id'];
        }
        ?>

        <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">Ticket ID</th>
                    <th scope="col">Ticket Picture</th>
                    <th scope="col">Ticket Title</th>
                    <th scope="col">Uint Prise($)</th>
                    <th scope="col">User-pic</th>
                    <th scope="col">F Name</th>
                    <th scope="col">L Name</th>
                    <th scope="col">User Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Oder Count</th>
                    <th scope="col">Balance($)</th>
                    <th scope="col">order status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch data from the database
                $query = "SELECT * FROM ticket_orders WHERE ticket_id='$selectedTicketId'";
                $result = mysqli_query($conn, $query);

                // Check if there are any rows in the result set
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['ticket_id'] . '</td>';
                        echo '<td><img src="' . Config::SITEURL . 'images/Ticket/'  . $row['tiket_img'] . '" alt="" width="80" height="100%"></td>';
                        echo '<td>' . $row['ticket_titile'] . '</td>';
                        echo '<td>' . $row['unit_prize'] . '</td>';
                        echo '<td><img src="' . Config::SITEURL . 'images/Ticket/'  . $row['user_picture'] . '" alt="" width="50" height="100%" class="rounded-circle"></td>';
                        echo '<td>' . $row['F_name'] . '</td>';
                        echo '<td>' . $row['L_name'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['mobile'] . '</td>';
                        echo '<td>' . $row['order_count'] . '</td>';
                        echo '<td>' . $row['total_balance'] . '</td>';
                        echo '<td>' . $row['order_status'] . '</td>';
                        echo '<td>';
                        echo '<div class="btn-group" role="group" aria-label="Basic outlined example">';
                        echo '<button type="button" class="btn btn-outline-primary">Order Complete</button>';
                        echo '<button type="button" class="btn btn-outline-danger">Delete</button>';
                        echo '</div>';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    // No data found
                    echo '<tr><td colspan="13">No records found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
