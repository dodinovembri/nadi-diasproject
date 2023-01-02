<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('category') ?>">Categories</a></li>
                <li><a href="<?= base_url('product') ?>">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
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
            <?php foreach ($social_medias as $key => $value) { ?>
                <a href="<?= $value->link ?>" class="social-icon <?= $value->icon ?>" target="_blank"></a>
            <?php } ?>
        </div>
    </div>
    <!-- End .mobile-menu-wrapper -->
</div>
<!-- End .mobile-menu-container -->