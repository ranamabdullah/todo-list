<?php
session_start();
// Database connection parameters
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "todo_list";

// Create database connection
$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>