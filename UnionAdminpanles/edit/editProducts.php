<?php
include('/xampp/htdocs/UniConnect/config/constants.php');
ob_start();

if (isset($_GET['id'])) {
    $ticketId = $_GET['id'];
    $sql = "SELECT * from tbl_products WHERE id = $ticketId";
    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($rows = mysqli_fetch_assoc($res)) {
                $current_image = $rows["img"];
                $date = $rows["date"];
                $title = $rows["title"];
                $description = $rows["descripition"];
                $availability = $rows["availability"];
                $price = $rows["price"];
                $tiket_provider = $rows["PO_ID"];
                $ticketId = $rows["id"];
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>UniConnect Edit Tickets Details</title>
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

    <link rel="stylesheet" href="./css/main.css"/>
</head>
<body>
<div class="container-fluid">
    <div class="modal modal-sheet position-static d-block p-4 mt-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-4 fs-2">Edit Ticket Details</h2>
                </div>

                <div class="modal-body p-5 pt-0">


                   
                    <form action="editProducts.php" method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                              <label for="ticket_code" class="form-label">Ticket ID</label>
                              <input type="text" class="form-control" id="ticket_code" value="<?php echo $ticketId; ?>" readonly>
                              <input type="hidden" name="ticketId" value="<?php echo $ticketId; ?>">
                          </div>

                          <div class="col-sm-12">
                                <label for="image">Ticket Thumbnail</label>
                                <input type="file" class="form-control" name="image" id="image" />
                                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>" />
                                <?php echo $current_image; ?>
                            </div>

                          <div class="mb-3">
                              <label for="TicketTitle" class="form-label">Ticket Title</label>
                              <input type="text" class="form-control" id="TicketTitle" name="TicketTitle" value="<?php echo $title; ?>">
                          </div>

                          <div class="row mb-3">
                              <div class="col">
                                  <label for="TicketDate" class="form-label">Date & Time</label>
                                  <input type="date" class="form-control" id="TicketDate" name="TicketDate" value="<?php echo $date; ?>">
                              </div>

                              <div class="col">
                                  <label for="TicketPrice" class="form-label">Price</label>
                                  <input type="number" class="form-control" id="TicketPrice" name="TicketPrice" placeholder="99.99" value="<?php echo $price; ?>">
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <label for="productAvailability" class="form-label">Products Availability</label>
                              <input type="number" class="form-control" id="productAvailability" name="productAvailability" placeholder="Product Availability" value="<?php echo $availability; ?>" />
                          </div>

                          <div class="mb-3">
                              <label for="TicketDescription" class="form-label">Ticket Description</label>
                              <textarea class="form-control" id="TicketDescription" name="TicketDescription" rows="3"><?php echo $description; ?></textarea>
                          </div>

                          <button name="submit" class="btn btn-primary">Save Changes</button>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
></script>
</body>

<?php

// Check if the form is submitted
if (isset($_POST['submit'])) {

    $ticketId=$_POST['ticketId'];
    $new_title = $_POST['TicketTitle'];
    $current_image = $_POST['current_image'];
    $new_date = $_POST['TicketDate'];
    $TicketPrice= $_POST['TicketPrice'];
    $new_description = $_POST['TicketDescription'];
    $availability  =  $_POST['productAvailability'];;
    $tiket_provider=2;
   

    // Check if current image is available or not
    // Image upload handling

    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];

        if ($image_name != "") {
            $ext = end(explode('.', $image_name));
            $image_name = "EDIT_product" . rand(0000, 9999) . '.' . $ext;

            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = "/xampp/htdocs/UniConnect/images/products/" . $image_name;

            move_uploaded_file($source_path, $destination_path);
        } else {
            // Image not available, use the previous image name
            $image_name = $current_image;
        }
    } else {
        // If no image is uploaded, use the previous image name
        $image_name = $current_image;
    }

    $updateQuery = "UPDATE tbl_products  SET product_name = '$new_title', price = '$TicketPrice', descripition = '$new_description',  img = '$image_name',date = '$new_date', availability = '$availability',PO_ID = '$tiket_provider' WHERE id = $ticketId";

    if ($conn->query($updateQuery) === TRUE) {
        // Redirect to the news dashboard or display a success message
        header("Location: ../Products.php?id=".$ticketId);
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
</html>
