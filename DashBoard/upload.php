<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload</title>
    <style>
        /* Style for the custom alert box */

        .alert{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }


        .notifications-container {
            width: 320px;
            height: auto;
            font-size: 0.875rem;
            line-height: 1.25rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .flex {
            display: flex;
            align-items: center;
        }

        .flex-shrink-0 {
            flex-shrink: 0;
        }

        .success {
            padding: 1rem;
            border-radius: 0.375rem;
            background-color: rgb(240 253 244);
        }

        .succes-svg {
            color: rgb(74 222 128);
            width: 1.25rem;
            height: 1.25rem;
        }

        .success-prompt-wrap {
            margin-left: 0.75rem;
        }

        .success-prompt-heading {
            font-weight: bold;
            color: rgb(22 101 52);
        }


        .success-button-container {
            display: flex;
            margin-top: 0.875rem;
            margin-bottom: -0.375rem;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .success-button-main {
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            background-color: #ECFDF5;
            color: rgb(22 101 52);
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: bold;
            border-radius: 0.375rem;
            border: none;
        }

        .success-button-main:hover {
            background-color: #D1FAE5;
        }
    </style>
</head>

<body>
    <div class="alert">

   
    <div class="notifications-container" id="customAlert">
        <div class="success alertMessage">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="succes-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="success-prompt-wrap">
                    <p class="success-prompt-heading">Merit List Uploaded Successfully...!!</p>

                    <div class="success-button-container">
                        <button type="button" class="success-button-main" onclick="closeAlert()">Back to
                            Dashboard</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <?php
    // Initialize a flag to indicate if the upload was successful
    $upload_successful = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $title = $_POST["title"];

        // Check if a file was uploaded without errors
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $target_dir = "merit/"; // Change this to the desired directory for uploaded files
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if the file is allowed (you can modify this to allow specific file types)
            $allowed_types = array("pdf");
            if (!in_array($file_type, $allowed_types)) {
                echo "PDF files are allowed.";
            } else {
                // Move the uploaded file to the specified directory
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    // File upload success, now store information in the database
                    $filename = $_FILES["file"]["name"];

                    // Database connection
                    $db_host = "localhost";
                    $db_user = "root";
                    $db_pass = "";
                    $db_name = "smbtjunior";

                    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Insert the file information into the database
                    $sql = "INSERT INTO merit (title ,merit_pdf) VALUES ('$title','$filename')";

                    if ($conn->query($sql) === TRUE) {
                        // Set the flag to indicate successful upload
                        $upload_successful = true;
                    } else {
                        echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                    }

                    $conn->close();
                } else {
                    echo "Sorry, there was an error uploading your file. Debug: " . $_FILES["file"]["error"];
                }
            }
        } else {
            echo "No file was uploaded.";
        }
    }
    ?>

    <!-- Javascript -->
    <script>
        // Check if upload was successful and show alert if true
        <?php if ($upload_successful): ?>
            showAlert("File has been successfully uploaded and stored in the database!");
        <?php endif; ?>

        function showAlert(message) {
            var alertBox = document.getElementById("customAlert");
            var messageElement = document.getElementById("alertMessage");
            messageElement.innerHTML = message;
            alertBox.style.display = "block";
        }

        function closeAlert() {
            var alertBox = document.getElementById("customAlert");
            alertBox.style.display = "none";
            window.location.href = 'Dashboard.php';
        }
    </script>
</body>

</html>