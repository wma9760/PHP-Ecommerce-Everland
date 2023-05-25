<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Everland | Blog</title>
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

    <!-- start blog details area -->
    <section class="blog-aread pt-20">
        <div class="container">
            <div class="row">
                <?php
                    $ide = $_GET['Id'];
                    $sql = "SELECT * FROM blog WHERE id=$ide";
                    $run_blog = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($run_blog);
                    $id = $row['id'];
                    $img = $row['img'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $author = $row['author'];
                    $time = $row['created_time'];
                    ?>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="blogitem blogitem2">
                        <div class="blogitem__thumb">
                            <img src="admin/dashboard/<?= $img ?>" alt="blogthumb" />
                        </div>
                        <div class="blogitem__content">
                            <h2 class="blog-title-2"><?= $title ?> </h2>
                            <div class="blogitem__content--meta">
                                <ul>
                                    <li>BY: <span style="text-transform: uppercase;"><?= $author ?></span></li>
                                    <li><?php echo date('F jS, Y',strtotime($time)); ?></li>
                                    <!-- <li><span>02 COMMENTS</span></li> -->
                                </ul>
                            </div>
                            <p>
                                <?= $description ?>
                            </p>
                            <!-- <div class="blogitem__quote">
                                <h5>“But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain wasNeque porro quisquam est qui dolorem ipsum quia dolor sit amet...”</h5>
                            </div> -->
                            <!-- <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the of the pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p> -->
                            <!-- <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="blog__readableimge mb-30">
                                        <img src="https://themepure.net/template/gota/gota/assets/img/blog/post-02.jpg" alt="redable" />
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="blog__readableimge mb-30">
                                        <img src="https://themepure.net/template/gota/gota/assets/img/blog/post-01.jpg" alt="redable" />
                                    </div>
                                </div>
                                <p>Potenti fusce himenaeos hac aenean quis donec vivamus aliquet, wprdpress integer inceptos curae sollicitudin in class sociosqu netus, euismod tempus fermentum odio gravida eleifend viverra pulvinar inceptos ligula consectetur potenti ante porttitor tristique curae scelerisque tristique, dictum eu donec conubia sit rutrum duis viverra in commodo, nisi habitasse viverra praesent a maecenas odio erat tristique praesent .</p>
                                <p>Sem conubia primis proin libero ultrices sem nullam aenean, faucibus cursus hendrerit ornare purus nulla hac, augue mollis in taciti suspendisse ullamcorper sapien velit nibh dapibus id phasellus venenatis porta molestie justo ligula, magna integer sit amet elementum ut himenaeos quam cursus, ipsum aliquam rhoncus tempor erat donec lectus risus.</p>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="blog-right bg-white mb-50">
                        <div class="columndivide pl-30">
                            <div class="columndivide__tags">
                                <ul>
                                    <li><a href="blog.php">html</a></li>
                                    <li><a href="blog.php">CSS</a></li>
                                    <li><a href="blog.php">WordPress</a></li>
                                    <li><a href="blog.php">php</a></li>
                                </ul>
                            </div>
                            <div class="columndivide__icon d-none d-md-block">
                                <ul>
                                    <li>Share :</li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-comments">
                            <div class="post-comment-title mb-30 mt-60 pl-30">
                                <h3 class="comments-title">Comments</h3>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    <li>
                                        <div class="comments-box pl-15">
                                            <div class="comments-avatar">
                                                <img src="https://themepure.net/template/gota/gota/assets/img/blog/commenter1.jpg" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>David Angel Makel</h5>
                                                    <span class="post-meta">October 26, 2020</span>
                                                    <div class="commentstime d-none d-sm-block">
                                                        <span>10 minutes ago</span>
                                                    </div>
                                                </div>
                                                <p>Potenti fusce himenaeos hac aenea quis donec vivamus aliquet, wprdpress inge fpr inceptos curae sollicitudin in class sociosqu netus.</p>
                                                <a href="#" class="comment-reply"> <i class="arrow_back"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="children ml-100">
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="https://themepure.net/template/gota/gota/assets/img/blog/commenter2.jpg" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Zahid hasan</h5>
                                                    <span class="post-meta">October 27, 2020</span>
                                                    <div class="commentstime d-none d-sm-block">
                                                        <span>10 minutes ago</span>
                                                    </div>
                                                </div>
                                                <p>Potenti fusce himenaeos hac aenea quis donec vivamus aliquet, wprdpress inge fpr inceptos curae sollicitudin in class sociosqu netus.</p>
                                                <a href="#" class="comment-reply"> <i class="arrow_back"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="children">
                                        <div class="comments-box pl-15">
                                            <div class="comments-avatar">
                                                <img src="https://themepure.net/template/gota/gota/assets/img/blog/commenter3.jpg" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Alen Caster</h5>
                                                    <span class="post-meta">October 28, 2020</span>
                                                    <div class="commentstime d-none d-sm-block">
                                                        <span>10 minutes ago</span>
                                                    </div>
                                                </div>
                                                <p>Potenti fusce himenaeos hac aenea quis donec vivamus aliquet, wprdpress inge fpr inceptos curae sollicitudin in class sociosqu netus.</p>
                                                <a href="#" class="comment-reply"> <i class="arrow_back"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-comment-form mb-130">
                            <h4 class="post_comments comments-title">Leave your comments</h4>
                            <form class="pt-20" action="#">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="post-input">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="post-input">
                                            <input type="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="post-input bg-form-color">
                                            <textarea placeholder="MESSAGE"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="post-check mb-10 pt-10">
                                            <button type="submit" class="btn btn-comment">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div> -->
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="sidebar__wrapper mb-100">
                        <!-- <div class="mainBlog text-center mb-50">
                            <div class="blog__widget">
                                <div class="mainBlog__thumb">
                                    <img src="https://themepure.net/template/gota/gota/assets/img/blog/widget-blog.png" alt="">
                                </div>
                                <div class="mainBlog__content pt-10">
                                    <p>There are many variations of passages of<br> lorem ipsum available, but the majority have<br> suffered alteration in some form, by injected<br> humour or randomised words which don’t <br>look even slightly believable.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="search__widget mb-35">
                            <h4 class="mb-40 blog-s-title">Search</h4>
                            <div class="custom-form">
                                <form action="#" method="POST">
                                    <input type="text" placeholder="search . . .">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div> -->
                        <?php
                            $sql3 = "SELECT * FROM blog WHERE id != $ide ORDER BY id DESC limit 1";
                            $run_blog2 = mysqli_query($con, $sql3);
                            $row3 = mysqli_fetch_array($run_blog2);
                            $idt = $row3['id'];
                            $img = $row3['img'];
                            $title = $row3['title'];
                            $time = $row3['created_time'];
                        ?>
                        <div class="common-widget mb-50">
                            <h4 class="mb-40 blog-s-title">Recent Post</h4>
                            <div class="singleBlog mb-30">
                                <img src="admin/dashboard/<?= $img ?>" alt="">
                                <div class="singleBlog__content">
                                    <p>
                                        <?= $title ?>
                                    </p>
                                    <span><?php echo date('F jS, Y',strtotime($time)); ?></span>
                                </div>
                            </div>
                            
                             <?php
                            $sql2 = " SELECT * FROM blog WHERE id != $ide and id != $idt ORDER BY id DESC limit 5 ";
                            $run2 = mysqli_query($con, $sql2);
                            while ($row2 = mysqli_fetch_array($run2)) {
                                $id = $row2['id'];
                                $img = $row2['img'];
                                $admin = $row2['author'];
                                $title = $row2['title'];
                                $time = $row2['created_time'];

                            ?>   
                            <div class="b_single pt-30 mb-20">
                                <div class="b_single__thumb">
                                    <img src="admin/dashboard/<?= $img ?>" alt="">
                                </div>
                                <div class="b_single__content">
                                    <a href="blog-details.php?Id=<?= $id ?>"><?= $title ?> </a>
                                    <span><?php echo date('F jS, Y',strtotime($time)); ?></span>
                                </div>
                            </div>
                            <?php
                                }
                                ?>
                            <!-- <div class="b_single pt-30 mb-20">
                                <div class="b_single__thumb">
                                    <img src="https://themepure.net/template/gota/gota/assets/img/blog/1.jpg" alt="">
                                </div>
                                <div class="b_single__content">
                                    <a href="blog-details.php">Take A Look At The Most Photo </a>
                                    <span>August 4, 2020</span>
                                </div>
                            </div>
                            <div class="b_single pt-30 mb-20">
                                <div class="b_single__thumb">
                                    <img src="https://themepure.net/template/gota/gota/assets/img/blog/8.jpg" alt="">
                                </div>
                                <div class="b_single__content">
                                    <a href="blog-details.php">Simple & Easy DIY Flower Deco </a>
                                    <span>August 4, 2020</span>
                                </div>
                            </div>
                            <div class="b_single pt-30 mb-20">
                                <div class="b_single__thumb">
                                    <img src="https://themepure.net/template/gota/gota/assets/img/blog/3.jpg" alt="">
                                </div>
                                <div class="b_single__content">
                                    <a href="blog-details.php">Sunglasses To Wear This Summer </a>
                                    <span>August 4, 2020</span>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="common-widget mb-50">
                            <h4 class="mb-40 blog-s-title">Categories</h4>
                            <div class="blog-category">
                                <ul>
                                    <li><a href="#">creative<span>(5)</span></a></li>
                                    <li><a href="#">image <span>(4)</span></a></li>
                                    <li><a href="#">music<span>(2)</span></a></li>
                                    <li><a href="#">travel<span>(5)</span></a></li>
                                    <li><a href="#">uncategorized<span>(5)</span></a></li>
                                    <li><a href="#">videos<span>(3)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-widget newsletter mb-50">
                            <h4 class="mb-20 blog-s-title">Join Our List</h4>
                            <p>Subscribe to our newsletter and stay updated<br> to our best offers and deals!</p>
                            <div class="newsletter">
                                <form action="#">
                                    <input type="email" placeholder="subscribe our newsletter">
                                    <input type="submit" value="Subscribe">
                                </form>
                            </div>
                        </div>
                        <div class="common-widget padding-remove mb-50">
                            <h4 class="mb-20 blog-s-title">Tag</h4>
                            <div class="tags">
                                <a href="#">Basketball</a>
                                <a href="#">Handbag</a>
                                <a href="#">Jackets</a>
                                <a href="#">Kids & Young</a>
                                <a href="#">Training Wear</a>
                                <a href="#">Women’s</a>
                            </div>
                        </div>
                        <div class="common-widget instagram">
                            <h4 class="mb-20 blog-s-title">Instagram</h4>
                            <div class="instagram-images pt-20 text-center">
                                <a class="popup-image" href="https://themepure.net/template/gota/gota/assets/img/blog/s1.jpg"><img src="https://themepure.net/template/gota/gota/assets/img/blog/s1.jpg" alt=""></a>
                                <a class="popup-image" href="https://themepure.net/template/gota/gota/assets/img/blog/s2.jpg"><img src="https://themepure.net/template/gota/gota/assets/img/blog/s2.jpg" alt=""></a>
                                <a class="popup-image" href="https://themepure.net/template/gota/gota/assets/img/blog/s3.jpg"><img src="https://themepure.net/template/gota/gota/assets/img/blog/s3.jpg" alt=""></a>
                                <a class="popup-image" href="https://themepure.net/template/gota/gota/assets/img/blog/s4.jpg"><img src="https://themepure.net/template/gota/gota/assets/img/blog/s4.jpg" alt=""></a>
                                <a class="popup-image" href="https://themepure.net/template/gota/gota/assets/img/blog/s5.jpg"><img src="https://themepure.net/template/gota/gota/assets/img/blog/s5.jpg" alt=""></a>
                                <a class="popup-image" href="https://themepure.net/template/gota/gota/assets/img/blog/s6.jpg"> <img src="https://themepure.net/template/gota/gota/assets/img/blog/s6.jpg" alt=""></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- start blog details end -->

    </main>
    <!-- footer area start -->
    <?php include 'partials/footer.php' ?>
    <!-- footer area end -->







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
    <script src="assets/js/main.js"></script>
    <!-- for cart -->
    <script src="assets/js/cart.js"></script>
</body>

</html>