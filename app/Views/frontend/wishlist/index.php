<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wishlist - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keywords ?>" />
    <meta name="description" content="<?= $configuration->description ?>">
    <meta name="author" content="<?= $configuration->author ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/icons/favicon.png') ?>">
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
        <div class="top-notice bg-primary text-white">
            <div class="container text-center">
                <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="category.html" class="category">MEN</a>
                <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only.</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div><!-- End .container -->
        </div><!-- End .top-notice -->

        <?= $this->include('frontend/components/header') ?>

        <main class="main">
            <div class="page-header">
                <div class="container d-flex flex-column align-items-center">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <div class="container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Wishlist
                                </li>
                            </ol>
                        </div>
                    </nav>

                    <h1>Wishlist</h1>
                </div>
            </div>

            <div class="container">
                <div class="wishlist-title">
                    <h2 class="p-2">My wishlist on Porto Shop 4</h2>
                </div>
                <div class="wishlist-table-container">
                    <table class="table table-wishlist mb-0">
                        <thead>
                            <tr>
                                <th class="thumbnail-col"></th>
                                <th class="product-col">Product</th>
                                <th class="price-col">Price</th>
                                <th class="status-col">Stock Status</th>
                                <th class="action-col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="product-row">
                                <td>
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="assets/images/products/product-4.jpg" alt="product">
                                        </a>

                                        <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                    </figure>
                                </td>
                                <td>
                                    <h5 class="product-title">
                                        <a href="product.html">Men Watch</a>
                                    </h5>
                                </td>
                                <td class="price-box">$17.90</td>
                                <td>
                                    <span class="stock-status">In stock</span>
                                </td>
                                <td class="action">
                                    <a href="ajax/product-quick-view.html" class="btn btn-quickview mt-1 mt-md-0" title="Quick View">Quick
                                        View</a>
                                    <button class="btn btn-dark btn-add-cart product-type-simple btn-shop">
                                        ADD TO CART
                                    </button>
                                </td>
                            </tr>

                            <tr class="product-row">
                                <td>
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="assets/images/products/product-5.jpg" alt="product">
                                        </a>

                                        <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                    </figure>
                                </td>
                                <td>
                                    <h5 class="product-title">
                                        <a href="product.html">Men Cap</a>
                                    </h5>
                                </td>
                                <td class="price-box">$17.90</td>
                                <td>
                                    <span class="stock-status">In stock</span>
                                </td>
                                <td class="action">
                                    <a href="ajax/product-quick-view.html" class="btn btn-quickview mt-1 mt-md-0" title="Quick View">Quick
                                        View</a>
                                    <a href="product.html" class="btn btn-dark btn-add-cart btn-shop">
                                        SELECT OPTION
                                    </a>
                                </td>
                            </tr>

                            <tr class="product-row">
                                <td>
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="assets/images/products/product-6.jpg" alt="product">
                                        </a>

                                        <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                    </figure>
                                </td>
                                <td>
                                    <h5 class="product-title">
                                        <a href="product.html">Men Black Gentle Belt</a>
                                    </h5>
                                </td>
                                <td class="price-box">$17.90</td>
                                <td>
                                    <span class="stock-status">In stock</span>
                                </td>
                                <td class="action">
                                    <a href="ajax/product-quick-view.html" class="btn btn-quickview mt-1 mt-md-0" title="Quick View">Quick
                                        View</a>
                                    <a href="product.html" class="btn btn-dark btn-add-cart btn-shop">
                                        SELECT OPTION
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .container -->
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

    <!-- Main JS File -->
    <script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>
</html>