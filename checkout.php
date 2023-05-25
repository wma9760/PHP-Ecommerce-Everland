<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Everland | Checkout</title>
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
                                <ul class="nav nav-tabs justify-content-center mb-55" id="myTab2" role="tablist">
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
                                <div class="tab-content" id="myTabContent2">
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


    <div class="checkout_area pt-80">
        <div class="container">
            <div class="notification__message">
                <p><i class="fal fa-window-maximize"></i>Returning customer? Click here to <a href="login.php">login</a></p>
                <p><i class="fal fa-window-maximize"></i>Have a coupon? Click here to enter your code</p>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="checkout_form mb-100">
                        <form action="#">
                            <div class="row mb-30">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="checkout__wrap">
                                        <label>First name <span>*</span></label>
                                        <input type="text" name="fname">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="checkout__wrap">
                                        <label>Last name <span>*</span></label>
                                        <input type="text" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__wrap">
                                <label>Company name (optional) <span></span></label>
                                <input type="text" name="cname">
                            </div>
                            <div class="checkout__wrap">
                                <label>Country / Region <span>*</span></label>
                                <select name="country">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Bangladesh">Pakistan</option>
                                    <option value="Bangladesh">Arab</option>
                                    <option value="Bangladesh">America</option>
                                    <option value="Bangladesh">Saudi Arabia</option>
                                    <option value="Bangladesh">Israil</option>
                                    <option value="Bangladesh">Irak</option>
                                    <option value="Bangladesh">Netherland</option>
                                </select>
                            </div>
                            <div class="checkout__wrap">
                                <label>Street address <span>*</span></label>
                                <input class="mb-20" type="text" name="add1" placeholder="house number and street number">
                                <input type="text" name="add2" placeholder="apartment,suite,unit,etc.(optional)">
                            </div>
                            <div class="checkout__wrap">
                                <label>Town / City *<span></span></label>
                                <input type="text" name="town">
                            </div>
                            <div class="checkout__wrap">
                                <label>County (optional)<span></span></label>
                                <input type="text" name="country">
                            </div>
                            <div class="checkout__wrap">
                                <label>Postcode<span>*</span></label>
                                <input type="text" name="postcode">
                            </div>
                            <div class="checkout__wrap">
                                <label>Phone <span>*</span></label>
                                <input type="text" name="phone">
                            </div>
                            <div class="checkout__wrap">
                                <label>Email address <span>*</span></label>
                                <input type="email" name="email">
                            </div>
                            <div class="checkout__wrap-2 pt-20">
                                <input type="checkbox" name="check1">
                                <span>Create an account?</span>
                            </div>
                            <div class="checkout__wrap-2 pt-20">
                                <input type="checkbox" name="check2">
                                <span>Ship to a different address?</span>
                            </div>
                            <div class="checkout__wrap">
                                <label>Order notes (optional) <span></span></label>
                                <textarea name="ordernote" placeholder="Note about your order, e.g special note for delivery"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="cart__acount ml-50">
                        <h5>Your order</h5>
                        <table>
                            <tr class="first-child-2">
                                <td>product</td>
                                <td>NikeCourts Air Zoom <span>× 1</span></td>
                            </tr>
                            <tr class="first-child-2">
                                <td>Subtotal</td>
                                <td class="lightbluee">$18.00</td>
                            </tr>
                            <tr class="first-child lastchild">
                                <td>Shipping</td>
                                <td>Enter your address to view shipping options. </td>
                            </tr>
                            <tr class="first-child-2">
                                <td>Total</td>
                                <td class="lightbluee">$47.00</td>
                            </tr>
                        </table>
                        <div class="checkout__accordion mt-30">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Check payments
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Cash on delivery
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pay with cash upon delivery.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            PayPal
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Cash on delivery
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="terms pt-50 pb-20">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy</p>
                            <div class="check_term">
                                <input type="checkbox">
                                <p>I have read and agree to the website terms and conditions <span>*</span></p>
                            </div>
                            <div class="order-button">
                                <button type="submit">place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popup area start -->
    <div class="overlay"></div>
    <div class="product-popup">
        <div class="view-background">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="quickview">
                        <div class="quickview__thumb">
                            <img src="https://themepure.net/template/gota/gota/assets/img/quick_view/25.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="viewcontent">
                        <div class="viewcontent__header">
                            <h2>Brown Leather Bags</h2>
                            <a class="view_close product-p-close" href="javascript:void(0)"><i class="fal fa-times-circle"></i></a>
                        </div>
                        <div class="viewcontent__rating">
                            <i class="fal fa-star ratingcolor"></i>
                            <i class="fal fa-star ratingcolor"></i>
                            <i class="fal fa-star ratingcolor"></i>
                            <i class="fal fa-star"></i>
                        </div>
                        <div class="viewcontent__price">
                            <h4><span>$</span>99.00</h4>
                        </div>
                        <div class="viewcontent__stock">
                            <h4>Available :<span> In stock</span></h4>
                        </div>
                        <div class="viewcontent__details">
                            <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium
                                risus lacinia vel. Fusce eget turpis orci.</p>
                        </div>
                        <div class="viewcontent__action">
                            <span>Qty</span>
                            <span><input type="number" placeholder="1"></span>
                            <span><a href="#">add to cart</a></span>
                            <span><i class="fal fa-heart"></i></span>
                            <span><i class="fal fa-info-circle"></i></span>
                        </div>
                        <div class="viewcontent__footer">
                            <ul>
                                <li>Category:</li>
                                <li>SKU:</li>
                                <li>Brand:</li>
                            </ul>
                            <ul>
                                <li>Watches</li>
                                <li>2584-MK63</li>
                                <li>Brenda</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popup area end -->

    <!-- footer area start -->
    <?php include 'partials/footer.php' ?>
    <!-- footer area end -->


    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/one-page-nav-min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- for cart -->
    <script src="assets/js/cart.js"></script>
</body>

</html>