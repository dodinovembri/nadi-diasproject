<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keyword ?>" />
    <meta name="description" content="<?= $configuration->description ?>">
    <meta name="author" content="<?= $configuration->author ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/icons/favicon.png') ?>">
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400', 'Playfair+Display:900']
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
        <!-- End .top-notice -->

        <?= $this->include('frontend/components/header') ?>
        <!-- End .header -->

        <main class="main about">
            <div class="page-header page-header-bg text-left" style="background: 50%/cover #D4E1EA url('assets/images/page-header-bg.jpg');">
                <div class="container">
                    <h1>
                        <span><?= $about->text1 ?></span>
                        <?= $about->text2 ?>
                    </h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->

            <div class="about-section">
                <div class="container">
                    <h2 class="subtitle"><?= $about->text3 ?></h2>
                    <p style="text-align: justify;"><?= $about->description ?></p>
                </div><!-- End .container -->
            </div><!-- End .about-section -->
        </main><!-- End .main -->
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
    <script src="<?= base_url('assets/js/plugins/jquery.countTo.js') ?>"></script>
    <!-- Main JS File -->
    <script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>

</html>