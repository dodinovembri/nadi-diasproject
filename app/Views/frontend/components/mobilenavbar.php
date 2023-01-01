<div class="sticky-navbar">
    <div class="sticky-info">
        <a href="<?= base_url('/') ?>">
            <i class="icon-home"></i>Home
        </a>
    </div>
    <div class="sticky-info">
        <a href="<?= base_url('category') ?>" class="">
            <i class="icon-bars"></i>Categories
        </a>
    </div>
    <div class="sticky-info">
        <a href="void::" class="">
            <i class="icon-wishlist-2"></i>Wishlist
        </a>
    </div>
    <div class="sticky-info">
        <a href="<?= base_url('account') ?>" class="">
            <i class="icon-user-2"></i>Account
        </a>
    </div>
    <div class="sticky-info">
        <a href="<?= base_url('cart') ?>" class="">
            <i class="icon-shopping-cart position-relative">
                <?php if (session()->get('logged_in') == TRUE) { ?>
                    <span class="cart-count badge-circle"><?= $count_cart ?></span>
                <?php } ?>
            </i>Cart
        </a>
    </div>
</div>