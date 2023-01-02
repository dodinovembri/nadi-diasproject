<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product | Dias Project</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/themes/lite-purple.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/plugins/perfect-scrollbar.min.css') ?>" rel="stylesheet" />
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
                    <h1>Product Detail</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/product') ?>">Product</a></li>
                        <li>Product Detail</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Product Category</label>
                                        <input class="form-control" type="text" value="<?= $product->category_name ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>SKU</label>
                                        <input class="form-control" type="text" value="<?= $product->sku ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Name</label>
                                        <input class="form-control" type="text" value="<?= $product->product_name ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Rating</label>
                                        <input class="form-control" type="text" value="<?= $product->rating ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Short Description</label>
                                        <textarea rows="5" class="form-control" disabled><?= $product->short_description ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" disabled><?= $product->description ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Price</label>
                                        <input class="form-control" type="text" value="<?= $product->price ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Quantity</label>
                                        <input class="form-control" type="text" value="<?= $product->qty ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Discount (%)</label>
                                        <input class="form-control" type="text" value="<?= $product->discount ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Tag</label>
                                        <textarea rows="3" class="form-control" disabled><?= $product->tag ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Image 1</label>
                                        <img src="<?= base_url('assets/images/products/' . $product->image1) ?>" height="120" alt="Product Image">
                                    </div>
                                    <?php if ($product->image2) { ?>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 2</label>
                                            <img src="<?= base_url('assets/images/products/' . $product->image2) ?>" height="120" alt="Product Image">
                                        </div>
                                    <?php } ?>
                                    <?php if ($product->image3) { ?>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 3</label>
                                            <img src="<?= base_url('assets/images/products/' . $product->image3) ?>" height="120" alt="Product Image">
                                        </div>
                                    <?php } ?>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Is Featured?</label>
                                        <input class="form-control" type="text" value="<?= $product->is_featured == 1 ? 'Yes' : 'No' ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Is New Arrival?</label>
                                        <input class="form-control" type="text" value="<?= $product->is_new_arrival == 1 ? 'Yes' : 'No' ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Status</label>
                                        <input class="form-control" type="text" value="<?= $product->status == 1 ? 'Active' : 'Inactive' ?>" disabled />
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="<?= base_url('extranet/product') ?>"><button class="btn btn-primary">Back to List</button></a>
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