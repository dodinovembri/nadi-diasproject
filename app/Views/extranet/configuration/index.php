<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Configuration | Dias Project</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/themes/lite-purple.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/plugins/perfect-scrollbar.min.css') ?>" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/icons/favicon.png') ?>">
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <?= $this->include('extranet/components/header') ?>
        <?= $this->include('extranet/components/sidebar') ?>
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Configuration</h1>
                    <ul>
                        <li>Configuration</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <?= $this->include('extranet/components/flashmessage') ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/configuration/update/'.$configuration->id) ?>" method="post" enctype="multipart/form-data">
                                    
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Title</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" value="<?= $configuration->title ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="lastName1">Key Word</label>
                                            <input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $configuration->keyword ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Text 1 Status</label>
                                            <select class="form-control" name="text1_status">
                                                <?php if ($configuration->text1_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->text1_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="phone">Text 1 Text</label>
                                            <input class="form-control" id="phone" name="text1_text" placeholder="Enter text 1 text" value="<?= $configuration->text1_text ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Text 2 Status</label>
                                            <select class="form-control" name="text2_status">
                                                <?php if ($configuration->text2_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->text2_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="website">Text 2 Text</label>
                                            <input class="form-control" id="website" name="text2_text" placeholder="Enter text 2 text" value="<?= $configuration->text2_text ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="frontend_logo">Frontend Logo</label>
                                            <img src="<?= base_url('assets/images/logo/'.$configuration->frontend_logo_name) ?>" height="120" alt="">
                                            <input class="form-control" id="frontend_logo" type="file" name="frontend_logo" value="<?= $configuration->frontend_logo_name ?>" />
                                            <sub>.jpg or .png file, size: 785x318 under 10kb</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="extranet_logo">Extranet Logo</label>
                                            <img src="<?= base_url('assets/images/logo/'.$configuration->extranet_logo_name) ?>" height="120" alt="">
                                            <input class="form-control" id="extranet_logo" type="file" name="extranet_logo" value="<?= $configuration->extranet_logo_name ?>" />
                                            <sub>.jpg or .png file, size: 318x318 under 25kb</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Header Top Status</label>
                                            <select class="form-control" name="header_top_status">
                                                <?php if ($configuration->header_top_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->header_top_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Header Middle Status</label>
                                            <select class="form-control" name="header_middle_status">
                                                <?php if ($configuration->header_middle_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->header_middle_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Guarantee Status</label>
                                            <select class="form-control" name="guarantee_status">
                                                <?php if ($configuration->guarantee_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->guarantee_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Promotion Status</label>
                                            <select class="form-control" name="promotion_status">
                                                <?php if ($configuration->promotion_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->promotion_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Product New Arrival Status</label>
                                            <select class="form-control" name="product_new_arrival_status">
                                                <?php if ($configuration->product_new_arrival_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->product_new_arrival_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Support Status</label>
                                            <select class="form-control" name="support_status">
                                                <?php if ($configuration->support_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->support_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Blog Status</label>
                                            <select class="form-control" name="blog_status">
                                                <?php if ($configuration->blog_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->blog_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Brand Status</label>
                                            <select class="form-control" name="brand_status">
                                                <?php if ($configuration->brand_status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($configuration->brand_status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Phone</label>
                                            <input class="form-control" id="picker2" placeholder="Enter phone" name="phone" value="<?= $configuration->phone ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Email</label>
                                            <input class="form-control" id="picker2" placeholder="Enter email" name="email" value="<?= $configuration->email ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Working Day</label>
                                            <input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $configuration->working_day ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Copy Right</label>
                                            <input class="form-control" id="picker2" placeholder="Enter copyright" name="copyright" value="<?= $configuration->copyright ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Address</label>
                                            <textarea class="form-control" id="picker2" placeholder="Enter address" name="address"><?= $configuration->address ?></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Description</label>
                                            <textarea class="form-control" id="picker2" placeholder="Enter description" name="description"><?= $configuration->description ?></textarea>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end of main-content -->
            </div>
            <?= $this->include('extranet/components/footer') ?>
        </div>
    </div>
    <script src="<?= base_url('assets/extranet/js/plugins/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/plugins/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/scripts/script.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/scripts/sidebar.large.script.min.js') ?>"></script>
</body>

</html>