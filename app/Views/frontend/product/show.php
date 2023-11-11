<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keyword ?>" />
    <meta name="description" content="<?= $configuration->description ?>">
    <meta name="author" content="<?= $configuration->author ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/icons/favicon.png') ?>">
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '<?= base_url('assets/js/webfont.js') ?>';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
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
        <!-- End .header -->

        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                    </ol>
                </nav>

                <div class="product-single-container product-single-default">

                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <?php if ($product->discount > 0) { ?>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-<?= $product->discount ?>%</div>
                                    </div>
                                <?php } ?>

                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="<?= base_url('assets/images/products/' . $product->image1) ?>" width="468" height="468" alt="product" />
                                    </div>
                                    <?php if ($product->image2) { ?>
                                        <div class="product-item">
                                            <img class="product-single-image" src="<?= base_url('assets/images/products/' . $product->image2) ?>" width="468" height="468" alt="product" />
                                        </div>
                                    <?php } ?>
                                    <?php if ($product->image3) { ?>
                                        <div class="product-item">
                                            <img class="product-single-image" src="<?= base_url('assets/images/products/' . $product->image3) ?>" width="468" height="468" alt="product" />
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>

                            <div class="prod-thumbnail owl-dots">
                                <div class="owl-dot">
                                    <img src="<?= base_url('assets/images/products/' . $product->image1) ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <?php if ($product->image2) { ?>
                                    <div class="owl-dot">
                                        <img src="<?= base_url('assets/images/products/' . $product->image2) ?>" width="110" height="110" alt="product-thumbnail" />
                                    </div>
                                <?php } ?>
                                <?php if ($product->image3) { ?>
                                    <div class="owl-dot">
                                        <img src="<?= base_url('assets/images/products/' . $product->image3) ?>" width="110" height="110" alt="product-thumbnail" />
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title"><?= $product->product_name ?></h1>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:<?= $product->rating / 5 * 100 ?>%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->

                            </div>
                            <!-- End .ratings-container -->

                            <hr class="short-divider">

                            <div class="price-box">
                                <del class="old-price"><?= "Rp. " . number_format($product->price, 0, ",", "."); ?></del>
                                <span class="product-price"><?= "Rp. " . number_format($product->price -  $product->discount / 100 * $product->price, 0, ",", "."); ?></span>
                            </div>
                            <!-- End .price-box -->

                            <div class="product-desc">
                                <p><?= $product->short_description ?></p>
                            </div>
                            <!-- End .product-desc -->

                            <ul class="single-info-list">

                                <li>
                                    SKU: <strong><?= $product->sku ?></strong>
                                </li>

                                <li>
                                    CATEGORY: <strong><a href="<?= base_url('category/' . $product->category_id) ?>" class="product-category"><?= $product->category_name ?></a></strong>
                                </li>

                                <li>
                                    TAGs: <strong><?= $product->tag ?></strong>
                                </li>
                            </ul>

                            <div class="product-action">

                                <a href="<?= base_url('cart/store/' . $product->id . '/0/0/1') ?>" class="btn btn-dark mr-2" title="Add to Cart">Add to
                                    Cart</a>

                            </div>
                            <!-- End .product-action -->

                            <hr class="divider mb-0 mt-0">

                        </div>
                        <!-- End .product-single-details -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p><?= $product->description ?></p>
                            </div>
                            <!-- End .product-desc-content -->
                        </div>
                        <!-- End .tab-pane -->
                    </div>
                    <!-- End .tab-content -->
                </div>
                <!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title">Related Products</h2>

                    <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                        <?php foreach ($related_products as $key => $value) { ?>
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="<?= base_url('assets/images/products/' . $value->image1) ?>" width="280" height="280" alt="product">
                                        <img src="<?= base_url('assets/images/products/' . $value->image2) ?>" width="280" height="280" alt="product">
                                    </a>
                                    <?php if ($value->discount > 0) { ?>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-<?= $value->discount ?>%</div>
                                        </div>
                                    <?php } ?>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list"><?= $value->category_name ?></div>
                                    <h3 class="product-title"><?= $value->product_name ?></h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:<?= $value->rating / 5 * 100 ?>%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <del class="old-price"><?= "Rp. " . number_format($value->price, 0, ",", "."); ?></del>
                                        <span class="product-price"><?= "Rp. " . number_format($value->price -  $value->discount / 100 * $value->price, 0, ",", "."); ?></span>
                                    </div>
                                    <!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="<?= base_url('cart/store/' . $product->id . '/0/0/1') ?>" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>SELECT OPTIONS</span></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        <?php } ?>
                    </div>
                    <!-- End .products-slider -->
                </div>
                <!-- End .products-section -->

                <hr class="mt-0 m-b-5" />

            </div>
            <!-- End .container -->
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
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins.min.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>

</html>