<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Billing | Dias Project</title>
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
                    <h1>Billing</h1>
                    <ul>
                        <li><a href="#">Billing</a></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
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
                                                <th>Due Date</th>
                                                <th>Total</th>
                                                <th>Pay To</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($bills as $key => $value) {
                                                $no++; ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $value->due_date ?></td>
                                                    <td><?= number_format($value->total, 0, ",", ".") ?></td>
                                                    <td><?= $value->to_account_number ?></td>
                                                    <td>
                                                        <?php if ($value->status == 1) {
                                                            echo "Active";
                                                        } elseif ($value->status == 0) {
                                                            echo "Inactive";
                                                        } elseif ($value->status == 2) { ?>
                                                            <span class="badge badge-pill badge-warning m-2">Unpaid</span>
                                                        <?php } elseif ($value->status == 3) { ?>
                                                            <span class="badge badge-pill badge-success m-2">Paid</span>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
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