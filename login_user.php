<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection parameters
include "connection.php";

// Check if the user exists in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, redirect to the to-do list page
    header("Location: todo-list.php");
    exit;
} else {
    // Invalid credentials, display an error message
    echo "Invalid username or password";
}

// Close the database connection
$conn->close();
?>
