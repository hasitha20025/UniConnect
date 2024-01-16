<?php

class Config {
    const SITEURL = 'http://localhost/pharmacy-system/';
    const LOCALHOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'pharmacy_system';
}

// Start session
session_start();

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

// Rest of your code...

?>
