<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S. M. B. Torgalkar Junior College</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body onload="loader()">
    <div id="preloader">
        <div class="loader">
            <div>
                <ul>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                </ul>
            </div><span>Loading</span>
        </div>

    </div>
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
                            <a href="Merit.php">Merit List</a>
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
                        <h6>E-mail : smbtjunior@gmail.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (7.00am - 12.00am)</h6>
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
                                    <h6>E-mail : smbtjunior@gmail.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                                <h1 style="font-weight: 600;">S. M. B. Torgalkar Junior College, Ratnagiri </h1>
                            </div>
                            <div class="time flex items-center">
                                <img src="./icons/clock.svg" alt="">
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sat (7.00am - 12.00am)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="index.php" class="active">Home</a>
                            <a href="About-us.html">About us</a>
                            <a href="Admission.html">Admission</a>
                            <a href="ebooks.html">E-Books</a>
                            <a href="Merit.php">Merit List</a>
                            <a href="Gallery.php">Gallery</a>
                            <a href="Faculty.html">Faculty</a>
                            <a href="Feedback.html">Contact us</a>
                        </div>
                    </div>
                </nav>
                <div class="news-ticker">
                    <div class="news-ticker-header">
                        <p>Announcement</p>
                    </div>
                    <div class="news-ticker-content">
                        <ul>
                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'smbtjunior');
                            if ($conn->connect_error) {
                                echo "Connection Failed: " . $conn->connect_error;
                                die();
                            }
                            $sql = "SELECT notice1 FROM notices";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<li><a href='#'>" . $row["notice1"] . "</a></li>";
                                }
                            } else {
                                echo "<li>No news items available</li>";
                            }

                            $conn->close();
                            ?>
                        </ul>
                    </div>
                </div>
                <!--=============== Hero Section Starts ===============-->
                <header class="hero flex items-center">
                    <div class="container">
                        <p style="margin: 0;font-size: 25px;">R. E. Society's</p>
                        <h1>S. M. B. Torgalkar Junior College</h1>
                        <p>"Join us as we embark on a journey of knowledge, discovery, and endless possibilities."</p>
                        <div>
                            <a href="About-us.html"><button class="btn btn-primary">Read More</button></a>
                        </div>
                    </div>
                </header>
                <!--=============== Hero Section Ends ===============-->
                <section class="about-college">
                    <div class="container">
                        <h1 class="section-heading">About College</h1>
                        <div class="about-college-wrap flex">
                            <div class="flex-1 fade-side-left">
                                <img src="./images/hero-img.png" alt="">
                            </div>
                            <div class="flex-1 fade-side-right">
                                <h2>"Harnessing Knowledge, Empowering Futures: Your Path to Academic Excellence Begins
                                    Here!"</h2>
                                <p>In the year 2016-17, considering the increasing number of post-10th students in
                                    Ratnagiri district, Ratnagiri Education Society on 14th July 2016 Bh. Shirke Junior
                                    College started. This college was inaugurated by the then working president Adv.
                                    Patne Sir as well as Adv. Vijay Sakhalkar Sir, Acting Mrs. Prachi Joshi, Governing
                                    Body Member Shri. It was done by Manoj Patankar Sir.</p>

                                <a href="About-us.html" style="text-decoration:none;" <button class="btn btn-about">Read More</button></a>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="latest-news">
                    <div class="container">
                        <h1 class="section-heading">Latest Notice</h1>
                        <div class="main-table">
                            <table class="size">
                                <thead>
                                    <th class="notice-head" colspan="2">Notice Board</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">
                                            <a href="https://www.shiksha.com/news/boards-maharashtra-12th-hsc-board-exam-2024-begins-check-important-exam-day-guidelines-time-table-blogId-156141"
                                                style="text-decoration: none; color: black;">
                                                <h3>Lastest News about the HSC Boards Examination</h3>
                                            </a>
                                        </td>
                                        <td class="center"><small>Published on 27th February 2024</small></td>
                                    </tr>
                                    <tr>
                                        <td class="center">
                                            <h3>Notice number 2</h3>
                                        </td>
                                        <td class="center"><small>Published on 12th April 2024</small></td>
                                    </tr>
                                    <tr>
                                        <td class="center">
                                            <h3>Notice number 3</h3>
                                        </td>
                                        <td class="center"><small>Published on 12th April 2024</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </section>


                <div class="contentAreaWrap">
                    <div class="Speech">
                        <div class="mwPageArea">
                            <div id="wK8XUAP360G356EL" class="mwPageBlock fade">
                                <div class="blockContents  pad-top-m pad-bottom-m">
                                    <article class=" Shirke" tabindex="0">
                                        <img class=" ShirkeQuote ShirkeQuoteOpen" src="./icons/quote-open-yellowOL.svg"
                                            alt="">
                                        <img class=" ShirkeQuote ShirkeQuoteClose" src="./icons/quote-close-pink.svg"
                                            alt="">
                                        <div class=" ShirkeWrap">
                                            <div class=" ShirkeImage">
                                                <img src="./images/Gallery/10.jpg" class="fade-side-left" alt="">
                                            </div>
                                            <div class=" ShirkeContent">
                                                <div class=" ShirkeContentWrap">
                                                    <div class=" ShirkeName">
                                                        - <span class=" ShirkeNameText">Sahil</span>
                                                    </div>
                                                    <div class=" ShirkeDescription">
                                                        At S. M. B. Torgalkar Junior College, I’ve been able to develop
                                                        my communication skills and learned how to
                                                        work well independently and on a team. With the support of my
                                                        professors, I’ve
                                                        been able to gain valuable career experience on and off campus.
                                                        Ultimately, I’m
                                                        becoming a stronger leader.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="we-provide">
                    <div class="container">
                        <h1 class="section-heading">Our Facilities</h1>
                        <div class="card-wrapper flex">
                            <div class="fade-side-left">
                                <div class="service-card">
                                    <img class="icon" src="./icons/monitor.svg" alt="">
                                    <h2>Proper Labs</h2>
                                    <p>Our laboratories are equipped with the latest technology for optimal outcomes in
                                        practicals.</p>
                                    </p>
                                    <a href="About-us.html"><button class="btn btn-primary">Read More</button></a>
                                </div>
                            </div>
                            <div class="fade">
                                <div class="service-card">
                                    <img class="icon" src="./icons/education.svg" alt="">
                                    <h2>Quality Education</h2>
                                    <p>Well Trained Teaching staff that provide Quality Education and Help in Problem
                                        solving doubt</p>
                                    <a href="About-us.html"><button class="btn btn-primary">Read More</button></a>
                                </div>
                            </div>
                            <div class="fade-side-right">
                                <div class="service-card">
                                    <img class="icon" src="./icons/Clean.svg" alt="">
                                    <h2>Clean Campus</h2>
                                    <p>Our Campus is well maintained and and 100% under security camera surveillance
                                    </p>
                                    <a href="About-us.html#campus"><button class="btn btn-primary">Read
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="top-rankers">
                    <div class="container fade-side-left">
                        <div class="left-title fade">
                            <h1 class="section-heading" style="margin-top: -10px;">Top Rankers of Science Faculty</h1>
                        </div>
                        <div class="right-title">
                            <table>
                                <tr>
                                    <th>Batch</th>
                                    <th>Name</th>
                                    <th colspan="3">Marks</th>

                                </tr>
                                <tr>
                                    <td>2018</td>
                                    <td>Miss. Anvekar Nikita Gurudas </td>
                                    <td>First Class</td>
                                    <td>361/650</td>
                                    <td>60.15%</td>
                                </tr>
                                <tr>
                                    <td>2019</td>
                                    <td>Mr. Jig Siddharth Rajiv</td>
                                    <td>First Class</td>
                                    <td>410/650</td>
                                    <td>63.08%</td>
                                </tr>
                                <tr>
                                    <td>2020</td>
                                    <td>Mr. Gore Tushar Pandhurang</td>
                                    <td>First Class</td>
                                    <td>460/650</td>
                                    <td>70.77%</td>
                                </tr>
                                <tr>
                                    <td>2021</td>
                                    <td>Miss. Sawant Nilam Sachin</td>
                                    <td>First Class</td>
                                    <td>482/600</td>
                                    <td>80.33%</td>
                                </tr>
                                <tr>
                                    <td>2022</td>
                                    <td>Miss. Qazi Hina Salim</td>
                                    <td>First Class</td>
                                    <td>402/600</td>
                                    <td>67.00%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- </section>

                <section class="top-rankers"> -->
                    <div class="container fade-side-right">
                        <div class="left-title">
                            <h1 class="section-heading" style="margin-top: -10px;">Top Rankers of Commerce Faculty</h1>
                        </div>
                        <div class="right-title">
                            <table>
                                <tr>
                                    <th>Batch</th>
                                    <th>Name</th>
                                    <th colspan="3">Marks</th>

                                </tr>
                                <tr>
                                    <td>2018</td>
                                    <td>Miss. Agarwal Ruchita Gopal</td>
                                    <td>First Class</td>
                                    <td>562/650</td>
                                    <td>86.46%</td>
                                </tr>
                                <tr>
                                    <td>2019</td>
                                    <td>Miss. Sawant Siddhi Milind</td>
                                    <td>First Class</td>
                                    <td>479/650</td>
                                    <td>73.69%</td>
                                </tr>
                                <tr>
                                    <td>2020</td>
                                    <td>Miss. Badkas Manasi Vilas</td>
                                    <td>First Class</td>
                                    <td>549/650</td>
                                    <td>76.50%</td>
                                </tr>
                                <tr>
                                    <td>2021</td>
                                    <td>Miss. Narkar Gauri Shantaram</td>
                                    <td>First Class</td>
                                    <td>459/600</td>
                                    <td>76.83%</td>
                                </tr>
                                <tr>
                                    <td>2022</td>
                                    <td>Mr. Mahadik Praful Sandip</td>
                                    <td>First Class</td>
                                    <td>443/600</td>
                                    <td>73.83%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="cta" class="cta">
                    <div class="container">
                        <div class="row">
                            <div class="AdTitle">
                                <h3>प्रवेश प्रक्रिया / Admission</h3>
                                <p>To Apply for admission click here
                                </p>
                            </div>
                            <div class="cta-btn-container">
                                <a class="cta-btn" href="Admission.html">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="scaling"></div>
                <section class="contact-us flex">
                    <div class="contact-info-wrapper">
                        <h1 class="section-heading text-pure">Contact us</h1>
                        <div class="contact-info">
                            <div>
                                <div>
                                    <img src="./icons/phone-2.svg" alt="">
                                    <div>
                                        <span>Call us:</span>
                                        <span>(+91) 70576 35016</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/bag-2.svg" alt="">
                                    <div>
                                        <span>E-mail :</span>
                                        <span>smbt
junior@gmail.com</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/clock-2.svg" alt="">
                                    <div>
                                        <span>Working Hours:</span>
                                        <span>Mon - Sat (7.00am - 12.00pm)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3815.64301929449!2d73.30458170752156!3d16.992100942740574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bea0d001dc842a5%3A0x7bac9c1747ee87fb!2sR.B%20Shirke%20Junior%20College%2C%20Ratnagiri!5e0!3m2!1sen!2sin!4v1705396114596!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>

                <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum
                                passage.</p>
                            <button class="btn btn-foot">Read More</button>
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
                        Amberkar</a> <a href="https://www.instagram.com/its_t_e_j_a_s/">Tejas
                        Bhide</a>.
                </div>
            </footer>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/app.js"></script>
    <script>
        var preloader = document.getElementById('preloader');

        function loader() {
            preloader.style.display = 'none';
        }
    </script>
</body>

</html>

