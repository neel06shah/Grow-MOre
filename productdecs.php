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
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Description</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    
    <!-- CSS -->
    <link href="assets\css\style3.css" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <h1 class="logo mr-auto"><a href="home.php">Product <span>Description</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="mycart.php">My Cart</a></li>
                </ul>            
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->


    <main class="containernew">
        <?php
            include('config\dbconn.php');
            $id = $_GET['prod_id'];
            $prod1=($dbconn)?(mysqli_query($dbconn,"Select prod_name from products where prod_id='$id'")):"";
            $prod2=($dbconn)?(mysqli_query($dbconn,"Select prod_amount from products where prod_id='$id'")):"";
            $prod3=($dbconn)?(mysqli_query($dbconn,"Select prod_description from products where prod_id='$id'")):"";
            $prod4=($dbconn)?(mysqli_query($dbconn,"Select prod_category from products where prod_id='$id'")):"";
            $prod5=($dbconn)?(mysqli_query($dbconn,"Select prod_image from products where prod_id='$id'")):"";
            $prod6=($dbconn)?(mysqli_query($dbconn,"Select prod_quantity from products where prod_id='$id'")):"";
            
            $name=mysqli_fetch_assoc($prod1)['prod_name'];
            $amount=mysqli_fetch_assoc($prod2)['prod_amount']; 
            $description=mysqli_fetch_assoc($prod3)['prod_description']; 
            $category=mysqli_fetch_assoc($prod4)['prod_category']; 
            $image=mysqli_fetch_assoc($prod5)['prod_image']; 
            $quantity=mysqli_fetch_assoc($prod6)['prod_quantity']; 
            
        ?>

        
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img class="active" src="assets\img\products\<?php echo $image?>" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span><?php echo $category?></span>
          <h1><?php echo $name?></h1>
        </div>

        <div class="product-description">
          <h3>Product Packaging</h3>
          <p><?php echo $quantity?> gms. per packet</p>
          <h3>Product Description</h3>
          <p><?php echo $description?></p>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span><?php echo $amount?></span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div>
    </main><br><br>

    <div id="google_translate_element"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                            }
                            </script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


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