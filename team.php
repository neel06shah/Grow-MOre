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
    
                <h1 class="logo mr-auto notranslate"><a href="home.php">Grow<span>More</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->
    
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li class="active"><a href="team.php">Team</a></li>
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
                            <li><a href="mycart.php">My Cart</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                </li>
                    </ul>
                </nav>
                <!-- .nav-menu -->
    
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero1" class="d-flex align-items-center">
            <div class=" container " data-aos="zoom-out " data-aos-delay="100 ">
                <h1>Find more <span>About our team</spa></h1>
                <h2 style="color: #555555; margin: 5px 0 30px 0; font-size: 24px; font-weight: 400;">We are a team of enthusiastic and experienced individuals from related and diverse backgrounds. Our team comprises of individuals having multi-years of experience in Information Technology. We have a knack to provide extremely valuable and quality services to our customers.</h2>
        </div>
      </section>
      <!-- End Hero -->
    
    <main id="main">
        <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>
           </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets\img\team\jay.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Jay Shah</h4>
                            <!-- <span>Chief Executive Officer</span> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets\img\team\radha.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Radha Sawant</h4>
                            <!-- <span>Product Manager</span> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets\img\team\neel.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Neel Shah</h4>
                            <!-- <span>Chief Technical Officer</span> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Section -->
    </main>    

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
                        <h3 class="notranslate">GrowMore<span>.</span></h3>
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
                        </div><br><br>
                        <div id="google_translate_element"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                            }
                            </script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    </body>
</html>