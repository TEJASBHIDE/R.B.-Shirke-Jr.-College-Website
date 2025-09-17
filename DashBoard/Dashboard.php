    <?php
    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'smbtjunior');
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="./css/dashboard.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="./css/search.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="./css/notice.css?v=<?php echo time(); ?>">

        <!----===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Admin Dashboard Panel</title>
    </head>

    <body>
        <nav>
            <div class="logo-name">
                <div class="logo-image">
                    <img src="../images/hero-img.png" alt="">
                </div>
            </div>

            <div class="menu-items">
                <ul class="nav-links">
                    <li><a href="#">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Dashboard</span>
                        </a></li>
                    <li>
                        <a href="#Science">
                            <i class="uil uil-flask"></i>
                            <span class="link-name">Science Registeration</span>
                        </a>
                    </li>
                    <li>
                        <a href="#Commerce">
                            <i class="uil uil-book-open"></i>
                            <span class="link-name">Commerce Registeration</span>
                        </a>
                    </li>
                    <li>
                        <a href="#announce">
                            <i class='uil uil-megaphone'></i>
                            <span class="link-name">Announcement</span>
                        </a>
                    </li>
                    <li>
                        <a href="#merit">
                            <i class='bx bxs-file-pdf'></i>
                            <span class="link-name">Merit List</span>
                        </a>
                    </li>
                    <li>
                        <a href="#gallery">
                            <i class='bx bxs-image'></i>
                            <span class="link-name">Gallery</span>
                        </a>
                    </li>
                </ul>

                <ul class="logout-mode">
                    <li><a href="index.html">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a></li>
                    <li><a href="signUp.html">
                            <i class='bx bxs-user'></i>
                            <span class="link-name">Add Users</span>
                        </a></li>
                </ul>
            </div>
        </nav>

        <section class="dashboard">
            <div class="top">
                <i class="uil uil-bars sidebar-toggle"></i>
                <div class="CollegeName">
                    <h3 style="font-family: Raleway-bold;">Shrimaan Mangesh Bapuji Togalkar Junior College Admin Dashboard
                    </h3>
                </div>
            </div>



            <div class="dash-content">
                <div class="overview">
                    <div class="title">
                        <i class="uil uil-dashboard"></i>
                        <span class="text">Dashboard</span>
                    </div>


                    <div class="boxes">
                        <div class="box box1">
                            <i class="uil uil-flask"></i>
                            <span class="text">Total Registeration in Science</span>

                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'smbtjunior');
                            if ($conn->connect_error) {
                                echo "$conn->connect_error";
                                die("Connection Failed : " . $conn->connect_error);
                            }

                            $query = "SELECT id FROM 11thsci ORDER BY id ";
                            $query_run = $conn->query($query);

                            $row = mysqli_num_rows($query_run);

                            echo '<span class = "number">' . $row . '</span>';
                            ?>
                        </div>
                        <div class="box box2">
                            <i class="uil uil-book-open"></i>
                            <span class="text">Total Registeration in Commerce</span>
                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'smbtjunior');
                            if ($conn->connect_error) {
                                echo "$conn->connect_error";
                                die("Connection Failed : " . $conn->connect_error);
                            }

                            $query = "SELECT id FROM 11thcom ORDER BY id ";
                            $query_run = $conn->query($query);

                            $row = mysqli_num_rows($query_run);

                            echo '<span class = "number">' . $row . '</span>';
                            ?>
                            <!-- <span class="number"></span> -->
                        </div>
                    </div>
                </div>

                <!-- Search Box -->
                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input type="text" id="searchInput" placeholder="Search here...">
                </div>
                <!-- Search box ends -->

                <!-- Science Students Table Starts -->
                <div class="Data" id="Science">
                    <div class="title">
                        <i class="uil uil-graduation-cap"></i>
                        <span class="text">Student Registeration ( Science )</span>
                        <form method="post" action="excel_convert/11Sciexcel.php">
                            <div class="export-button">
                                <input type="submit" name="export" value="Export to Excel">
                            </div>
                        </form>
                    </div>
                    <div id="scienceDataContainer">
                        <!-- The table and pagination links will be updated here -->
                    </div>
                </div>


                <!-- Science Students Table Ends -->

                <!-- Commerce Students Table Starts -->
                <div class="Data" id="Commerce">
                    <div class="title">
                        <i class="uil uil-graduation-cap"></i>
                        <span class="text">Student Registeration ( Commerce )</span>
                        <form method="post" action="excel_convert/11Comexcel.php">
                            <div class="export-button">
                                <input type="submit" name="export" value="Export to Excel">
                            </div>
                        </form>
                    </div>
                    <div id="commerceDataContainer">
                        <!-- The commerce student table and pagination links will be updated here -->
                    </div>
                </div>
                <!-- Commerce Students Table Ends -->

                <!-- Science Students Contacts -->
                <div class="Data" id="SContactsSci">
                    <div class="title">
                        <i class="uil uil-graduation-cap"></i>
                        <span class="text">Student Contacts ( Science )</span>
                        <form method="post" action="excel_convert/11sci.php">
                            <div class="export-button">
                                <input type="submit" name="export" value="Export to Excel">
                            </div>
                        </form>
                    </div>
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
                    $sql = "SELECT firstName, middleName, lastName, mobile, email, add1, add2, area, district FROM 11thSci LIMIT $offset, $records_per_page";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="table-wrapper">';
                        echo '<table class="fl-table">';
                        echo '<thead>
                                <tr>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email Id</th>
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
                                . $row["mobile"] . "</td><td>"
                                . $row["email"] . "</td><td>"
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
                            echo '<a href="?page=' . ($page - 1) . '">Previous</a>';
                        }
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<a href="?page=' . $i . '">' . $i . '</a>';
                        }
                        if ($page < $total_pages) {
                            echo '<a href="?page=' . ($page + 1) . '">Next</a>';
                        }
                        echo '</div>';
                    } else {
                        echo "0 result";
                    }

                    $conn->close();
                    ?>

                </div>
                <!-- Science Students Contacts Ends -->

                <!-- Commerce Students Contacts -->
                <div class="Data" id="SContactsCom">
                    <div class="title">
                        <i class="uil uil-graduation-cap"></i>
                        <span class="text">Student Contacts ( Commerce )</span>
                        <form method="post" action="excel_convert/11com.php">
                            <div class="export-button">
                                <input type="submit" name="export" value="Export to Excel">
                            </div>
                        </form>
                    </div>

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
                    $sql = "SELECT firstName, middleName, lastName, mobile, email, add1, add2, area, district FROM 11thCom LIMIT $offset, $records_per_page";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="table-wrapper">';
                        echo '<table class="fl-table">';
                        echo '<thead>
                                <tr>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email Id</th>
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
                                . $row["mobile"] . "</td><td>"
                                . $row["email"] . "</td><td>"
                                . $address . "</td><td>"
                                . $row["area"] . "</td><td>"
                                . $row["district"] . "</td></tr>";
                        }
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';

                        // Pagination
                        $sql = "SELECT COUNT(*) AS total FROM 11thCom";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total_pages = ceil($row["total"] / $records_per_page);

                        echo '<div class="pagination">';
                        if ($page > 1) {
                            echo '<a href="?page=' . ($page - 1) . '">Previous</a>';
                        }
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<a href="?page=' . $i . '">' . $i . '</a>';
                        }
                        if ($page < $total_pages) {
                            echo '<a href="?page=' . ($page + 1) . '">Next</a>';
                        }
                        echo '</div>';
                    } else {
                        echo "0 result";
                    }

                    $conn->close();
                    ?>
                </div>
                <!-- Commerce Students Contacts Ends -->

                <!-- FeedBack Table -->
                <div class="Data" id="Feedback">
                    <div class="title">
                        <i class="uil uil-feedback"></i>
                        <span class="text">Feedback</span>
                    </div>
                    <div id="announce"></div>
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
                    $sql = "SELECT uname, phone, email, messages FROM feedback LIMIT $offset, $records_per_page";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="table-wrapper">';
                        echo '<table class="fl-table">';
                        echo '<thead>
                                <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Message</th>
                                </tr>
                            </thead>';
                        echo '<tbody>';

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["uname"] . "</td><td>"
                                . $row["phone"] . "</td><td>"
                                . $row["email"] . "</td><td>"
                                . $row["messages"] . "</td></tr>";
                        }
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';

                        // Pagination
                        $sql = "SELECT COUNT(*) AS total FROM feedback";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total_pages = ceil($row["total"] / $records_per_page);

                        echo '<div class="pagination">';
                        if ($page > 1) {
                            echo '<a href="?page=' . ($page - 1) . '">Previous</a>';
                        }
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<a href="?page=' . $i . '">' . $i . '</a>';
                        }
                        if ($page < $total_pages) {
                            echo '<a href="?page=' . ($page + 1) . '">Next</a>';
                        }
                        echo '</div>';
                    } else {
                        echo "0 result";
                    }

                    $conn->close();
                    ?>
                    <!-- Merit List Ends -->
                </div>
                
                <!-- Merit List  -->
                
                <div class="overview" style="background-color: #d6d6d61f;padding: 20px;box-shadow:inset 0px 0px 13px 0px rgba( 0, 0, 0, 0.1 );margin-bottom: 20px;">
                    <div class="title" style="margin-top: 5px;">
                        <i class='uil uil-megaphone'></i>
                        <span class="text">Announcement Updater</span>
                    </div>
                    <div>
                        <div class="box box1">
                            <div class="dform">
                                <form class="form" method="post" action="notice1.php" enctype="multipart/form-data">
                                    <span class="formt">Update the notice :</span>
                                    <div>
                                        <input placeholder="Enter your Notice" type="input" name="notice1"
                                            style="border:1px solid black" required>
                                        <button type="submit">Upload </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Merit List Ends -->
            
                <!-- Merit List  -->
                <div id="merit"></div>
                <div class="overview" style="background-color: #d6d6d61f;padding: 20px;box-shadow:inset 0px 0px 13px 0px rgba( 0, 0, 0, 0.1 );margin-bottom: 20px;">
                    <div class="title" style="margin-top: 5px;">
                        <i class='bx bxs-file-pdf'></i>
                        <span class="text">Merit List Upload</span>
                    </div>
                    <div>
                        <div class="box box1">
                            <div class="dform">
                                <form class="form" method="post" action="upload.php" enctype="multipart/form-data">
                                    <span class="formt">Upload the Merit List Pdf :</span>
                                    <div>
                                        <input type="text" placeholder="Enter the title" name="title"
                                            style="border: 1px solid black; margin-bottom:5px;">
                                        <input placeholder="Enter your Notice" type="file" name="file"
                                            style="border: 1px solid black;">
                                        <button type="submit">Upload </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="gallery"></div>
                <div class="overview" style="background-color: #d6d6d61f;padding: 20px;box-shadow:inset 0px 0px 13px 0px rgba( 0, 0, 0, 0.1 );margin-bottom: 20px;">
                    <div class="title" style="margin-top: 5px;">
                        <i class='bx bxs-image'></i>
                        <span class="text">Gallery Upload</span>
                    </div>
                    <div>
                        <div class="box box1">
                            <div class="dform">
                                <form class="form" method="post" action="../upload_image.php" enctype="multipart/form-data">
                                    <span class="formt">Upload Gallery Images:</span>
                                    <div>
                                        <!-- Limit file types and sizes -->
                                        <input type="file" name="images[]" accept="image/*" multiple
                                            style="border : 1px solid black">
                                        <button type="submit" name="submit">Upload</button>
                                        <a href="../delete.php" class="delete-button">Delete</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </section>

        <script src="./js/dashboard.js"></script>
        <script src="./js/search.js"></script>
        <script src="./js/pagination.js"></script>
    
    </body>
    </html>