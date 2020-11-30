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
    
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    
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
            <h1 class="logo mr-auto"><a href="home.php">My <span>Cart</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="home.php">Home</a></li>
                
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

        <main>
        <section class="card-container">
            <div class="px-4 px-lg-0">
            <div class="pb-5">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Product</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Price</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Quantity</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Total</div>
                            </th>
                            
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Remove</div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            include('config\dbconn.php');
                            $query = "SELECT * FROM `$name`";
                            $query_run =mysqli_query($dbconn, $query);
                            $check_products = mysqli_num_rows($query_run) > 0;
                            if($check_products) {
                                $total_amount=0;
                                $total_product=0;
                                while($row = mysqli_fetch_assoc($query_run)) {
                                        $total_product = $row['prod_count'] * $row['prod_amount'];
                                        $total_amount = $total_amount + $total_product;
                                    ?>
                                    <tr>
                                    <form action="" method="post"> 
                   
                                        <th scope="row" class="border-0">
                                            <div class="p-2">
                                            <img src="assets\img\products\<?php echo $row['prod_image'] ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">  <?php echo $row['prod_name'] ?></a></h5>
                                                <span class="text-muted font-weight-normal font-italic d-block">Category:   <?php echo $row['prod_category'] ?> <br>
                                                Quantity: <?php echo $row['prod_quantity'] ?> 
                                                </span>
                                            </div>
                                            </div>
                                        </th>
                                        <td class="border-0 align-middle"><strong><?php echo $row['prod_amount'] ?></strong></td>
                                        <td class="border-0 align-middle">
                                            <input type="number" min="1" class="itemQty" value="<?php echo $row['prod_count'] ?>" class="form-control" style="max-width: 70px"/>
                                        </td>
                                        <input type="hidden" class="pid" value="<?= $row['prod_id']?>"/>
                                        <input type="hidden" class="pprice" value="<?= $row['prod_amount']?>"/>
                                        <td class="border-0 align-middle"><strong><?php echo number_format($total_product,2) ?></strong></td>
                                        <td class="border-0 align-middle">
                                            <a href="delete_order_details.php?order_id=<?php echo $row['prod_id'];?>" ><button class="btn btn-danger btn-round" onclick="return confirm('Are you sure you want to delete?')" type="button">Remove</button></a>
                                        </td>
                                </form>
                                    </tr>
                                
                                <?php
                                    } 
                            }
                            else {
                                
                            }
                        ?>
                        </tbody>
                        </table>
                    </div>
                    <!-- End -->
                    </div>
                </div>

                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Address</div>
                    <div class="p-4">
                        <p class="font-italic mb-4">Please enter the shipping address for this order below</p>
                        <div class="input-group mb-4 border rounded-pill p-2">
                        <input type="text" placeholder="Shipping address" aria-describedby="button-addon3" class="form-control border-0">
                        </div>
                    </div>
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                    <div class="p-4">
                        <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                        <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                    <div class="p-4">
                        <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                        <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong><?php echo number_format($total_amount,2)?></strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>&#8377; 10.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>&#8377; 0.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">&#8377; <?php $final=$total_amount+10;
                             echo number_format($final,2)
                             ?></h5>
                        </li>
                        </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                    </div>
                    </div>
                </div>

                </div>
            </div>
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


<script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();

      console.log(pid+" "+pprice+" "+qty+" "+"<?php echo $name?>");
      location.reload(true);
      $.ajax({
        url: "count.php",
        method: "POST",
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          email: "<?php echo $name?>"
        },
        success: function(response) {
          console.log(response);
        }
      });
    });
  });
  </script>