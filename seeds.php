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

            <!-- <h1 class="logo mr-auto"><a href="index.php">Grow<span>More</span></a></h1> -->
            <h1 class="logo mr-auto notranslate"><a href="home.php">Grow<span>More</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About</a></li>
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

        <main>
            <section class="card-container">
                <div class="card-row">

                <?php
                    include('config\dbconn.php');
                    $query = "SELECT * FROM products";
                    $query_run =mysqli_query($dbconn, $query);
                    $check_products = mysqli_num_rows($query_run) > 0;
                    if($check_products) {
                        while($row = mysqli_fetch_assoc($query_run)) { 
                            if($row['prod_category'] == 'seeds') {
                            ?>
                            <a href="productdecs.php?prod_id=<?php echo $row['prod_id'] ?>">
                                <div class="card-column">
                                    <div class="cardCtg">
                                    <img src="assets\img\products\<?php echo $row['prod_image'] ?>" class="img-responsive card-image" width="200" height="200">
                                    <h4  style="margin-top: 30px;">
                                        <?php echo $row['prod_name'] ?>
                                    </h4>
                                    <p>MRP: &#8377;
                                        <?php echo $row['prod_amount'] ?> <br>
                                        Packing:
                                        <?php echo $row['prod_quantity'] ?> gms.
                                        </h4>
                                        <!-- <p>Some text</p> -->
                                    </div>
                                </div>
                            </a>
                        
                        <?php
                            } 
                        }
                    }
                    else {
                        
                    }
                ?>
                   
                </div>
            </section>
        </main>

        <!-- ======= Footer ======= -->
        <footer id="footer">
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
                                    <a href="#">Seeds</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Potted Plants</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Pesticides</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Fertilizers</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Irrigation</a></li>
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