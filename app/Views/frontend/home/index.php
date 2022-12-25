<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keywords ?>" />
    <meta name="description" content="<?= $configuration->description ?>">
    <meta name="author" content="<?= $configuration->author ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <?php if ($configuration->text1_status == 1) { ?>
            <div class="top-notice bg-primary text-white">
                <div class="container text-center">
                    <h5 class="d-inline-block"><?= $configuration->text1_text ?></h5>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
                <!-- End .container -->
            </div>
        <?php } ?>
        <?= $this->include('frontend/components/header') ?>
        <main class="main">
            <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{'loop': false}">
                <?php foreach ($sliders as $key => $value) { ?>
                    <div class="home-slide home-slide1 banner">
                        <img class="slide-bg" src="assets/images/sliders/<?= $value->image ?>" width="1903" height="499" alt="slider image">
                        <div class="container d-flex align-items-center">
                            <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                                <h4 class="text-transform-none m-b-3"><?= $value->text1 ?></h4>
                                <h2 class="text-transform-none mb-0"><?= $value->text2 ?></h2>
                                <h3 class="m-b-3"><?= $value->text3 ?></h3>
                                <h5 class="d-inline-block mb-0">
                                    <span><?= $value->text4 ?></span>
                                    <b class="coupon-sale-text text-white bg-secondary align-middle"><?= $value->text5 ?></b>
                                </h5>
                                <a href="<?= $value->text_link ?>" class="btn btn-dark btn-lg"><?= $value->text_button ?></a>
                            </div>
                            <!-- End .banner-layer -->
                        </div>
                    </div>
                    <!-- End .home-slide -->
                <?php } ?>
            </div>
            <!-- End .home-slider -->

            <div class="container">
                <div class="info-boxes-slider owl-carousel owl-theme mb-2" data-owl-options="{'dots': false, 'loop': false, 'responsive': { '576': { 'items': 2 }, '992': { 'items': 3 } } }">
                    <?php foreach ($guarantee as $key => $value) { ?>
                        <div class="info-box info-box-icon-left">
                            <i class="<?= $value->icon ?>"></i>

                            <div class="info-box-content">
                                <h4><?= $value->name ?></h4>
                                <p class="text-body"><?= $value->description ?></p>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                    <?php } ?>
                    <!-- End .info-box -->

                </div>
                <!-- End .info-boxes-slider -->

                <div class="banners-container mb-2">
                    <div class="banners-slider owl-carousel owl-theme" data-owl-options="{'dots': false }">
                        <?php foreach ($promotions as $key => $value) { ?>
                            <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                                <figure class="w-100">
                                    <img src="assets/images/promotions/<?= $value->image ?>" alt="banner" width="380" height="175" />
                                </figure>
                                <div class="banner-layer">
                                    <h3 class="m-b-2"><?= $value->text1 ?></h3>
                                    <h4 class="m-b-3 text-primary"><sup class="text-dark"><?= $value->text2 ?></h4>
                                    <a href="<?= $value->text_link ?>" class="btn btn-sm btn-dark"><?= $value->text_button ?></a>
                                </div>
                            </div>
                            <!-- End .banner -->
                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- End .container -->

            <section class="featured-products-section">
                <div class="container">
                    <h2 class="section-title heading-border ls-20 border-0">Featured Products</h2>

                    <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{'dots': false, 'nav': true}">
                        <?php foreach ($featured_products as $key => $value) { ?>
                            <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                                <figure>
                                    <a href="product">
                                        <img src="assets/images/products/<?= $value->image1 ?>" width="280" height="280" alt="product">
                                        <img src="assets/images/products/<?= $value->image2 ?>" width="280" height="280" alt="product">
                                    </a>
                                    <?php if ($value->discount > 0) { ?>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-<?= $value->discount ?></div>
                                        </div>
                                    <?php } ?>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list"><?= $value->category_name ?></div>
                                    <h3 class="product-title">
                                        <a href="product"><?= $value->name ?></a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:<?= $value->rating / 5 * 100 ?>%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price"><?= $value->price ?></del>
                                        <span class="product-price"><?= $value->price - $value->discount ?></span>
                                    </div>
                                    <!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="wishlist/store/<?= $value->id ?>" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                                        <a href="cart/store/<?= $value->id ?>" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>SELECT OPTIONS</span></a>
                                        <a href="product/details/<?= $value->id ?>" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        <?php } ?>
                    </div>
                    <!-- End .featured-proucts -->
                </div>
            </section>

            <section class="new-products-section">
                <div class="container">
                    <h2 class="section-title heading-border ls-20 border-0">New Arrivals</h2>

                    <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2" data-owl-options="{ 'dots': false, 'nav': true, 'responsive': { '992': { 'items': 4 }, '1200': { 'items': 5 } } }">
                        <?php foreach ($new_arrival_products as $key => $value) { ?>
                            <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/<?= $value->image1 ?>" width="220" height="220" alt="product">
                                        <img src="assets/images/products/<?= $value->image2 ?>" width="220" height="220" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list"><?= $value->category_name ?></div>
                                    <h3 class="product-title">
                                        <a href="product"><?= $value->name ?></a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price"><?= $value->price ?></del>
                                        <span class="product-price"><?= $value->price - $value->discount ?></span>
                                    </div>
                                    <!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="wishlist/store/<?= $value->id ?>" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                                        <a href="cart/store/<?= $value->id ?>" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="product/details/<?= $value->id ?>" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        <?php } ?>
                    </div>
                    <!-- End .featured-proucts -->
                    <?php if ($banner->status == 1) { ?>
                        <div class="banner banner-big-sale appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter" style="background: #2A95CB center/cover url('assets/images/banners/<?= $banner->image ?>');">
                            <div class="banner-content row align-items-center mx-0">
                                <div class="col-md-9 col-sm-8">
                                    <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                                        <?= $banner->text1 ?>
                                        <small class="text-transform-none align-middle"><?= $banner->text2 ?></small>
                                    </h2>
                                </div>
                                <div class="col-md-3 col-sm-4 text-center text-sm-right">
                                    <a class="btn btn-light btn-white btn-lg" href="<?= $banner->link ?>"><?= $banner->text_button ?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate" data-animation-delay="100" data-animation-name="fadeInUpShorter">Browse Our Categories
                    </h2>

                    <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer">
                        <?php foreach ($categories as $key => $value) { ?>
                            <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                                <a href="category">
                                    <figure>
                                        <img src="assets/images/categories/<?= $value->image ?>" alt="category" width="280" height="240" />
                                    </figure>
                                    <div class="category-content">
                                        <h3><?= $value->category_name ?></h3>
                                        <!-- <span><mark class="count">3</mark> products</span> -->
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <section class="feature-boxes-container">
                <div class="container appear-animate" data-animation-name="fadeInUpShorter">
                    <div class="row">
                        <?php foreach ($supports as $key => $value) { ?>
                            <div class="col-md-4">
                                <div class="feature-box px-sm-5 feature-box-simple text-center">
                                    <div class="feature-box-icon">
                                        <i class="<?= $value->icon ?>"></i>
                                    </div>

                                    <div class="feature-box-content p-0">
                                        <h3><?= $value->text1 ?></h3>
                                        <h5><?= $value->text2 ?></h5>

                                        <p><?= $value->text3 ?></p>
                                    </div>
                                    <!-- End .feature-box-content -->
                                </div>
                                <!-- End .feature-box -->
                            </div>
                        <?php } ?>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container-->
            </section>
            <!-- End .feature-boxes-container -->
            <?php if ($exclusive->status == 1) { ?>
                <section class="promo-section bg-dark" data-parallax="{'speed': 2, 'enableOnMobile': true}" data-image-src="assets/images/exclusive/<?= $exclusive->image ?>">
                    <div class="promo-banner banner container text-uppercase">
                        <div class="banner-content row align-items-center text-center">
                            <div class="col-md-4 ml-xl-auto text-md-right appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                                <h2 class="mb-md-0 text-white"><?= $exclusive->text1 ?><br><?= $exclusive->text2 ?></h2>
                            </div>
                            <div class="col-md-4 col-xl-3 pb-4 pb-md-0 appear-animate" data-animation-name="fadeIn" data-animation-delay="300">
                                <a href="<?= $exclusive->text_link ?>" class="btn btn-dark btn-black ls-10"><?= $exclusive->text_button ?></a>
                            </div>
                            <div class="col-md-4 mr-xl-auto text-md-left appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="600">
                                <h4 class="mb-1 mt-1 font1 coupon-sale-text p-0 d-block ls-n-10 text-transform-none">
                                    <b><?= $exclusive->text3 ?></b>
                                </h4>
                                <h5 class="mb-1 coupon-sale-text text-white ls-10 p-0"><i class="ls-0"><?= $exclusive->text4 ?></i><b class="text-white bg-secondary ls-n-10"><?= $exclusive->text5 ?></b> <?= $exclusive->text6 ?></h5>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <section class="blog-section pb-0">
                <div class="container">
                    <h2 class="section-title heading-border border-0 appear-animate" data-animation-name="fadeInUp">
                        Latest News</h2>
                    <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeIn" data-owl-options="{'loop': false, 'margin': 20, 'autoHeight': true, 'autoplay': false, 'dots': false, 'items': 2, 'responsive': { '0': { 'items': 1 }, '480': { 'items': 2 }, '576': { 'items': 3 }, '768': { 'items': 4 } } }">
                        <?php foreach ($blogs as $key => $value) { ?>                            
                            <article class="post">
                                <div class="post-media">
                                    <a href="blog/show/<?= $value->id ?>">
                                        <img src="assets/images/blog/<?= $value->image ?>" alt="Post" width="225" height="280">
                                    </a>
                                    <div class="post-date">
                                        <span class="day">26</span>
                                        <span class="month">Feb</span>
                                    </div>
                                </div>
                                <!-- End .post-media -->
    
                                <div class="post-body">
                                    <h2 class="post-title">
                                        <a href="single.html"><?= $value->title ?></a>
                                    </h2>
                                    <div class="post-content">
                                        <p><?= $value->short_description ?>...</p>
                                    </div>
                                    <!-- End .post-content -->
                                    <a href="single.html" class="post-comment">0 Comments</a>
                                </div>
                                <!-- End .post-body -->
                            </article>
                        <?php } ?>
                        <!-- End .post -->
                    </div>

                    <hr class="mt-0 m-b-5">

                    <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-duration="500" data-owl-options="{
					'margin': 0}">
                        <?php foreach ($brands as $key => $value) { ?>
                            <img src="assets/images/brands/<?= $value->image ?>" width="130" height="56" alt="brand">
                        <?php } ?>
                    </div>
                    <!-- End .brands-slider -->

                    <hr class="mt-4 m-b-5">

                    <div class="product-widgets-container row pb-2">
                        <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                            <h4 class="section-sub-title">Featured Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-1.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-1-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-2.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-2-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Brown Women Casual HandBag</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-3.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-3-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Circled Ultimate 3D Speaker</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                            <h4 class="section-sub-title">Best Selling Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-4.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-4-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Blue Backpack for the Young -
                                            S</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-5.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-5-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Casual Spring Blue Shoes</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-6.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-6-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Men Black Gentle Belt</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="800">
                            <h4 class="section-sub-title">Latest Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-7.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-7-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual Glasses</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-8.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-8-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual Glasses</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-9.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-9-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Black Men Casual Glasses</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="1100">
                            <h4 class="section-sub-title">Top Rated Products</h4>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-10.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-10-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Basketball Sports Blue Shoes</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-11.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-11-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Men Sports Travel Bag</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/small/product-12.jpg" width="84" height="84" alt="product">
                                        <img src="assets/images/products/small/product-12-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title"> <a href="product.html">Brown HandBag</a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                    <!-- End .row -->
                </div>
            </section>
        </main>
        <!-- End .main -->

        <?= $this->include('frontend/components/footer') ?>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->


    <?= $this->include('frontend/components/overlay') ?>

    <?= $this->include('frontend/components/mobilemenu') ?>
    <?= $this->include('frontend/components/mobilenavbar') ?>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/optional/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>