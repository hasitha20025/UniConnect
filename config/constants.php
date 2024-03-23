<?php

// Start session
session_start();

class Config {
    const LOCATION = 'http://localhost/UniConnect/'; // Adjust this based on your needs
    const SITEURL = self::LOCATION . ''; // Example usage
    const LOCALHOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'uniconnect';
}

// Database Connection
$conn = mysqli_connect(Config::LOCALHOST, Config::DB_USERNAME, Config::DB_PASSWORD);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the database
$db_select = mysqli_select_db($conn, Config::DB_NAME);

// Check if the database selection is successful
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($conn));
}

// Now you can continue with the rest of your code...


?>
