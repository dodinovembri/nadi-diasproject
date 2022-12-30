<header class="header">
    <?php if ($configuration->header_top_status == 1) { ?>
        <div class="header-top">
            <div class="container">
                <?php if ($configuration->text2_status == 1) { ?>
                    <div class="header-left d-none d-sm-block">
                        <p class="top-message text-uppercase"><?= $configuration->text2_text ?></p>
                    </div>
                <?php } ?>
                <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                    <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                        <div class="header-menu">
                            <ul>
                                <li><a href="about">About Us</a></li>
                                <li><a href="blog">Blog</a></li>
                                <?php if (session()->get('logged_in') == TRUE) { ?>
                                    <!-- <li><a href="wishlist">My Wishlist</a></li> -->
                                    <li><a href="cart">Cart</a></li>
                                    <li><a href="account">My Account</a></li>
                                <?php } else { ?>
                                    <li><a href="login">Log In</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <span class="separator"></span>

                    <div class="social-icons">
                        <?php foreach ($social_medias as $key => $value) { ?>
                            <a href="<?= $value->link ?>" class="social-icon <?= $value->icon ?>" target="_blank"></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($configuration->header_top_status == 1) { ?>
        <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler text-primary mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="/" class="logo">
                        <img src="<?= base_url('assets/images/logo/' . $configuration->frontend_logo_name) ?>" width="111" height="44" alt="Porto Logo">
                    </a>
                </div>

                <div class="header-right w-lg-max">
                    <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                <div class="select-custom">
                                    <select id="cat" name="cat">
                                        <option value="">All Categories</option>
                                        <?php foreach ($product_categories as $key => $value) { ?>
                                            <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                            </div>
                        </form>
                    </div>

                    <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                        <img alt="phone" src="<?= base_url('assets/images/phone.png') ?>" width="30" height="30" class="pb-1">
                        <h6><span>Call us now</span><a href="tel:#" class="text-dark font1"><?= $configuration->phone ?></a></h6>
                    </div>

                    <a href="<?= base_url('account') ?>" class="header-icon" title="login"><i class="icon-user-2"></i></a>

                    <!-- <a href="wishlist.html" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a> -->

                    <div class="dropdown cart-dropdown">
                        <a href="<?= base_url('cart') ?>" title="Cart" class="dropdown-toggle cart-toggle" role="button">
                            <i class="minicart-icon"></i>
                            <span class="cart-count badge-circle">3</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
        <div class="container">
            <nav class="main-nav w-100">
                <ul class="menu">
                    <li class="active">
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="category">Categories</a>
                        <div class="megamenu megamenu-1cols">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="submenu">
                                        <?php foreach ($product_categories as $key => $value) { ?>
                                            <li><a href="category/<?= $value->id ?>"><?= $value->name ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="product">Products</a>
                    </li>
                    <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                    <li class="float-right"><a href="<?= base_url('about') ?>" rel="noopener" class="pl-5">About Us</a></li>
                    <li class="float-right"><a href="<?= base_url('contact') ?>" class="pl-5">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-bottom -->
    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
        <div class="container">
            <nav class="main-nav w-100">
                <?php if (session()->getFlashdata('loginrequired') === true) {
                    echo $this->include('frontend/components/flashmessage');
                } ?>
            </nav>
        </div>
        <!-- End .container -->
    </div>
</header>