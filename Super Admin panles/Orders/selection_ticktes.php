<?php
include('/xampp/htdocs/UniConnect/config/constants.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selection Ticket</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   
        <div class="container ">
          <h5 class="mt-4">Ticket</h5>
            <div class="row  row-cols-4 mt-3">

            <?php
// Assume you have a database connection established

// Step 1: Display Available Tickets
$ticketQuery = "SELECT * FROM  tbl_ticket";
$ticketResult = mysqli_query($conn, $ticketQuery);

// Step 2: Display Ticket Cards
while ($ticket = mysqli_fetch_assoc($ticketResult)) {
    echo '<div class="col-3">';
    echo '<div class="card shadow p-2 mb-1 bg-body-tertiary rounded">';
    echo '<img src="' . Config::SITEURL . 'images/Ticket/' . $ticket['img'] . '" width="" height="250" class="card-img-top" alt="...">';

    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $ticket['title'] . '</h5>';
    echo '<h6 class="card-title active">Price ' . $ticket['price'] . '</h6>';
    echo '</div>';
    echo '<div class="text-center">';
    echo '<form method="post" action="tickets_orders.php">';
    echo '<input type="hidden" name="ticket_id" value="' . $ticket['id'] . '">';
    echo '<button type="submit" class="btn btn-primary px-3" name="check_orders">Check Orders</button>';
    echo '</form>';
    echo '</div>';
    echo '<div class="text-end px-3">';
    echo '<small class="">' . $ticket['date'] . '</small>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Show Orders Logic in show_orders.php
if (isset($_POST['check_orders'])) {
    $selectedTicketId = $_POST['ticket_id'];
    // Add logic to fetch and display orders related to the selected ticket
    // You can redirect to a new page or use AJAX to fetch and display orders
    // Adjust the code based on your specific requirements and table structure
}
?>




            </div>  

        </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>








