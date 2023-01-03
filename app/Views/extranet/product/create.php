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
                    <h1>Create New</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/product') ?>">Product</a></li>
                        <li>Create New</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/product/store') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Product Category</label>
                                            <select class="form-control" name="product_category" required>
                                                <option value="">Select</option>
                                                <?php foreach ($product_categories as $key => $value) { ?>                                                    
                                                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>SKU</label>
                                            <input class="form-control" type="text" name="sku" placeholder="Enter product code/ sku" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Enter name" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Rating</label>
                                            <input class="form-control" type="text" name="rating" placeholder="Enter rating" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Short Description</label>
                                            <textarea class="form-control" name="short_description" placeholder="Enter short description"></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" placeholder="Enter description"></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Price</label>
                                            <input class="form-control" type="number" name="price" min="0" placeholder="Enter price" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Quantity</label>
                                            <input class="form-control" type="number" name="qty" min="0" placeholder="Enter quantity" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Discount (%)</label>
                                            <input class="form-control" type="number" name="discount" min="0" placeholder="Enter discount" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Tag</label>
                                            <textarea class="form-control" name="tag" placeholder="Enter tag"></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 1</label>
                                            <input class="form-control" type="file" name="image1" required />
                                            <sub>.jpg or .png file, size: 300x300</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 2</label>
                                            <input class="form-control" type="file" name="image2" required />
                                            <sub>.jpg or .png file, size: 300x300</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 3</label>
                                            <input class="form-control" type="file" name="image3" />
                                            <sub>.jpg or .png file, size: 300x300</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Is Featured?</label>
                                            <select class="form-control" name="is_featured">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Is New Arrival?</label>
                                            <select class="form-control" name="is_new_arrival">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary">Submit</button>
                                            <a href="<?= base_url('extranet/product') ?>"><button type="button" class="btn btn-warning">Cancel</button></a>
                                        </div>
                                    </div>
                                </form>
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
</body>

</html>