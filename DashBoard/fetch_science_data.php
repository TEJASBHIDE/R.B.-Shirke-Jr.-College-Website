<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'smbtjunior');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}

// Pagination variables
$records_per_page = 10;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

// SQL query with pagination
$sql = "SELECT firstName, middleName, lastName, dob, email, mobile, gender, religion, cast, category, aadhar, passingyear, board, marks, percent, add1, add2, area, district FROM 11thSci LIMIT $offset, $records_per_page";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="table-wrapper">';
    echo '<table class="fl-table">';
    echo '<thead>
            <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>Cast</th>
            <th>Category</th>
            <th>Aadhaar</th>
            <th>Passing Year</th>
            <th>Board</th>
            <th>Marks</th>
            <th>Percentage</th>
            <th>Address</th>
            <th>Area</th>
            <th>District</th>
            </tr>
        </thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        $fullName = $row["firstName"] . " " . $row["middleName"] . " " . $row["lastName"];
        $address = $row["add1"] . "," . $row["add2"];
        echo "<tr><td>" . $fullName . "</td><td>"
            . $row["dob"] . "</td><td>"
            . $row["email"] . "</td><td>"
            . $row["mobile"] . "</td><td>"
            . $row["gender"] . "</td><td>"
            . $row["religion"] . "</td><td>"
            . $row["cast"] . "</td><td>"
            . $row["category"] . "</td><td>"
            . $row["aadhar"] . "</td><td>"
            . $row["passingyear"] . "</td><td>"
            . $row["board"] . "</td><td>"
            . $row["marks"] . "</td><td>"
            . $row["percent"] . "</td><td>"
            . $address . "</td><td>"
            . $row["area"] . "</td><td>"
            . $row["district"] . "</td></tr>";
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';

    // Pagination
    $sql = "SELECT COUNT(*) AS total FROM 11thSci";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_pages = ceil($row["total"] / $records_per_page);

    echo '<div class="pagination">';
    if ($page > 1) {
        echo '<a href="#" onclick="fetchScienceData('.($page - 1).'); event.preventDefault();">Previous</a>';
    }
    for ($i = 1; $i <= $total_pages; $i++) {
        echo '<a href="#" onclick="fetchScienceData('.$i.'); event.preventDefault();">' . $i . '</a>';
    }
    if ($page < $total_pages) {
        echo '<a href="#" onclick="fetchScienceData('.($page + 1).'); event.preventDefault();">Next</a>';
    }
    echo '</div>';
} else {
    echo "0 result";
}

$conn->close();
?>
