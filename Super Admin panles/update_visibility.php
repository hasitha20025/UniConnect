<?php
// Your database connection code
include('/xampp/htdocs/UniConnect/config/constants.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newsId = $_POST['id'];
    $newViewValue = $_POST['view'];

    // Perform the database update
    $updateSql = "UPDATE tbl_news SET view = '$newViewValue'";

    // Execute the query
    if ($conn->query($updateSql) === TRUE) {
        echo 'Visibility updated successfully';
        echo 'Query: ' . $updateSql;
    } else {
        echo 'Error updating visibility: ' . $conn->error;
    }
} else {
    echo 'Invalid request';
}
?>
