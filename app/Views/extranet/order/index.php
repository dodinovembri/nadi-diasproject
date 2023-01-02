<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Orders | Dias Project</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/themes/lite-purple.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/plugins/perfect-scrollbar.min.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/extranet/css/plugins/datatables.min.css') ?>" />
    <link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/icons/favicon.png') ?>">
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <!-- Header & Sidebar -->
        <?= $this->include('extranet/components/header') ?>
        <?= $this->include('extranet/components/sidebar') ?>
        <!-- Main -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Orders</h1>
                    <ul>
                        <li><a href="#">Orders</a></li>
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
                                                <th>Order Number</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($orders as $key => $value) {
                                                $no++; ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $value->order_number ?></td>
                                                    <td><?= number_format($value->total, 0, ",", ".") ?></td>
                                                    <td><?php if ($value->status == 1) {
                                                            echo "Order Created";
                                                        } elseif ($value->status == 2) {
                                                            echo "Order Processing";
                                                        } elseif ($value->status == 3) {
                                                            echo "Order Completed";
                                                        } ?></td>
                                                    <td>
                                                        <a class="text-success mr-2" href="<?= base_url('extranet/product/show/' . $value->id) ?>">
                                                            <i class="nav-icon i-Eye font-weight-bold"></i>
                                                        </a>
                                                        <a class="text-success mr-2" href="#">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold" data-toggle="modal" data-target="#updateStatus<?= $value->id ?>"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="updateStatus<?= $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="updateStatusLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="updateStatusLabel">Update Status Order</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <form action="<?= base_url('extranet/order/update/' . $value->id) ?>" method="post">
                                                                <div class="modal-body">
                                                                    <div class="col-md-12 form-group mb-3">
                                                                        <label>Status</label>
                                                                        <select class="form-control" name="status" required>
                                                                            <option value="1">Order Created</option>
                                                                            <option value="2">Order Processing</option>
                                                                            <option value="3">Order Completed</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button class="btn btn-primary ml-2" type="submit">Update</button>
                                                                </div>
                                                            </form>
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
            <!-- Footer -->
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