<?php
if(isset($_COOKIE['username'])):{
	$name=$_COOKIE['username'];
    include('config\dbconn.php');
	$data=($dbconn)?(mysqli_query($dbconn,"Select firstname from users where email='$name'")):"";
    $data1=($dbconn)?(mysqli_query($dbconn,"Select lastname from users where email='$name'")):"";
    $firstname=mysqli_fetch_assoc($data)['firstname'];
    $lastname=mysqli_fetch_assoc($data1)['lastname'];
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Grow More - E-commerce website for plants and related materials</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <style>
            
            .search {
                    margin: auto;
                    text-align: center;
                    font-size: 15px;
                    width: 60%;
                }
                    .search form {
                    margin-top: 30px;
                    background: #fff;
                    padding: 6px 10px;
                    align-items: center;
                    position: relative;
                    border-radius: 4px;
                    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
                    text-align: left;
                }

                .search form input[type="text"] {
                    border: 0;
                    padding: 4px;
                }
                </style>

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


                        <li class="drop-down">
                            <a href="#">
                                <?php echo $firstname.' '.$lastname; ?>
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
        <section id="hero" class="d-flex align-items-center">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <h1>Welcome to <span>GrowMore</spa>
      </h1>
      <h2>Where you can find all the things required for Farming and Gardening</h2>
      <div class="d-flex">
        <a href="#services" class="btn-get-started scrollto">Products</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

     <!-- ======= Featured Services Section ======= -->
     <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-gem"></i></div>
              <h4 class="title"><a href="">Best Quality</a></h4>
              <p class="description">We at GrowMore try to give the top most quality product to all our customers.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-handshake"></i></div>
              <h4 class="title"><a href="">Best Services</a></h4>
              <p class="description">We provide the best service available. Since, customer satisfaction is our No.1 moto.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-tags"></i></div>
              <h4 class="title"><a href="">Best Offers</a></h4>
              <p class="description">Customers can find the best offers in all our products.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
              <h4 class="title"><a href="">Best Prices</a></h4>
              <p class="description">Customers can find the lowest prices possible on our website.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <span data-toggle="counter-up">102</span>
                    <p>Happy Customers</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">520</span>
                    <p>Orders</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="icofont-live-support"></i>
                    <span data-toggle="counter-up">1,500</span>
                    <p>Hours Of Support</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="icofont-users-alt-5"></i>
                    <span data-toggle="counter-up">15</span>
                    <p>Hard Workers</p>
                </div>
            </div>

            </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
                <div class="section-title">
                    <h2>Products</h2>
                    <h3>Check our <span>Products</span></h3>
                    <p>We have a wide range of products from heavy machinary required for Agricultural activity to small plants helpful for home gardening.</p>
                </div>

                <div class="search">
                    <form action="" method="post"> 
                        <input type="text" name="search_text" id="search_text" placeholder="Search products here" class="form-control" />
                    </form>
                </div>

                <div class="card-container" data-aos="fade-up" style="padding-top: 0px;">
            

                <div class="card-row" id="result">
                </div>
                
        </section>
        <!-- End Services Section -->

        </main>
        <!-- End #main -->

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
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                    }, 'google_translate_element');
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

    <?php 
else:{
	echo "<script>location.href='user_signup.php'</script>";
}
endif
?>

<script>
    $(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
            $('#result').html(data);
        }
    });
    }
    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();
        }
        });
    });
</script>