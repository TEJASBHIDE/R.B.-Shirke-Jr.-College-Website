<?php
// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'smbtjunior');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch images from the database
$sql = "SELECT id, image_url FROM gallery";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        /* fonts  */
        @font-face {
            font-family: "Raleway-regular";
            src: url(./fonts/Raleway-regular.ttf)
        }

        @font-face {
            font-family: "Raleway-medium";
            src: url(./fonts/Raleway-Medium.ttf)
        }

        @font-face {
            font-family: "Raleway-bold";
            src: url(./fonts/Raleway-Bold.ttf)
        }

        @font-face {
            font-family: "Raleway-extrabold";
            src: url(./fonts/Raleway-ExtraBold.ttf)
        }

        @font-face {
            font-family: "Raleway-semibold";
            src: url(./fonts/Raleway-SemiBold.ttf)
        }

        @font-face {
            font-family: "Raleway-black";
            src: url(./fonts/Raleway-Black.ttf)
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            font-family: "Raleway-regular";
        }

        .gallery-container {
            width: 80%;
            /* Adjust the width as needed */
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 300px;
            /* Adjust the width as needed */
            height: auto;
            /* Adjust the height as needed */
            object-fit: cover;
            /* Ensure the image covers the defined dimensions */
        }

        .action-col {
            width: 20%;
        }

        .action-col a {
            display: block;
            text-align: center;
        }

        .delete {
            font-family: "Arial";
            background-color: red;
            color: #fff;
            font-weight: 600;
            font-size: 0.875rem;
            line-height: 1.25rem;
            padding: 0.625rem 0.875rem;
            border-radius: 0.375rem;
            border: none;
            outline: none;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="gallery-container">
        <h2 style="text-align: center; font-family: Raleway-bold;">Image Gallery</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th class="action-col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td><img src='" . $row["image_url"] . "' alt='Image'></td>";
                        echo "<td><a href='javascript:void(0);' class='delete' data-id='" . $row["id"] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No images found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        // JavaScript to handle deletion
        document.querySelectorAll('.delete').forEach(item => {
            item.addEventListener('click', function () {
                let imageId = this.getAttribute('data-id');
                if (confirm("Are you sure you want to delete this image?")) {
                    // AJAX request to delete_image.php
                    let xhr = new XMLHttpRequest();
                    xhr.open('GET', 'delete_image.php?id=' + imageId, true);
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            // Remove the row from the table on successful deletion
                            let row = item.closest('tr');
                            row.parentNode.removeChild(row);
                        } else {
                            console.error('Error deleting image.');
                        }
                    };
                    xhr.send();
                }
            });
        });
    </script>
</body>

</html>