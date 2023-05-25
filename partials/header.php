<?php include 'config.php'; 
session_start();
if (isset($_SESSION['uemail'])) {
    $user_em = $_SESSION['uemail'];
    $usql = "SELECT id FROM users WHERE email='$user_em'";
    $uq = mysqli_query($con, $usql);
    $urow = mysqli_fetch_array($uq);
    $userId = $urow['id'];
}
?>
<header class="header-area">
    <div class="gota_top bg-soft d-none d-sm-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="gota_lang">
                        <ul>
                            <!-- <li><a href="#">usd<i class="fal fa-chevron-down"></i></a>
                                <ul class="additional_dropdown">
                                    <li><a href="#">euro</a></li>
                                </ul>
                            </li>
                            <li><a href="#">english<i class="fal fa-chevron-down"></i></a>
                                <ul class="additional_dropdown">
                                    <li><a href="#">frences</a></li>
                                    <li><a href="#">japanes</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-5 col-lg-6 col-md-6 col-sm-6 text-end">
                    <div class="gota_right">
                        <ul>
                            <li><a ><?php if (isset($_SESSION['uemail'])) { echo $_SESSION['uemail']; } ?></a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li>
                                <?php if (!isset($_SESSION['uemail'])) { ?> <a href="login.php">Login & Register</a> <?php }else{ ?> <a href="logout.php">Log Out</a> <?php } ?>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gota_bottom position-relative">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 d-none d-sm-block">
                    <div class="gota_search">
                        <form class="search_form">
                            <button class="search_action"><i class="fal fa-search d-sm-none d-md-block"></i></button>
                            <input type="text" placeholder="search" />
                        </form>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-4 col-sm-4">
                    <div class="sidemenu sidemenu-1 d-lg-none d-md-block">
                        <a class="open" href="#"><i class="fal fa-bars"></i></a>
                    </div>
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="index.php">Home </a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <!-- <li class="position-static menu-item-has-children"><a href="shop.php">Shop</a>
                                    <ul class="mega_menu" data-background="https://themepure.net/template/gota/gota/assets/img/mega-menu/product.jpg">
                                        <li>
                                            <h4 class="mega_title">Shop Layout</h4>
                                            <ul class="mega_item">
                                                <li><a href="shop.php">Pagination</a></li>
                                                <li><a href="shop.php">Ajax Load More</a></li>
                                                <li><a href="shop-3-width.php">Infinite Scroll</a></li>
                                                <li><a href="shop-right.php">Sidebar Right</a></li>
                                                <li><a href="shop.php">Sidebar Left</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="mega_title">shop pages</h4>
                                            <ul class="mega_item">
                                                <li><a href="shop-list.php">List View</a></li>
                                                <li><a href="shop-sm.php">Small Products</a></li>
                                                <li><a href="shop-large.php">Large Products</a></li>
                                                <li><a href="shop-3-width.php">Shop — 3 Items</a></li>
                                                <li><a href="shop-4.php">Shop — 4 Items</a></li>
                                                <li><a href="shop-sm.php">Shop — 5 Items</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="mega_title">Product Layout</h4>
                                            <ul class="mega_item">
                                                <li><a href="shop-sticky.php">Description Sticky</a></li>
                                                <li><a href="shop-carousel.php">Product Carousel</a></li>
                                                <li><a href="modern.php"> Gallery Modern</a></li>
                                                <li><a href="single.php"> Thumbnail Left</a></li>
                                                <li><a href="single-right.php">Thumbnail Right</a></li>
                                                <li><a href="single-bottom.php"> Thumbnail Botttom</a></li>
                                            </ul>
                                        </li>
                                        <li>

                                        </li>
                                    </ul>
                                </li>
                                <li class="position-static menu-item-has-children"><a href="service.php">Features</a>
                                    <ul class="mega_menu_2">
                                        <li data-background="https://themepure.net/template/gota/gota/assets/img/mega-menu/product2.jpg">
                                            <h4 class="mega_title_2">Basketball</h4>
                                            <ul class="mega_item_2">
                                                <li><a href="shop.php">East Hampton Fleece</a></li>
                                                <li><a href="shop.php">Faxon Canvas Low</a></li>
                                                <li><a href="shop.php">Habitasse dictumst</a></li>
                                                <li><a href="shop.php">Kaoreet lobortis</a></li>
                                                <li><a href="shop.php">NikeCourt Zoom Prestige</a></li>
                                                <li><a href="shop.php">NikeCourts Air Zoom</a></li>
                                                <li><a href="shop.php">NikeCourts Air Zoom</a></li>
                                            </ul>
                                        </li>
                                        <li data-background="https://themepure.net/template/gota/gota/assets/img/mega-menu/product3.jpg">
                                            <h4 class="mega_title_2">Helmet for Women’s</h4>
                                            <ul class="mega_item_2">
                                                <li><a href="shop.php">Arsenal Home Jersey</a></li>
                                                <li><a href="shop.php">Arsenal Home Jersey</a></li>
                                                <li><a href="shop.php">Pellentesque posuere</a></li>
                                                <li><a href="shop.php">Running 3-Stripes</a></li>
                                                <li><a href="shop.php">Running 3-Stripes</a></li>
                                                <li><a href="shop.php">V-Neck T-Shirt</a></li>
                                                <li><a href="shop.php">WordPress Pennant</a></li>
                                            </ul>
                                        </li>
                                        <li data-background="https://themepure.net/template/gota/gota/assets/img/mega-menu/product4.jpg">
                                            <h4 class="mega_title_2">Basketball</h4>
                                            <ul class="mega_item_2">
                                                <li><a href="shop.php">East Hampton Fleece</a></li>
                                                <li><a href="shop.php">Faxon Canvas Low</a></li>
                                                <li><a href="shop.php">Habitasse dictumst</a></li>
                                                <li><a href="shop.php">Kaoreet lobortis</a></li>
                                                <li><a href="shop.php">NikeCourt Zoom Prestige</a></li>
                                                <li><a href="shop.php">NikeCourts Air Zoom</a></li>
                                                <li><a href="shop.php">NikeCourts Air Zoom</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <li><a class="d-none d-xl-block" href="index.php">
                                        <img style="width: 50px; height: 50px;" src="assets/img/logo/ever-land-logo-01.png" alt="logo-image">
                                    </a></li>
                                <li><a href="blog-grid.php">Blog</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">contact us </a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                    <div class="gota_cart gotat_cart_1 text-end">
                        <a href="javascript:void(0)"><!-- javascript:void(0) --><i class="fal fa-shopping-cart"></i>My Bag<span class="counter"> (<span id="cart-item"></span>)</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>