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
                    <h1>Social Media Details</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/social-media') ?>">Social Media</a></li>
                        <li>Social Media Details</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName1">Name</label>
                                        <input class="form-control" id="firstName1" type="text" name="name" value="<?= $social_media->name ?>" placeholder="Enter title" />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Icon</label>
                                        <input class="form-control" id="picker2" placeholder="Enter icon" value="<?= $social_media->icon ?>" name="icon" />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker2">Link</label>
                                        <input class="form-control" id="picker2" placeholder="Enter link" name="link" value="<?= $social_media->icon ?>" />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1">Status</label>
                                        <select class="form-control" name="status">
                                            <?php if ($social_media->status == 0) { ?>
                                                <option value="0">Inactive</option>
                                                <option value="1">Active</option>
                                            <?php } elseif ($social_media->status == 1) { ?>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="<?= base_url('extranet/social-media') ?>"><button class="btn btn-primary">Back to List</button></a>
                                    </div>
                                </div>
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