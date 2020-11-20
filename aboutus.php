<?php
if(isset($_COOKIE['username'])):{
	$name=$_COOKIE['username'];
    include('config\dbconn.php');
	$data=($dbconn)?(mysqli_query($dbconn,"Select firstname from users where email='$name'")):"";
    $data1=($dbconn)?(mysqli_query($dbconn,"Select lastname from users where email='$name'")):"";
    $firstname=mysqli_fetch_assoc($data)['firstname'];
    $lastname=mysqli_fetch_assoc($data1)['lastname'];
}
else:{
	echo "<script>location.href='user_signup.php'</script>";
}
endif
?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Grow More - E-commerce website for plants and related materials</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body>

        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
            <div class="container d-flex">
                <div class="contact-info mr-auto">
                    <i class="icofont-envelope"></i>
                    <a href="mailto:growmore@growmore.org">growmore@growmore.org</a>
                    <i class="icofont-phone"></i> +91 1234567890
                </div>
                <div class="social-links">
                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                    <a href="#" class="skype"><i class="icofont-skype"></i></a>
                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <h1 class="logo mr-auto"><a href="home.php">Grow<span>More</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li class="active"><a href="aboutus.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li class="drop-down"><a href="#">Categories</a>
                            <ul>
                                <li><a href="seeds.php">Seeds</a></li>
                                <li><a href="pottedPlants.php">Potted plants</a></li>
                                <li><a href="pesticide.php">Pesticides</a></li>
                                <li><a href="fertilizer.php">Fertilizers</a></li>
                                <li class="drop-down"><a href="irrigation.php">Irrigation</a>
                                <ul>
                                    <li><a href="irrigation.php">Drips</a></li>
                                    <li><a href="irrigation.php">Fitting and accessories</a></li>
                                    <li><a href="irrigation.php">Pipes and tubes</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">
                    <?php
                        echo $firstname.' '.$lastname; 
                    ?>
                    </a>
                    <ul>
                            <li><a href="myaccount.php">My Account</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                </li>
                    </ul>
                </nav>
                <!-- .nav-menu -->

            </div>
        </header>
        <!-- End Header -->

        <section id="hero1" class="d-flex align-items-center">
            <div class=" container " data-aos="zoom-out " data-aos-delay="100 ">
                <h1>Find more <span>About us</spa></h1>
    </div>
  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
    <section id="about " class="about section-bg " style="background:white;">
        <div class="container " data-aos="fade-up ">

        <div class="row ">
            <div class="col-lg-6 " data-aos="zoom-out " data-aos-delay="100 ">
                <img src="assets/img/blog11_1024x1024.jpg " class="img-fluid " alt=" ">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center " data-aos="fade-up " data-aos-delay="100 ">
                <h1 style="font-family: Arial, Helvetica;">Who are we</h1> <br>
                <p class="font-weight-normal">
                    India’s largest Agri Inputs Marketplace Platform providing Agricultural Machinery, Agriculture Equipment, Agricultural Products, Poultry Equipment, Chemical Pesticides, Organic Insecticides, etc. Our clientele includes Farmers, Nurseries, FPOs, NGOs and other Institutional Growers. We also have a huge variety of potted plants for home decoration.
                </p>
            </div>
        </div>
        <div class="row " style="padding-top: 85px;">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center " data-aos="fade-up " data-aos-delay="100 ">
                <h1 style="font-family: Arial, Helvetica;">Choice For All</h1> <br>
                <p class="font-weight-normal">
                    Our audience (AKA you) is wonderfully unique. And we do everything we can to help you find your fit, offering our Plants from more than 30 different species – and we're committed to providing all plants at lowest size possible – so you can get the perfect
                    thing for you.
                </p>
            </div>

            <div class="col-lg-6 " data-aos="zoom-out " data-aos-delay="100 ">
                <img src="assets/img/dan-meyers-IQVFVH0ajag-unsplash.jpg " class="img-fluid " alt=" ">
            </div>
        </div>

        </div>
    </section>
    
    <!-- ======= Footer ======= -->
    <footer id="footer">

    <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Get monthly details about new Offers, Schemes and Products prior to everyone. Join the committee now.</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Enter your email here">
                            <input type="submit" name="submit" value="Subscribe">
                            
                            <?php
                            include('config\dbconn.php');
                            if(isset($_POST['submit']))
                                {   
                                    $email=$_POST['email'];
                                    if(empty($email)) {
                                        echo "<font color='red'>Email is empty!</font><br/>";
                                    }
                                    else {
                                        $query = "INSERT INTO newsletter_email (email) VALUES ('$email')";
                                        $result = mysqli_query($dbconn,$query);
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>GrowMore<span>.</span></h3>
                        <p>
                            Unit 1, Rajdeep Complex, <br> Mumbai - 400 001 <br> Maharashtra, India<br><br>
                            <strong>Phone:</strong> +91 1234567890<br>
                            <strong>Email:</strong> growmore@growmore.org<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="home.php">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="aboutus.php">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="team.php">Teams</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Categories</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="seeds.php">Seeds</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="pottedPlants.php">Potted Plants</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="pesticide.php">Pesticides</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="fertilizer.php">Fertilizers</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="irrigation.php">Irrigation</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Follow for more updates!!</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

            <div id="preloader "></div>
            <a href="# " class="back-to-top "><i class="icofont-simple-up "></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/jquery/jquery.min.js "></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
            <script src="assets/vendor/jquery.easing/jquery.easing.min.js "></script>
            <script src="assets/vendor/php-email-form/validate.js "></script>
            <script src="assets/vendor/waypoints/jquery.waypoints.min.js "></script>
            <script src="assets/vendor/counterup/counterup.min.js "></script>
            <script src="assets/vendor/owl.carousel/owl.carousel.min.js "></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
            <script src="assets/vendor/venobox/venobox.min.js "></script>
            <script src="assets/vendor/aos/aos.js "></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js "></script>
    </body>

    </html>