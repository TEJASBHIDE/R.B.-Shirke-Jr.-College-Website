<?php
if(isset($_GET['id'])) {
    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'smbtjunior');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve image URL from the database
    $image_id = $_GET['id'];
    $sql = "SELECT image_url FROM gallery WHERE id = $image_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $image_url = $row["image_url"];

        // Delete the image file from the folder
        if(file_exists($image_url)) {
            unlink($image_url); // Delete the file
        }

        // Delete the image record from the database
        $sql_delete = "DELETE FROM gallery WHERE id = $image_id";
        if ($conn->query($sql_delete) === TRUE) {
            echo "Image deleted successfully.";
        } else {
            echo "Error deleting image: " . $conn->error;
        }
    } else {
        echo "Image not found.";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Image ID not provided.";
}
?>
