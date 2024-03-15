<?php

include('/xampp/htdocs/UniConnect/config/constants.php');

if (isset($_GET['id'])) {
    $productId = mysqli_real_escape_string($conn, $_GET['id']);

    $deleteQuery = "DELETE FROM tbl_products WHERE id ='$productId'";

    if ($conn->query($deleteQuery)) {
        header("Location: ../Products/products.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request";
}
?>
