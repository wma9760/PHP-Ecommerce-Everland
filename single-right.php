<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gota eCommerce HTML5 Template</title>
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
    <div class="cart__sidebar">
        <div class="container">
            <div class="cart__content">
                <div class="cart-text">
                    <h3 class="mb-40">Shopping cart</h3>
                    <div class="add_cart_product">
                        <div class="add_cart_product__thumb">
                            <img src="./assets/img/product/29-3.jpg" alt="">
                        </div>
                        <div class="add_cart_product__content">
                            <h5><a href="shop.php">Running 3-Stripes</a></h5>
                            <p>1 × $66.00</p>
                            <button class="cart_close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="add_cart_product">
                        <div class="add_cart_product__thumb">
                            <img src="./assets/img/product/17.jpg" alt="">
                        </div>
                        <div class="add_cart_product__content">
                            <h5><a href="shop.php">Buddy non Stripes</a></h5>
                            <p>1 × $40.00</p>
                            <button class="cart_close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="cart-icon">
                    <i class="fal fa-times"></i>
                </div>
                <div class="cart-bottom">
                    <div class="cart-bottom__text">
                        <span>Subtotal:</span>
                        <span class="end">$121.00</span>
                        <a href="cart.php">view cart</a>
                        <a href="checkout.php">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-offcanvas-overlay"></div>
    <!-- cart area end  -->

    <!-- single_breadcrumb_area start -->
    <div class="single_breadcrumb pt-25">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item"><a href="#">Outerwears</a></li>
                    <li class="breadcrumb-item"><a href="#">jackets</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Arsenal Home Jersey</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="single_preview_product">
                                <div class="single-popup-view">
                                    <a class="popup-image" href="./assets/img/product/17-3.jpg"><i class="fal fa-search"></i></a>
                                </div>
                                <div class="tab-content" id="myTabContenter">
                                    <div class="tab-pane fade show active" id="homess" role="tabpanel">
                                        <div class="full-view">
                                            <img src="./assets/img/product/17.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profiledffs" role="tabpanel">
                                        <div class="full-view">
                                            <img src="./assets/img/product/17-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="adfjkf" role="tabpanel">
                                        <div class="full-view">
                                            <img src="./assets/img/product/17-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kiderds" role="tabpanel">
                                        <div class="full-view">
                                            <img src="./assets/img/product/17-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="single_product_tab">
                                <div class="single_prodct">
                                    <ul class="nav nav-tabs justify-content-center mb-55" id="ddfde" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tabse" data-bs-toggle="tab" data-bs-target="#homess" type="button" role="tab" aria-selected="true"><img src="./assets/img/product/17.jpg" alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tadfdb" data-bs-toggle="tab" data-bs-target="#profiledffs" type="button" role="tab" aria-selected="false"><img src="./assets/img/product/17-1.jpg" alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#adfjkf" type="button" role="tab" aria-selected="false"><img src="./assets/img/product/17-2.jpg" alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kiderds" type="button" role="tab" aria-selected="false"><img src="./assets/img/product/17-3.jpg" alt=""></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="single_preview_content pl-30">
                        <h2 class="title-5 edit-title border-bottom-0">Arsenal Home Jersey</h2>
                        <div class="s-product-review">
                            <span><i class="far fa-star start-color"></i></span>
                            <span><i class="far fa-star start-color"></i></span>
                            <span><i class="far fa-star start-color"></i></span>
                            <span><i class="far fa-star start-color"></i></span>
                            <span><i class="far fa-star"></i></span>
                            <span class="pl-left">(1 customer review)</span>
                        </div>
                        <div class="s-price pt-30 mb-30">
                            <span>$45.00</span>
                        </div>
                        <div class="s-des">
                            <p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs Wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a</p>
                        </div>
                        <div class="viewcontent__action single_action pt-30">
                            <span><input type="number" placeholder="1"></span>
                            <span><a href="cart.php">+ add to cart</a></span>
                            <span><i class="fal fa-heart"></i></span>
                            <span><i class="fas fa-compress"></i></span>
                        </div>
                        <div class="viewcontent__footer border-top-0 border-bottom pb-30">
                            <ul>
                                <li>Category:</li>
                                <li>SKU:</li>
                            </ul>
                            <ul>
                                <li>jackets, Youth</li>
                                <li>woo-hoodie-with-logo</li>
                            </ul>
                        </div>
                        <div class="social__media f-social-media mb-30 pt-15">
                            <h3 class="f-title edit-f-title">FOLLOW US ON</h3>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single_breadcrumb_area end -->


    <div class="single_product_long_desc pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl 12 col-lg-12 col-md-12">
                    <div class="categories__tab single_disc_tab">
                        <ul class="nav nav-tabs justify-content-center" id="myerTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab3" data-bs-toggle="tab" data-bs-target="#Description" type="button" role="tab" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab3" data-bs-toggle="tab" data-bs-target="#Additional" type="button" role="tab" aria-selected="false">Additional information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Reviews" type="button" role="tab" aria-selected="false">Reviews (1)</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabCffontent">
                            <div class="tab-pane fade show active" id="Description" role="tabpanel">
                                <div class="single_product_description text-center pt-80">
                                    <h2 class="title-5 border-0">YOUR NEW AND IMPROVED​</h2>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit <br> voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt <br> explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="desc__imag pt-70">
                                        <img src="./assets/img/desc/des1.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="desc__imag_2">
                                                <img src="./assets/img/desc/images-d1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 pl-50">
                                            <div class="desc_title_wrapper pt-100">
                                                <h4>COMFORTABLE TO USE</h4>
                                                <h2>QUICKEN YOUR TEMPO PACE</h2>
                                            </div>
                                            <div class="desc_image_content pt-30 mb-30">
                                                <div class="desc-3_image">
                                                    <img src="./assets/img/desc/d1.jpg" alt="">
                                                </div>
                                                <div class="desc-3_content">
                                                    <h4>Contrary to popular belief</h4>
                                                    <p>The gently rounded top together with the back and seat offers a variety of <br> comfortable seating positions, ideal for both long.</p>
                                                </div>
                                            </div>
                                            <div class="desc_image_content mb-30">
                                                <div class="desc-3_image">
                                                    <img src="./assets/img/desc/d2.jpg" alt="">
                                                </div>
                                                <div class="desc-3_content">
                                                    <h4>Lorem Ipsum is not simply </h4>
                                                    <p>The gently rounded top together with the back and seat offers a variety of <br> comfortable seating positions, ideal for both long.</p>
                                                </div>
                                            </div>
                                            <div class="desc_image_content mb-30">
                                                <div class="desc-3_image">
                                                    <img src="./assets/img/desc/d3.jpg" alt="">
                                                </div>
                                                <div class="desc-3_content">
                                                    <h4>If you are going to use</h4>
                                                    <p>The gently rounded top together with the back and seat offers a variety of <br> comfortable seating positions, ideal for both long.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show_product">
                                        <div class="desc__imag pt-70">
                                            <img src="./assets/img/desc/des2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="show_product">
                                        <h2 class="title-5 border-0 pt-30">YOUR NEW AND IMPROVED​</h2>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit <br> voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt <br> explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <div class="desc__imag pt-70">
                                            <img src="./assets/img/desc/des3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="show_product">
                                        <h2 class="title-5 border-0 pt-30">Meticulous and accurate design</h2>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit <br> voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt <br> explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                    <div class="row pt-100">
                                        <div class="col xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="show_model_product mb-30">
                                                <img src="./assets/img/desc/a1.jpg" alt="">
                                                <h4 class="pb-30">women’s running</h4>
                                                <img src="./assets/img/desc/b1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="show_model_product mb-30">
                                                <img src="./assets/img/desc/a1.jpg" alt="">
                                                <h4 class="pb-30">men’s running</h4>
                                                <img src="./assets/img/desc/b1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="show_model_product mb-30">
                                                <img src="./assets/img/desc/a1.jpg" alt="">
                                                <h4 class="pb-30">kid’s running</h4>
                                                <img src="./assets/img/desc/b3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- categories area start -->
                                <div class="categories_area pt-50 mb-100">
                                    <div class="container-fluid">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="section-wrapper text-center mb-35">
                                                <h2 class="section-title">Related products </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="categories__tab">
                                                    <div class="tab-content" id="dfmyTabContent">
                                                        <div class="tab-pane fade show active" id="hoeerme" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">zomm s Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">show for amirican oom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">casio ns Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">uynoewn kiso Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">product show Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt zir hostel</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="profidfle" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt noise show for</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="contacfdft" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="kidfdds" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- categories area end -->
                            </div>

                            <div class="tab-pane fade" id="Additional" role="tabpanel">
                                <div class="additional-information">
                                    <ul>
                                        <li class="title">Additional information</li>
                                        <li>Weight</li>
                                        <li>1.4 oz</li>
                                        <li>Dimensions</li>
                                        <li>62 × 56 × 12 in</li>
                                        <li>Size</li>
                                        <li>XL, XXL, LG, SM, MD</li>
                                        <li>Fabric</li>
                                        <li>Cotton, Silk & Synthetic</li>
                                        <li>Warranty</li>
                                        <li>3 Months</li>
                                    </ul>
                                </div>
                                <!-- categories area start -->
                                <div class="categories_area pt-85 mb-150">
                                    <div class="container-fluid">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="section-wrapper text-center mb-35">
                                                <h2 class="section-title">Related products </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="categories__tab">
                                                    <div class="tab-content" id="myTabCobbntent">
                                                        <div class="tab-pane fade show active" id="hom05415e" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="profdegnfile" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="contaafct" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="kiddfds" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- categories area end -->
                            </div>
                            <div class="tab-pane fade" id="Reviews" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 offset-xl-2">
                                            <div class="product__reviews_comment pt-150">
                                                <p>1 review for Detail V-Neck Sweater</p>
                                                <div class="user_design">
                                                    <div class="user__thumb">
                                                        <img src="./assets/img/desc/team2-60x60.png" alt="">
                                                    </div>
                                                    <div class="user__content">
                                                        <h4>admin<span> – July 13, 2020: </span></h4>
                                                        <span>
                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                        </span>
                                                        <p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs Wegner designed based on inspiration from antique
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="pt-60 mb-25 add_review">Add a review </h4>
                                            <h4 class="mb-25 rating-title">Your Rating</h4>
                                            <span>
                                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                            </span>
                                            <div class="review_form">
                                                <form action="#">
                                                    <div class="review__wrap_1">
                                                        <label>Your Review *</label>
                                                        <textarea name="review"></textarea>
                                                    </div>
                                                    <div class="review__wrap">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <label>Name <span>*</span></label>
                                                                <input type="text" name="fname">
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                                <div class="review__wrap">
                                                                    <label>Email <span>*</span></label>
                                                                    <input type="text" name="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review__wrap_2">
                                                        <input type="checkbox" name="email">
                                                        <span class="pt-10 pb-10">Save my name, email, and website in this browser for the next time I comment.</span>
                                                    </div>
                                                    <div class="review__wrap pt-15">
                                                        <button type="submit">submit</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- categories area start -->
                                <div class="categories_area pt-85 mb-150">
                                    <div class="container-fluid">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="section-wrapper text-center mb-35">
                                                <h2 class="section-title">Related products </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="categories__tab">
                                                    <div class="tab-content" id="myTabConte56nt">
                                                        <div class="tab-pane fade show active" id="ho65me" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="cart.php">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="prodfffile" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="contacft" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="dfd" role="tabpanel">
                                                            <div class="container">
                                                                <div class="product-active swiper-container">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating text-end">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-20%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat3.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <!-- <div class="product__update">
                                                                                            <a class="#">new</a>
                                                                                        </div> -->
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="lightblueclr" href="#">-30%</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-item swiper-slide">
                                                                            <div class="product">
                                                                                <div class="product__thumb">
                                                                                    <a href="#single.php">
                                                                                        <img class="product-primary" src="./assets/img/product/cat1.png" alt="product_image">
                                                                                        <img class="product-secondary" src="./assets/img/product/cat2.png" alt="product_image">
                                                                                    </a>
                                                                                    <div class="product__update">
                                                                                        <a class="#">new</a>
                                                                                    </div>
                                                                                    <div class="product-info mb-10">
                                                                                        <div class="product_category">
                                                                                            <span>Shoes, Clothing</span>
                                                                                        </div>
                                                                                        <div class="product_rating">
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star start-color"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                            <a href="#"><i class="fal fa-star"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__name">
                                                                                        <h4><a href="single.php">NikeCourt Air Zoom Prestige</a></h4>
                                                                                        <div class="pro-price">
                                                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 -
                                                                                                <span>$</span>680.00
                                                                                            </p>
                                                                                            <a class="p-absoulute pr-2" href="#">add to cart</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product__action">
                                                                                        <div class="inner__action">
                                                                                            <div class="wishlist">
                                                                                                <a href="#"><i class="fal fa-heart"></i></a>
                                                                                            </div>
                                                                                            <div class="view">
                                                                                                <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                                            </div>
                                                                                            <div class="layer">
                                                                                                <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- categories area end -->
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
                            <img src="./assets/img/quick_view/25.jpg" alt="">
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
</body>

</html>