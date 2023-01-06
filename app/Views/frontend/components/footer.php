<footer class="footer bg-dark">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">General Info</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Address:</span><?= $configuration->address ?>
                            </li>
                            <li>
                                <span class="contact-info-label">Working Days/Hours:</span> <?= $configuration->working_day ?>
                            </li>
                        </ul>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Contact</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Phone:</span><a href="tel:<?= $configuration->phone ?>"><?= $configuration->phone ?></a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a href="mailto:<?= $configuration->email ?>"><?= $configuration->email ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>

                        <ul class="links">
                            <li><a href="#">Orders History</a></li>
                            <li><a href="<?= base_url('account') ?>">My Account</a></li>
                            <li><a href="void::">About Us</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->
                <?php if (count($social_medias) > 0) { ?>                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">Social Media</h4>
                            <div class="social-icons">
                                <?php foreach ($social_medias as $key => $value) { ?>
                                    <a href="<?= $value->link ?>" class="social-icon <?= $value->icon ?>" target="_blank"></a>
                                <?php } ?>
                            </div>
                            <!-- End .social-icons -->
                        </div>
                        <!-- End .widget -->
                    </div>
                <?php } ?>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

    <div class="container">
        <div class="footer-bottom">
            <div class="container d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright"><?= $configuration->copyright ?></span>
                </div>
            </div>
        </div>
        <!-- End .footer-bottom -->
    </div>
    <!-- End .container -->
</footer>