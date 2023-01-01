<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Products - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keyword ?>" />
    <meta name="description" content="<?= $configuration->description ?>">
    <meta name="author" content="<?= $configuration->author ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/icons/favicon.png') ?>">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:400,600,700', 'Poppins:300,400,500,600,700']
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
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?= base_url('assets/fonts/porto6e1d.woff2?64334846') ?>" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?= base_url('assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= base_url('assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') ?>" as="font" type="font/woff2" crossorigin>

    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
    <div class="page-wrapper">
        <?php if ($configuration->text1_status == 1) { ?>
            <div class="top-notice bg-primary text-white">
                <div class="container text-center">
                    <h5 class="d-inline-block"><?= $configuration->text1_text ?></h5>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
        <?php } ?>
        <?= $this->include('frontend/components/header') ?>

        <main class="main">
            <div class="container" style="margin-top: 20px;">
                <h5 class="heading-bottom-border text-uppercase" style="text-align: center;">Product List</h5>
                <div class="row mt-2">
                    <?php foreach ($products as $key => $value) { ?>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="<?= base_url('product/'.$value->id) ?>">
                                        <img src="assets/images/products/<?= $value->image1 ?>" width="280" height="280" alt="product">
                                        <img src="assets/images/products/<?= $value->image2 ?>" width="280" height="280" alt="product">
                                    </a>

                                    <?php if ($value->discount > 0) { ?>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-<?= $value->discount ?>%</div>
                                        </div>
                                    <?php } ?>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="<?php base_url('category/' . $value->category_id) ?>" class="product-category"><?= $value->category_name ?></a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"> <a href="<?php base_url('') ?>product.html">Ultimate 3D Bluetooth Speaker</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:<?= $value->rating / 5 * 100 ?>%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <del class="old-price"><?= "Rp. " . number_format($value->price, 0, ",", "."); ?></del>
                                        <span class="product-price"><?= "Rp. " . number_format($value->price -  $value->discount / 100 * $value->price, 0, ",", "."); ?></span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="<?= base_url('cart/store/' . $value->id. '/0/1') ?>" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>ADD TO CART</span></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- End .row -->
            </div>
        </main><!-- End .main -->

        <?= $this->include('frontend/components/footer') ?>
    </div><!-- End .page-wrapper -->

    <?= $this->include('frontend/components/overlay') ?>
    <?= $this->include('frontend/components/mobilemenu') ?>
    <?= $this->include('frontend/components/mobilenavbar') ?>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/nouislider.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/optional/isotope.pkgd.min.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>

</html>