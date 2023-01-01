<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category - <?= $configuration->title ?></title>
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

        <!-- Header -->
        <?= $this->include('frontend/components/header') ?>

        <!-- Main -->
        <main class="main">
            <div class="container">
                <section class="simple-section" style="margin-top: 20px;">
                    <h5 class="heading-bottom-border text-uppercase" style="text-align: center;">Product Categories</h5>
                    <div class="row">
                        <?php foreach ($product_categories as $key => $value) { ?>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="product-category">
                                    <a href="<?= base_url('category/' . $value->id) ?>">
                                        <figure>
                                            <img src="<?= base_url('assets/images/product_categories/' . $value->image) ?>" width="300" height="300" alt="category">
                                        </figure>
                                        <div class="category-content">
                                            <h5><?= $value->name ?></h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </main>

        <!-- Footer -->
        <?= $this->include('frontend/components/footer') ?>
    </div>

    <!-- Mobile components -->
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