<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About - <?= $configuration->title ?></title>
    <meta name="keywords" content="<?= $configuration->keywords ?>" />
    <meta name="description" content="<?= $configuration->description ?>">
    <meta name="author" content="<?= $configuration->author ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400', 'Playfair+Display:900']
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
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
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
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-notice -->

        <?= $this->include('frontend/components/header') ?>
        <!-- End .header -->

        <main class="main about">
            <div class="page-header page-header-bg text-left" style="background: 50%/cover #D4E1EA url('assets/images/page-header-bg.jpg');">
                <div class="container">
                    <h1><span>ABOUT US</span>
                        OUR COMPANY</h1>
                    <a href="contact.html" class="btn btn-dark">Contact</a>
                </div><!-- End .container -->
            </div><!-- End .page-header -->

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="about-section">
                <div class="container">
                    <h2 class="subtitle">OUR STORY</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>

                    <p class="lead">“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model search for evolved over sometimes by accident, sometimes on purpose ”</p>
                </div><!-- End .container -->
            </div><!-- End .about-section -->

            <div class="features-section bg-gray">
                <div class="container">
                    <h2 class="subtitle">WHY CHOOSE US</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature-box bg-white">
                                <i class="icon-shipped"></i>

                                <div class="feature-box-content p-0">
                                    <h3>Free Shipping</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industr.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-lg-4">
                            <div class="feature-box bg-white">
                                <i class="icon-us-dollar"></i>

                                <div class="feature-box-content p-0">
                                    <h3>100% Money Back Guarantee</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industr.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-lg-4">
                            <div class="feature-box bg-white">
                                <i class="icon-online-support"></i>

                                <div class="feature-box-content p-0">
                                    <h3>Online Support 24/7</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industr.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .features-section -->

            <div class="testimonials-section">
                <div class="container">
                    <h2 class="subtitle text-center">HAPPY CLIENTS</h2>

                    <div class="testimonials-carousel owl-carousel owl-theme images-left" data-owl-options="{
						'margin': 20,
                        'lazyLoad': true,
                        'autoHeight': true,
                        'dots': false,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '992': {
                                'items': 2
                            }
                        }
                    }">
                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="assets/images/clients/client1.png" alt="client">
                                </figure>

                                <div>
                                    <strong class="testimonial-title">John Smith</strong>
                                    <span>SMARTWAVE CEO</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                                    dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->

                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="assets/images/clients/client2.png" alt="client">
                                </figure>

                                <div>
                                    <strong class="testimonial-title">Bob Smith</strong>
                                    <span>SMARTWAVE CEO</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                                    dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->

                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="assets/images/clients/client1.png" alt="client">
                                </figure>

                                <div>
                                    <strong class="testimonial-title">John Smith</strong>
                                    <span>SMARTWAVE CEO</span>
                                </div>
                            </div><!-- End .testimonial-owner -->

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                                    dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                            </blockquote>
                        </div><!-- End .testimonial -->
                    </div><!-- End .testimonials-slider -->
                </div><!-- End .container -->
            </div><!-- End .testimonials-section -->

            <div class="counters-section bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-4 count-container">
                            <div class="count-wrapper">
                                <span class="count-to" data-from="0" data-to="200" data-speed="2000" data-refresh-interval="50">200</span>+
                            </div><!-- End .count-wrapper -->
                            <h4 class="count-title">MILLION CUSTOMERS</h4>
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4 count-container">
                            <div class="count-wrapper">
                                <span class="count-to" data-from="0" data-to="1800" data-speed="2000" data-refresh-interval="50">1800</span>+
                            </div><!-- End .count-wrapper -->
                            <h4 class="count-title">TEAM MEMBERS</h4>
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4 count-container">
                            <div class="count-wrapper line-height-1">
                                <span class="count-to" data-from="0" data-to="24" data-speed="2000" data-refresh-interval="50">24</span><span>HR</span>
                            </div><!-- End .count-wrapper -->
                            <h4 class="count-title">SUPPORT AVAILABLE</h4>
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4 count-container">
                            <div class="count-wrapper">
                                <span class="count-to" data-from="0" data-to="265" data-speed="2000" data-refresh-interval="50">265</span>+
                            </div><!-- End .count-wrapper -->
                            <h4 class="count-title">SUPPORT AVAILABLE</h4>
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4 count-container">
                            <div class="count-wrapper line-height-1">
                                <span class="count-to" data-from="0" data-to="99" data-speed="2000" data-refresh-interval="50">99</span><span>%</span>
                            </div><!-- End .count-wrapper -->
                            <h4 class="count-title">SUPPORT AVAILABLE</h4>
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .counters-section -->
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/plugins/jquery.countTo.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>
</html>