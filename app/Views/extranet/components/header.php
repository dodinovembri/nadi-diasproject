<div class="main-header">
    <div class="logo">
        <a href="<?= base_url('extranet') ?>"><img src="<?= base_url('assets/images/ext-logo.png') ?>" alt=""></a>
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div style="margin: auto"></div>
    <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <!-- User avatar dropdown -->
        <div class="dropdown">
            <div class="user col align-self-end">
                <img src="<?php if (session()->get('user_image') != null) {
                    echo base_url('assets/images/faces/1.jpg');
                }else{
                    echo base_url('assets/images/users/user.png');
                } ?>" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i> <?= session()->get('name') ?>
                    </div>
                    <a class="dropdown-item">Account settings</a>
                    <a class="dropdown-item" href="<?= base_url('extranet/bill') ?>">Billing history</a>
                    <a class="dropdown-item" href="<?= base_url('extranet/ticket') ?>">Ticket Support</a>
                    <a class="dropdown-item" href="<?= base_url('ext-logout') ?>">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</div>