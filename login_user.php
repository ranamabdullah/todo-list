<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

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
