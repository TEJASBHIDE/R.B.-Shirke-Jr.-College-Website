<?php
// Database connection
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "smbtjunior";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize user input to prevent SQL Injection
    $notice1 = $conn->real_escape_string($_POST["notice1"]);

    // Prepare and bind the statement
    $sql = "UPDATE notices SET notice1 = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $notice1);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Sorry, there was an error in your request.";
}

// Close connection
$conn->close();