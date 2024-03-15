<?php
// Include your database connection
include('/xampp/htdocs/UniConnect/config/constants.php');
include('./config/constants.php');

if (isset($_POST['id'])) {
    $productId = mysqli_real_escape_string($conn, $_POST['id']);

    $deleteQuery = "DELETE FROM tbl_products WHERE id ='$productId'";

    if ($conn->query($deleteQuery)) {
        // Redirect to Products.php on success
        header("Location: ../Products.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request";
}
?>
