<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('category') ?>">Categories</a></li>
                <li><a href="<?= base_url('product') ?>">Products</a></li>
                <li class="float-right"><a href="#" rel="noopener" class="pl-5">About Us</a></li>
                <li class="float-right"><a href="#" class="pl-5">Contact Us</a></li>
            </ul>

            <ul class="mobile-menu mt-2 mb-2">
                <li class="border-0">
                    <a href="#">
                        Special Offer!
                    </a>
                </li>
                <li class="border-0">
                    <a href="#" target="_blank">
                        Buy Porto!
                        <span class="tip tip-hot">Hot</span>
                    </a>
                </li>
            </ul>

            <ul class="mobile-menu">
                <?php if (session()->get('logged_in') == TRUE) { ?>
                    <!-- <li><a href="wishlist">My Wishlist</a></li> -->
                    <li><a href="<?= base_url('cart') ?>">Cart</a></li>
                    <li><a href="<?= base_url('account') ?>">My Account</a></li>
                <?php } else { ?>
                    <li><a href="<?= base_url('login') ?>">Log In</a></li>
                <?php } ?>
                <li><a href="void::">Contact Us</a></li>
            </ul>
        </nav>
        <!-- End .mobile-nav -->

        <form class="search-wrapper mb-2" action="#">
            <input type="text" class="form-control mb-0" placeholder="Search..." required />
            <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
        </form>

        <div class="social-icons">
            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
            </a>
            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
            </a>
            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
            </a>
        </div>
    </div>
    <!-- End .mobile-menu-wrapper -->
</div>
<!-- End .mobile-menu-container -->