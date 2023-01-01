<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkouts - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keyword ?>" />
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

        <main class="main main-test">
            <div class="container checkout-container">
                <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                    <li class="disabled">
                        <a href="void::">Shopping Cart</a>
                    </li>
                    <li class="disabled">
                        <a href="void::">Checkout</a>
                    </li>
                    <li class="active">
                        <a href="#">Order Complete</a>
                    </li>
                </ul>
                <div class="row">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="col-md-12">
                                    <div class="order-summary">
                                    <table class="table table-mini-cart">
                                            <tr>
                                                <td class="product-col">

                                                    <h3>ORDER CONFIRMATION </h3>
                                                </td>

                                                <td class="price-col">

                                                    <h3># <?= $order->order_number ?> </h3>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="table table-mini-cart">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Product</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $total_product = 0;
                                                foreach ($orders as $key => $value) { ?>
                                                    <tr>
                                                        <td class="product-col">
                                                            <h3 class="product-title">
                                                                <?= $value->product_name ?> x
                                                                <span class="product-qty"><?= $value->order_qty ?></span>
                                                            </h3>
                                                        </td>

                                                        <td class="price-col">
                                                            <span><?= "Rp. " . number_format($value->total_price, 0, ",", "."); ?></span>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>

                                                <tr class="order-total">
                                                    <td>
                                                        <h4>Total</h4>
                                                    </td>
                                                    <td>
                                                        <b class="total-price"><span><?= "Rp. " . number_format($order->total, 0, ",", "."); ?></span></b>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="payment-methods">
                                            <h4 class="">Your Shipping Address</h4>
                                            <div class="sicon-location-pin">
                                                <p>
                                                    <?= $account->address ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .row -->
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