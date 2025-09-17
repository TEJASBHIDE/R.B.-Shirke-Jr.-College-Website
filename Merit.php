<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merit List</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/merit.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="main-wrapper">
        <div class="nav-background">
            <div class="mobile-nav">
                <div class="cart">
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="About-us.html">About us</a>
                        </li>
                        <li>
                            <a href="Admission.html">Admission</a>
                        </li>
                        <li>
                            <a href="ebooks.html">E-Books</a>
                        </li>
                        <li>
                            <a href="Merit.html">Merit List</a>
                        </li>
                        <li>
                            <a href="Gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="Faculty.html">Faculty</a>
                        </li>
                        <li>
                            <a href="Feedback.html">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="contact flex items-center">
                    <img src="./icons/phone.svg" alt="">
                    <div>
                        <h5>Call us: (+91) 70576 35016</h5>
                        <h6>E-mail : rbsjunior@gmail.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" />
                </svg>
            </div>
            <div class="site-content">
                <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="./icons/phone.svg" alt="">
                                <div>
                                    <h5>Call US: (+91)70576 35016</h5>
                                    <h6>E-mail : rbsjunior@gmail.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                                <h1 style="font-weight: 600;">S. M. B. Torgalkar Junior College, Ratnagiri </h1>
                            </div>
                            <div class="time flex items-center">
                                <img src="./icons/clock.svg" alt="">
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sat (8.00am - 12.00am)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="index.php">Home</a>
                            <a href="About-us.html">About us</a>
                            <a href="Admission.html">Admission</a>
                            <a href="ebooks.html">E-Books</a>
                            <a href="Merit.php" class="active">Merit List</a>
                            <a href="Gallery.php">Gallery</a>
                            <a href="Faculty.html">Faculty</a>
                            <a href="Feedback.html">Contact us</a>
                        </div>
                    </div>
                </nav>
                <!--=============== Breadcrumb Section Starts ===============-->
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li><img src="./icons/slash.svg"></li>
                        <li class="breadcrumb-item active" aria-current="page">Merit List</li>
                    </ol>
                </nav>
                <!--=============== Breadcrumb Section Ends ===============-->

                <h1 class="section-heading">Merit List</h1>

                <?php
                $conn = new mysqli('localhost', 'root', '', 'smbtjunior');
                if ($conn->connect_error) {
                    echo "Connection Failed: " . $conn->connect_error;
                    die();
                }

                $sql = "SELECT title, merit_pdf FROM merit";
                $result = $conn->query($sql);

                if ($result === false) {
                    // Handle query execution error
                    echo "Error executing query: " . $conn->error;
                    die();
                }

                if ($result->num_rows > 0) {
                    echo "<div class='merit'><table class='fl-table'><thead><tr><th>Title</th><th>PDF</th></tr></thead><tbody>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["title"] . "</td><td><a href='./DashBoard/merit/" . $row["merit_pdf"] . "' download style='text-decoration:none;'>
                        
                        <button class='Download-button'>
                                        <svg xmlns='http://www.w3.org/2000/svg' height='16' width='20'
                                            viewBox='0 0 640 512'>
                                            <path
                                                d='M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z'
                                                fill='white'></path>
                                        </svg>
                                        <span>Download</span>
                                    </button>
                                    </a>
                        </td></tr>";
                    }
                    echo "</tbody></table></div>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>

                <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum
                                passage.</p>
                            <a href="About-us.html"><button class="btn-f btn-foot">Read More</button></a>
                        </div>
                        <div class="box">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="About.html">About us</a>
                                </li>
                                <li>
                                    <a href="Gallery.php">Gallery</a>
                                </li>
                                <li>
                                    <a href="Feedback.html">Contact us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/RBShirkeHighSchoolRatnagiri">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/_itz_sahil_9_/">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            </footer>
            <footer class="copyright">
                <div>
                    Copyright © 2024 .All rights reserved by <a href="https://www.instagram.com/_itz_sahil_9_/">Sahil
                        Amberkar</a>.
                </div>
            </footer>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>