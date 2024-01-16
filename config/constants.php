<?php

// Start session
session_start();

class Config {
    const LOCALHOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'uniconnect';

    // Dynamically determine SITEURL based on server configuration
    public static function getSiteUrl() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        
        // Get the script path relative to the document root
        $scriptPath = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'] . $_SERVER['SCRIPT_FILENAME']));
        $documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);

        // Calculate the subdirectory based on the difference between the script path and document root
        $subdirectory = str_replace($documentRoot, '', $scriptPath);
        $subdirectory = str_replace('/index.php', '', $subdirectory); // Adjust if needed

        return "$protocol://$host$subdirectory/";
    }
}

// Dynamically set SITEURL using define
define('SITEURL', Config::getSiteUrl());


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
