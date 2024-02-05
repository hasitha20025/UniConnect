<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('/xampp/htdocs/UniConnect/config/constants.php');

if (isset($_POST['id'])) {
    $productId = mysqli_real_escape_string($conn, $_POST['id']);

    $deleteQuery = "DELETE FROM tbl_products WHERE id =$productId";

    if ($conn->query($deleteQuery)) {
        // Redirect to product.php after deletion
        header("Location: product.php");
        exit();
    } else {
        // Redirect to product4.php on deletion error
        header("Location: product4.php");
        exit();
    }
} else {
    // Redirect to product2.php for an invalid request
    header("Location: product2.php");
    exit();
}
?>
