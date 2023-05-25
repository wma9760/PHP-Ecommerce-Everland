<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Everland | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/futura-std-font.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- header area start -->
    <?php include 'partials/header.php' ?>
    <!-- header area end -->


    <div class="search_area">
        <div class="search_close">
            <span><i class="fal fa-times"></i></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="search-wrapper text-center">
                        <h2>search</h2>
                        <div class="search-filtering pt-30">
                            <div class="search_tab">
                                <ul class="nav nav-tabs justify-content-center mb-55" id="select1111" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab2" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-selected="true">All categories</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-selected="false">Basketball</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-selected="false">Handbag</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sportswear-tab" data-bs-toggle="tab" data-bs-target="#sportswear" type="button" role="tab" aria-selected="false">Sportswear</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="mycontentalso">
                                    <div class="tab-pane fade show active" id="home2" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="profile2" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="contact2" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="sportswear" role="tabpanel">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_search">
                            <form action="#">
                                <input type="text" name="search" placeholder="search products">
                                <button class="m-search"><i class="fal fa-search d-sm-none d-md-block"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>

    <!-- cart area start  -->
    <?php include 'includes/cart-area.php'; ?>
    <!-- cart area end  -->

    <div class="search_area">
        <div class="search_close">
            <span><i class="fal fa-times"></i></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="search-wrapper text-center">
                        <h2>search</h2>
                        <div class="search-filtering pt-30">
                            <div class="search_tab">
                                <ul class="nav nav-tabs justify-content-center mb-55" id="myTab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="select11" data-bs-toggle="tab" data-bs-target="#select1" type="button" role="tab" aria-selected="true">All categories</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="select22" data-bs-toggle="tab" data-bs-target="#select2" type="button" role="tab" aria-selected="false">Basketball</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#select3" type="button" role="tab" aria-selected="false" id="select33">Handbag</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="select44" data-bs-toggle="tab" data-bs-target="#select4" type="button" role="tab" aria-selected="false">Sportswear</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="select55" data-bs-toggle="tab" data-bs-target="#contact3" type="button" role="tab" aria-selected="false">Youth</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="select1" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="select2" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="select3" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="select4" role="tabpanel">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_search">
                            <form action="#">
                                <input type="text" name="search" placeholder="search products">
                                <button class="m-search"><i class="fal fa-search d-sm-none d-md-block"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area start -->
    <div class="page-layout about" data-background="https://themepure.net/template/gota/gota/assets/img/slider/shop.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-area text-center">
                        <h2 class="page-title">My account</h2>
                        <div class="breadcrumb-menu">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="login.php">My account</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <div class="login_register_area">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-2 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                    
                </div>
                <!-- <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                    <h3 class="title-7">Login</h3>
                    <div class="login_wrapper">
                        <form method="POST" action="#">
                            <div class="input_wrap">
                                <label>Email address <span>*</span></label>
                                <input type="email">
                            </div>
                            <div class="input_wrap">
                                <label>Password<span>*</span></label>
                                <input type="email">
                                <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                            </div>
                            <div class="input_wrapp-2">
                                <input type="checkbox" name="check">
                                <span>Remember me </span>
                            </div>
                            <div class="input_wrap">
                                <button type="submit">log in</button>
                            </div>
                            <div class="input_wrap">
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h3 class="title-7">Email Verify</h3>
                    <div class="login_wrapper login_wrapper_2">
                        <form method="POST" action="#">
                            <div class="input_wrap">
                                <label>Email address<span>*</span></label>
                                <input type="email" name="email">
                            </div>
                            <div class="input_wrap input_wrap_3">
                                <span class="mb-10 pt-15">A Link will be sent to your email address.</span>
                                
                                <button type="submit" name="submit">Email Verify</button>
                            </div>
                            <!-- backend for email reset password -->
                            <?php
                            include "config.php";
                            if (isset($_POST['submit'])) {
                                $email = mysqli_real_escape_string($con, $_POST['email']);

                                $emailcheck = " SELECT * FROM `users` WHERE email='$email' ";

                                $emQuery = mysqli_query($con, $emailcheck);
                                $emCount = mysqli_num_rows($emQuery);
                                $row = mysqli_fetch_array($emQuery);
                                
                                if ($emCount > 0) {
                                    
                                //  if ($row['token']=="") {
                                //  $tokenNew = bin2hex(random_bytes(50));
                                //  $Insert = "INSERT INTO users (token) VALUES ('$tokenNew') WHERE Id=$id";
                                //  $results = mysqli_query($con, $Insert);
                                // }
                                    $token = $row['token'];
                                    $id = $row['Id'];
                                    
                                    $to = "$email";
                                    
                                     $subject = "GOTO WEBSITE Password Reset";
                                     
                                   
                                     $message = "Hello There Customer We send this link to You Go to Link And Reset Your Password \n http://saad.aetsmsoft.com/reset-pass.php?token=$token ";

                                     $header = "From:bilal@aetsmsoft.com";
                                     
                                     $retval = mail ($to,$subject,$message,$header);
                                     
                                     if( $retval == true ) {?>
                                        <div class="alert alert-success">
                                      <strong>Successfully Link sent</strong> Check Your Mail...
                                    </div><?php
                                     }else {?>
                                        <div class="alert alert-danger">
                                      Link could not be sent...
                                    </div><?php }
                                }else{
                                        ?>
                                        <div class="alert alert-danger">
                                      <strong>Invalid Email Not Fount</strong>
                                    </div><?php
                                     }
                            }


                            ?>
                            <!-- backend end -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area start -->
    <?php include 'partials/footer.php' ?>
    <!-- footer area end -->


    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/one-page-nav-min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/main.js"></script><!-- for cart -->
    <script src="assets/js/cart.js"></script>
</body>

</html>