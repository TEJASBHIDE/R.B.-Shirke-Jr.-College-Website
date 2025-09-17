<?php
// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smbtjunior";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // File upload handling
    $targetDir = "uploads/";
    $uploadedImages = array();

    // Iterate through each uploaded file
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $targetFile = $targetDir . basename($_FILES["images"]["name"][$key]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["images"]["tmp_name"][$key]);
        if($check !== false) {
            // Upload file
            if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFile)) {
                // Insert uploaded image into database
                $image_url = mysqli_real_escape_string($conn, $targetFile);
                $sql = "INSERT INTO gallery (image_url) VALUES ('$image_url')";
                if ($conn->query($sql) === TRUE) {
                    $uploadedImages[] = $targetFile;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    }

    // Close database connection
    $conn->close();
    // Display alert and redirect
    echo '<script>';
    echo 'alert("Images uploaded successfully.");';
    echo 'window.location.href = "DashBoard/DashBoard.php";'; // Change "another_page.php" to your desired redirect page
    echo '</script>';
}
?>
