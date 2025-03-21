<?php
// db_config.php - Central configuration file for database credentials

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection parameters
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'yourusername');
define('DB_PASSWORD', 'yourdbpassword'); // Change this to your actual MySQL password
define('DB_NAME', 'yourdbname');

// Create connection function
function get_db_connection() {
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
?>
