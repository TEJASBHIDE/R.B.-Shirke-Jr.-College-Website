<?php
session_start();

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
    $email = $_POST['email'];
    $password = $_POST['pass'];


    // Query the database 
    $sql = "SELECT * FROM users WHERE email='$email' AND pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful
        $_SESSION['email'] = $email;
        // Redirect to dashboard or some other page
        header("Location: DashBoard.php");
        exit();
    } else {
        // Authentication failed
        ?>
        <script>
            alert("User Does Not Exist");
        </script>
        <?php
    }
}

$conn->close();
