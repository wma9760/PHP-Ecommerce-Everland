<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Everland | Shop</title>
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
<style>
a {
    text-decoration: none !important;
    color: inherit
}

a:hover {
    color: #455A64
}

.card {
    border-radius: 5px;
    background-color: #fff;
    padding-left: 60px;
    padding-right: 60px;
    margin-top: 30px;
    padding-top: 30px;
    padding-bottom: 30px
}

.rating-box {
    width: 130px;
    height: 130px;
    margin-right: auto;
    margin-left: auto;
    background-color: #FBC02D;
    color: #fff
}

.rating-label {
    font-weight: bold
}

.rating-bar {
    width: 300px;
    padding: 8px;
    border-radius: 5px
}

.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    margin-bottom: 5px
}

.bar-5 {
    width: 70%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-4 {
    width: 30%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-3 {
    width: 20%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-2 {
    width: 10%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

.bar-1 {
    width: 0%;
    height: 13px;
    background-color: #FBC02D;
    border-radius: 20px
}

td {
    padding-bottom: 10px
}

.star-active {
    color: #FBC02D;
    margin-top: 10px;
    margin-bottom: 10px
}

.star-active:hover {
    color: #F9A825;
    cursor: pointer
}

.star-inactive {
    color: #CFD8DC;
    margin-top: 10px;
    margin-bottom: 10px
}

.blue-text {
    color: #0091EA
}

.content {
    font-size: 18px
}

.profile-pic {
    width: 90px;
    height: 90px;
    border-radius: 100%;
    margin-right: 30px
}

.pic {
    width: 80px;
    height: 80px;
    margin-right: 10px
}

.vote {
    cursor: pointer
}
</style>

<body>

    <!-- header area start -->
    <?php include 'partials/header.php'?>
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
                                        <button class="nav-link active" id="home-tab2" data-bs-toggle="tab"
                                            data-bs-target="#home2" type="button" role="tab" aria-selected="true">All
                                            categories</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab2" data-bs-toggle="tab"
                                            data-bs-target="#profile2" type="button" role="tab"
                                            aria-selected="false">Basketball</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact2"
                                            type="button" role="tab" aria-selected="false">Handbag</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sportswear-tab" data-bs-toggle="tab"
                                            data-bs-target="#sportswear" type="button" role="tab"
                                            aria-selected="false">Sportswear</button>
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
    <?php include 'includes/cart-area.php';?>
    <!-- cart area end  -->
    <?php
$ide = $_GET['Id'];
$sql = "SELECT * FROM product WHERE id=$ide";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_array($run);
$title = $row['title'];
$category = $row['category'];
$price = $row['price'];
$description = $row['description'];

?>
    <!-- single_breadcrumb_area start -->
    <div class="single_breadcrumb pt-25">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item"><a href="#">Outerwears</a></li>
                    <li class="breadcrumb-item"><a href="#"><?=$category?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="single_product_tab">
                                <div class="single_prodct">
                                    <ul class="nav nav-tabs justify-content-center mb-55" id="dfde" role="tablist">
                                        <?php
$sql2 = "SELECT * FROM product_images WHERE product_id=$ide";
$run2 = mysqli_query($con, $sql2);
$active = 0;
while ($row2 = mysqli_fetch_array($run2)) {
    $active = $active + 1;
    $idy = $row2['id'];
    $img = $row2['image'];
    ?>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link <?php if ($active == 1) {echo "active";}?>"
                                                id="home-tab" data-bs-toggle="tab" data-bs-target="#home<?=$idy?>"
                                                type="button" role="tab" aria-selected="true"><img
                                                    src="admin/dashboard/product-images/<?=$img?>" alt=""></button>
                                        </li>
                                        <?php }?>
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profidfdle" type="button" role="tab" aria-selected="false"><img src="admin/dashboard/<?=$img2?>" alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contadfdct" type="button" role="tab" aria-selected="false"><img src="admin/dashboard/<?=$img3?>" alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kidsdfd" type="button" role="tab" aria-selected="false"><img src="admin/dashboard/<?=$img4?>" alt=""></button>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="single_preview_product">
                                <div class="single-popup-view">
                                    <a class="popup-image" href="admin/dashboard/product-images/<?=$img?>"><i
                                            class="fal fa-search"></i></a>
                                </div>
                                <div class="tab-content" id="myTabefContent">
                                    <?php
$sql2 = "SELECT * FROM product_images WHERE product_id=$ide";
$run2 = mysqli_query($con, $sql2);
$active = 0;
while ($row2 = mysqli_fetch_array($run2)) {
    $active = $active + 1;
    $idy = $row2['id'];
    $img = $row2['image'];
    ?>
                                    <div class="tab-pane fade <?php if ($active == 1) {echo "show active";}?>"
                                        id="home<?=$idy?>" role="tabpanel">
                                        <div class="full-view">
                                            <img src="admin/dashboard/product-images/<?=$img?>" alt="">
                                        </div>
                                    </div>
                                    <?php }?>
                                    <!-- <div class="tab-pane fade" id="profidfdle" role="tabpanel">
                                        <div class="full-view">
                                            <img src="admin/dashboard/<?=$img2?>" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contadfdct" role="tabpanel">
                                        <div class="full-view">
                                            <img src="admin/dashboard/<?=$img3?>" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kidsdfd" role="tabpanel">
                                        <div class="full-view">
                                            <img src="admin/dashboard/<?=$img4?>" alt="">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="single_preview_content pl-30">
                        <h2 class="title-5 edit-title border-bottom-0"><?=$title?></h2>

                        <div class="s-product-review">
                            <?php
$query_star_rating = "SELECT ROUND(AVG(rating), 1) as numRating from review_comment where product_id=$ide  ";
$avgresult = mysqli_query($con, $query_star_rating);
$fetchAverage = mysqli_fetch_array($avgresult);
$numRating = $fetchAverage['numRating'];
if ($numRating <= 0) {
    $numRating = "0";}

for ($i = 1; $i <= 5; $i++) {
    $ratingClass = "";
    if ($i <= $numRating) {
        $ratingClass = "start-color";
    }
    ?>
                            <span><i class="far fa-star <?php echo $ratingClass; ?>"></i></span>
                            <?php
}?>
                        </div>
                        <div class="s-price pt-30 mb-30">
                            <span>$<?=$price?></span>
                        </div>
                        <div class="s-des">
                            <p><?=$description?></p>
                        </div>
                        <div class="viewcontent__action single_action pt-30">
                            <!-- <span><input type="number" placeholder="1"></span> -->
                            <form action="" class="form-submit">

                                <input type="hidden" class="pid" value="<?=$id?>">
                                <input type="hidden" class="pname" value="<?=$title?>">
                                <input type="hidden" class="pcategory" value="<?=$category?>">
                                <input type="hidden" class="pprice" value="<?=$price?>">
                                <input type="hidden" class="pimage" value="<?=$img?>">
                                <input type="hidden" class="pcode" value="<?=$code?>">
                                <input type="hidden" class="uid" value="<?=$userId?>">
                                <span><a class="<?php if (isset($_SESSION['uemail'])) {echo 'addItemBtn';}?>"
                                        href="<?php if (!isset($_SESSION['uemail'])) {echo 'login.php';}?>">+
                                        add to
                                        cart</a></span>
                            </form>
                            <!-- <span><i class="fal fa-heart"></i></span>
                            <span><i class="fas fa-compress"></i></span> -->
                        </div>
                        <div class="viewcontent__footer border-top-0 border-bottom pb-30">
                            <ul>
                                <li>Category:</li>
                                <!-- <li>SKU:</li> -->
                            </ul>
                            <ul>
                                <li><?=$category?>, Youth</li>
                                <!-- <li>woo-hoodie-with-logo</li> -->
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


    <!-- Related Product area start -->
    <div class="categories_area pt-85 mb-150">
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-wrapper text-center mb-35">
                    <h2 class="section-title">Related Product</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="categories__tab">
                        <div class="tab-content" id="myproduct">
                            <div class="tab-pane fade show active" id="tablid">
                                <div class="container">
                                    <div class="product-active h-2-product-active swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php
$sql = "SELECT * FROM product WHERE id != $ide limit 4";
$run = mysqli_query($con, $sql);
$count_sec = 0;
while ($row = mysqli_fetch_array($run)) {
    $id = $row['id'];
    $title = $row['title'];
    $category = $row['category'];
    $price = $row['price'];
    $chk = $row['on_sale'];
    $sdate = $row['start_date'];
    $edate = $row['end_date'];
    if ($edate != null) {
        if (strtotime($edate) <= time()) {
            $chk = 0;
        } else {
            $chk = 1;
        }

    }
    $count_sec = $count_sec + 0.2;
    $sql3 = "SELECT * FROM product_images WHERE product_id=$id limit 2";
    $run3 = mysqli_query($con, $sql3);
    $img_count = 0;
    while ($row3 = mysqli_fetch_array($run3)) {
        $img_count = $img_count + 1;
        if ($img_count == 1) {
            $img = $row3['image'];
        } elseif ($img_count == 2) {
            $img3 = $row3['image'];
        }

    }
    $rating_query_avg = "SELECT ROUND(AVG(rating), 1) as star_rating from review_comment where product_id=$id  ";
    $avgresult_rating = mysqli_query($con, $rating_query_avg);
    $fetchAverage_rating = mysqli_fetch_array($avgresult_rating);
    $star_rating = $fetchAverage_rating['star_rating'];
    if ($star_rating <= 0) {
        $star_rating = "0";}

    ?>
                                            <!-- start card 1 -->
                                            <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="<?=$count_sec?>s">
                                                <div class="product">
                                                    <div class="product__thumb">
                                                        <a href="single.php?Id=<?=$id?>">
                                                            <img class="product-primary"
                                                                src="admin/dashboard/product-images/<?=$img?>"
                                                                alt="product_image">
                                                            <img class="product-secondary"
                                                                src="admin/dashboard/product-images/<?=$img3?>"
                                                                alt="product_image">
                                                        </a>
                                                        <?php
if ($sdate != null) {
        if (strtotime($sdate) <= time()) {
            // check...
            if ($chk == 1) {
                $price = $price / 2;
                // Sale..
                ?>
                                                        <div class="product__update">
                                                            <a class="#">sale</a>
                                                        </div>
                                                        <?php
}
        }
    }
    ?>
                                                        <div class="product-info mb-10">
                                                            <div class="product_category">
                                                                <span><?=$category?></span>
                                                            </div>
                                                            <!--  rating star-->
                                                            <div class="product_rating">
                                                                <?php

    for ($i = 1; $i <= 5; $i++) {
        $ratingClass = "";
        if ($i <= $star_rating) {
            $ratingClass = "start-color";
        }
        ?>
                                                                <a href="#"><i
                                                                        class="fal fa-star  <?php echo $ratingClass; ?>"></i></a>

                                                                <?php }?>

                                                            </div>
                                                            <!--rating star  -->
                                                        </div>
                                                        <div class="product__name">
                                                            <h4><a href="single.php?Id=<?=$id?>"><?=$title?></a>
                                                            </h4>
                                                            <div class="pro-price">
                                                                <p class="p-absoulute pr-1">
                                                                    <span>$</span><?=$price?>
                                                                </p>
                                                                <form action="" class="form-submit">

                                                                    <input type="hidden" class="pid" value="<?=$id?>">
                                                                    <input type="hidden" class="pname"
                                                                        value="<?=$title?>">
                                                                    <input type="hidden" class="pcategory"
                                                                        value="<?=$category?>">
                                                                    <input type="hidden" class="pprice"
                                                                        value="<?=$price?>">
                                                                    <input type="hidden" class="pimage"
                                                                        value="<?=$img?>">
                                                                    <input type="hidden" class="pcode"
                                                                        value="<?=$code?>">
                                                                    <input type="hidden" class="uid"
                                                                        value="<?=$userId?>">
                                                                    <span><a class="p-absoulute pr-2 <?php if (isset($_SESSION['uemail'])) {echo 'addItemBtn';}?>"
                                                                            href="<?php if (!isset($_SESSION['uemail'])) {echo 'login.php';}?>">add
                                                                            to cart</a></span>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product__action">
                                                            <!-- <div class="inner__action">
                                                                <div class="wishlist">
                                                                    <a href="#"><i class="fal fa-heart"></i></a>
                                                                </div>
                                                                <div class="view">
                                                                    <a href="javascript:void(0)"><i class="fal fa-eye"></i></a>
                                                                </div>
                                                                <div class="layer">
                                                                    <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card 1 -->
                                            <?php
}
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profiles">
                                <div class="container">
                                    <div class="product-active swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php
$sql = "SELECT * FROM product WHERE id != $ide limit 4";
$run = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run)) {
    $id = $row['id'];
    $title = $row['title'];
    $category = $row['category'];
    $price = $row['price'];
    $img = $row['image1'];
    $img2 = $row['image2'];
    $img3 = $row['image3'];
    $img4 = $row['image4'];

    ?>
                                            <!-- start card 2 -->
                                            <div class="product-item swiper-slide">
                                                <div class="product ">
                                                    <div class="product__thumb">
                                                        <a href="single.php">
                                                            <img class="product-primary"
                                                                src="https://themepure.net/template/gota/gota/assets/img/product/cat1.png"
                                                                alt="product_image">
                                                            <img class="product-secondary"
                                                                src="https://themepure.net/template/gota/gota/assets/img/product/cat2.png"
                                                                alt="product_image">
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
                                                            <h4><a href="shop.php">NikeCourt Air Zoom
                                                                    Prestige</a></h4>
                                                            <div class="pro-price">
                                                                <p class="p-absoulute pr-1">
                                                                    <span>$</span>680.00 -
                                                                    <span>$</span>680.00
                                                                </p>
                                                                <a class="p-absoulute pr-2" href="#">add to
                                                                    cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product__action">
                                                            <div class="inner__action">
                                                                <div class="wishlist">
                                                                    <a href="#"><i class="fal fa-heart"></i></a>
                                                                </div>
                                                                <div class="view">
                                                                    <a href="javascript:void(0)"><i
                                                                            class="fal fa-eye"></i></a>
                                                                </div>
                                                                <div class="layer">
                                                                    <a href="#"><i class="fal fa-layer-group"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card 2 -->
                                            <?php
}
?>
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
    <!-- Related Product area end -->

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
                            <a class="view_close product-p-close" href="javascript:void(0)"><i
                                    class="fal fa-times-circle"></i></a>
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
                            <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non
                                pretium
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
    <!-- review and comment start -->



    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-10 col-12 text-center mb-5">
            <div class="card">
                <div class="row justify-content-left d-flex">
                    <div class="col-md-4 d-flex flex-column">
                        <div class="rating-box">
                            <h1 class="pt-4"><?=$numRating?></h1>
                            <p class="">out of 5</p>
                        </div>
                        <div>
                            <?php

for ($i = 1; $i <= 5; $i++) {
    $ratingClass = "";
    if ($i <= $numRating) {
        $ratingClass = "start-color";
    }
    ?>
                            <span><i class="far fa-star <?php echo $ratingClass; ?>"></i></span>
                            <?php
}?>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="rating-bar0 justify-content-center">
                            <?php
$query_rating_progress = "select * from review_comment where product_id=$ide";
$query_rating_progress_result = mysqli_query($con, $query_rating_progress);
$fiveStarRating = 0;
$fourStarRating = 0;
$threeStarRating = 0;
$twoStarRating = 0;
$oneStarRating = 0;
$rateres = mysqli_query($con, $query_rating_progress);
while ($data = mysqli_fetch_assoc($rateres)) {
    $rate_db[] = $data;
    $sum_rates[] = $data['rating'];

    if ($data['rating'] == 5) {
        $fiveStarRating += 1;
    } else if ($data['rating'] == 4) {
        $fourStarRating += 1;
    } else if ($data['rating'] == 3) {
        $threeStarRating += 1;
    } else if ($data['rating'] == 2) {
        $twoStarRating += 1;
    } else if ($data['rating'] == 1) {
        $oneStarRating += 1;
    }

}

$fiveStarRatingPercent = round(($fiveStarRating / 5) * 100);
$fiveStarRatingPercent = !empty($fiveStarRatingPercent) ? $fiveStarRatingPercent . '%' : '0%';

$fourStarRatingPercent = round(($fourStarRating / 5) * 100);
$fourStarRatingPercent = !empty($fourStarRatingPercent) ? $fourStarRatingPercent . '%' : '0%';

$threeStarRatingPercent = round(($threeStarRating / 5) * 100);
$threeStarRatingPercent = !empty($threeStarRatingPercent) ? $threeStarRatingPercent . '%' : '0%';

$twoStarRatingPercent = round(($twoStarRating / 5) * 100);
$twoStarRatingPercent = !empty($twoStarRatingPercent) ? $twoStarRatingPercent . '%' : '0%';

$oneStarRatingPercent = round(($oneStarRating / 5) * 100);
$oneStarRatingPercent = !empty($oneStarRatingPercent) ? $oneStarRatingPercent . '%' : '0%';
if (!empty($rate_db)) {
    if (count($rate_db)) {
        $rate_times = count($rate_db);
        $sum_rates = array_sum($sum_rates);
        $rate_value = $sum_rates / $rate_times;

        $rate_bg = (($rate_value) / 5) * 100;

    }
} else {
    $rate_times = 0;
    $rate_value = 0;
    $rate_bg = 0;

}

?>
                            <table class="text-left mx-auto">
                                <tr>
                                    <td class="rating-label">Excellent</td>
                                    <td class="rating-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width:<?=$fiveStarRatingPercent?>" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?=$fiveStarRating?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Good</td>
                                    <td class="rating-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width:<?=$fourStarRatingPercent?>" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?=$fourStarRating?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Average</td>
                                    <td class="rating-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width:<?=$threeStarRatingPercent?>" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?=$threeStarRating?></td>

                                </tr>
                                <tr>
                                    <td class="rating-label">Poor</td>
                                    <td class="rating-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width:<?=$twoStarRatingPercent?>" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?=$twoStarRating?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Terrible</td>
                                    <td class="rating-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width:<?=$oneStarRatingPercent?>" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?=$oneStarRating?></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row d-flex ">
                    <div class="d-flex align-items-start flex-column ">
                        <h4>Product </h4>
                    </div>
                    <form id="ratingForm" method="POST" class="w-100 p-0">
                        <div class="ml-auto d-flex align-items-start flex-column">
                            <div class="form-group">

                                <button type="button" class="btn btn-warning btn-sm rateButton text-left"
                                    aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-sm rateButton"
                                    aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-sm rateButton"
                                    aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-sm rateButton"
                                    aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-kdefault btn-grey btn-sm rateButton"
                                    aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <input type="hidden" class="form-control" id="rating" name="rating" value="1">
                                <input type="hidden" class="form-control" id="product_id" name="product_id"
                                    value="<?=$ide?>">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea name="comment" id="comment" class="form-control" rows="3" required="required"
                                placeholder="Tell us about your experience*" value=""></textarea>
                        </div>

                        <!-- <div class="d-flex justify-content-end"> -->

                        <div class="ml-auto d-flex align-items-end flex-column ">
                            <button type="submit" class="btn btn-danger mt-3" id="saveReview">
                                Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">

                <?php
$query = "select * from review_comment where product_id=$ide";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {
        $time = $row["time"];
        $rating = $row["rating"];
        $comment = $row["comment"];

        ?>
                <div class="row d-flex ">
                    <div class="d-flex align-items-start flex-column col-10">
                        <h3 class="mt-2 mb-0">Mukesh Kumar</h3>
                        <div>
                            <p class="text-left"><span class="text-muted"><?=$rating?></span>
                                <?php

        for ($i = 1; $i <= 5; $i++) {
            $ratingClass = "";
            if ($i <= $rating) {
                $ratingClass = "start-color";
            }
            ?>
                                <span><i class="far fa-star <?php echo $ratingClass; ?>"></i></span> <?php }?>

                            </p>
                        </div>


                    </div>
                    <div class="ml-auto d-flex align-items-end flex-column col-2">
                        <p class="text-muted pt-5 pt-sm-3"><?php echo date('F jS, Y', strtotime($time)); ?>
                        </p>
                    </div>
                </div>
                <div class="row d-flex mt-n2">
                    <p class="content d-flex align-items-start flex-column">
                        <?=$comment?></p>
                </div>
                <hr>
                <?php
}}?>
            </div>
        </div>
        <!-- review and comment end -->
        <!-- footer area start -->
        <?php include 'partials/footer.php'?>
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
        <script src="assets/js/cart.js"></script>
</body>
<script>
// implement start rating select/deselect
$(".rateButton").click(function() {
    if ($(this).hasClass('btn-grey')) {
        $(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
        $(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass(
            'btn-warning star-selected');
        $(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass(
            'btn-grey btn-default');
    } else {
        $(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass(
            'btn-grey btn-default');
    }
    $("#rating").val($('.star-selected').length);
});
// rating form submit
$('#ratingForm').on('submit', function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
        type: 'POST',
        url: 'rating.php',
        data: formData,
        success: function(response) {
            console.log(response);
            $("#ratingForm")[0].reset();
            window.setTimeout(function() {
                window.location.reload()
            }, 1000)
            // load_data();
            // load_average_rating();

        }
    });

});
</script>

</html>