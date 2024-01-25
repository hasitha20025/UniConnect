<?php
// Include your database connection
 include('/xampp/htdocs/UniConnect/config/constants.php');

if (isset($_POST['id'])) {
    $newsId = mysqli_real_escape_string($conn, $_POST['id']);

    $deleteQuery = "DELETE FROM tbl_event WHERE id = '$newsId'";

    if ($conn->query($deleteQuery)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request";
}
?>
