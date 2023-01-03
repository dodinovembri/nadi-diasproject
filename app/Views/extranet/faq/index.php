<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FAQ | Dias Project</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/themes/lite-purple.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/plugins/perfect-scrollbar.min.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/extranet/css/plugins/datatables.min.css') ?>" />
    <link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/icons/favicon.png') ?>">
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <?= $this->include('extranet/components/header') ?>
        <?= $this->include('extranet/components/sidebar') ?>
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>FAQ</h1>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <a href="<?= base_url('extranet/faq/create') ?>"><button class="btn btn-primary ripple" type="button">Create New</button><br><br></a>
                <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <?= $this->include('extranet/components/flashmessage') ?>
                        <div class="card text-left">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($faqs as $key => $value) {
                                                $no++; ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $value->question ?></td>
                                                    <td><?= $value->answer ?></td>
                                                    <td>
                                                        <?php if ($value->status == 1) {
                                                            echo "Active";
                                                        } elseif ($value->status == 0) {
                                                            echo "Inactive";
                                                        } ?>
                                                    </td>
                                                    <td>
                                                        <a class="text-success mr-2" href="<?= base_url('extranet/faq/show/' . $value->id) ?>">
                                                            <i class="nav-icon i-Eye font-weight-bold"></i>
                                                        </a>
                                                        <a class="text-success mr-2" href="<?= base_url('extranet/faq/edit/' . $value->id) ?>">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a class="text-danger mr-2" href="#">
                                                            <i class="nav-icon i-Close-Window font-weight-bold" data-toggle="modal" data-target="#exampleModal<?= $value->id ?>"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="exampleModal<?= $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure want to delete this data?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                <a href="<?= base_url('extranet/faq/destroy/' . $value->id) ?>"><button class="btn btn-primary ml-2" type="button">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include('extranet/components/footer') ?>
        </div>
    </div>
    <script src="<?= base_url('assets/extranet/js/plugins/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/plugins/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/scripts/script.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/scripts/sidebar.large.script.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/plugins/datatables.min.js') ?>"></script>
    <script src="<?= base_url('assets/extranet/js/scripts/datatables.script.min.js') ?>"></script>
</body>

</html>