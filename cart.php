<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Everland | Cart</title>
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

    <!-- breadcrumb area start -->
    <div class="page-layout" data-background="https://themepure.net/template/gota/gota/assets/img/slider/shop.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-area text-center">
                        <h2 class="page-title">Cart</h2>
                        <div class="breadcrumb-menu">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="cart.php">cart</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <div class="f_cart_area pt-110 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
                    <div class="cart_table">
                        <table>
                            <tr>
                                <td>Product</td>
                                <td></td>
                                <td>price</td>
                                <td>Quantity</td>
                                <td>Total</td>
                                <?php
                                $stmt = $con->prepare('SELECT * FROM cart WHERE user_id=?');
                                $stmt->bind_param('i',$userId);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $grand_total = 0;
                                while ($row = $result->fetch_assoc()):
                              ?>
                            </tr>
                            <tbody>
                                <tr class="max-width-set">
                                    <td>
                                        <img src="admin/dashboard/product-images/<?= $row['product_image'] ?>" alt="">
                                    </td>
                                    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                    <td><?= $row['product_name'] ?></td>
                                    <td>$<?= number_format($row['product_price'],2); ?></td>
                                    <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                    <td>
                                        <div class="viewcontent__action single_action pt-30">
                                            <span><input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>"></span>
                                        </div>
                                    </td>
                                    <td>
                                        $<?= number_format($row['total_price'],2); ?>
                                    </td>
                                    <td class="width-set">
                                        <a href="includes/cart-item.php?remove=<?= $row['id'] ?>" onclick="return confirm('Are you sure want to remove this item?');"><i class="fal fa-times-circle"></i></a>
                                    </td>
                                </tr>
                                <?php $grand_total += $row['total_price']; ?>
                                    <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                                <tr class="design-footer">
                                    <!-- <td>
                                        <input type="text" placeholder="Coupon Code">
                                    </td>
                                    <td><button type="submit">Apply Coupon</button></td> -->
                                    <td colspan="3"><a href="shop.php">Continue Shopping</a></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="cart__acount">
                        <h5>Cart totals</h5>
                        <table>
                            <!-- <tr class="first-child">
                                <td>Subtotal</td>
                                <td>$18.00</td>
                            </tr> -->
                            <tr class="first-child lastchild">
                                <td>Shipping</td>
                                <td>Enter your address to view shipping options <br>
                                    Calculate shipping</td>
                            </tr>
                            <tr class="first-child">
                                <td>Total</td>
                                <td>$<?= number_format($grand_total,2); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="checkout.php" class="<?= ($grand_total > 1) ? '' : 'disabled'; ?>"><input type="submit" value="procced to checkout"></a>
                                </td>
                            </tr>
                        </table>
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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function(e) {
        e.preventDefault();
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'includes/cart-item.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'includes/cart-item.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>