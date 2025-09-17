<?php
session_start();

// Assuming you have a MySQL database set up with a 'users' table

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smbtjunior";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $user = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['pass']);

    // Check if email already exists
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $check_result = $conn->query($check_query);
    
    if ($check_result->num_rows > 0) {
        echo "Email already exists!";
    } else {
        // Insert new user into the database
        $insert_query = "INSERT INTO users (names,email, pass) VALUES ('$user','$email', '$password')";
        if ($conn->query($insert_query) === TRUE) {
            header("Location: DashBoard.php");
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

$conn->close();
