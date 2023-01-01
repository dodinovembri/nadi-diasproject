<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Categories - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keyword ?>" />
    <meta name="description" content="<?= $configuration->description ?>">
    <meta name="author" content="<?= $configuration->author ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
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
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle">
                                    <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                        <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                        <path d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                        <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                        <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                        <path d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                    </svg>
                                    <span>Filter</span>
                                </a>
                                <!-- End .toolbox-item -->
                            </div>
                            <!-- End .toolbox-left -->

                        </nav>

                        <div class="row">
                            <?php foreach ($products as $key => $value) { ?>
                                <div class="col-6 col-sm-4">
                                    <div class="product-default">
                                        <figure>
                                            <a href="<?= base_url('product/'. $value->id) ?>">
                                                <img src="<?= base_url('assets/images/products/' . $value->image1) ?>" width="280" height="280" alt="product" />
                                                <img src="<?= base_url('assets/images/products/' . $value->image2) ?>" width="280" height="280" alt="product" />
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
                                            <h3 class="product-title">
                                                <a href="product"><?= $value->product_name ?></a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:<?= $value->rating / 5 * 100 ?>%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                                <del class="old-price"><?= "Rp. " . number_format($value->price, 0, ",", "."); ?></del>
                                                <span class="product-price"><?= "Rp. " . number_format($value->price -  $value->discount / 100 * $value->price, 0, ",", "."); ?></span>
                                            </div>
                                            <div class="product-action">
                                                <a href="<?= base_url('cart/store/' . $value->id).'/'.$value->category_id ?>" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>ADD TO CART</span></a>
                                            </div>
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- End .row -->
                    </div>

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <?php foreach ($product_categories as $key => $value) { ?>
                                                <li><a href="<?= base_url('category/' . $value->id) ?>" aria-controls="widget-category-1"><?= $value->name ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

            <div class="mb-4"></div>
        </main>

        <?= $this->include('frontend/components/footer') ?>
    </div>

    <?= $this->include('frontend/components/overlay') ?>
    <?= $this->include('frontend/components/mobilemenu') ?>
    <?= $this->include('frontend/components/mobilenavbar') ?>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/nouislider.min.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>

</html>