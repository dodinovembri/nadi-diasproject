<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Configuration | Dias Stuff</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/themes/lite-purple.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/extranet/css/plugins/perfect-scrollbar.min.css') ?>" rel="stylesheet" />
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <?= $this->include('extranet/components/header') ?>
        <?= $this->include('extranet/components/sidebar') ?>
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Basic</h1>
                    <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Form Inputs</div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Title</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="lastName1">Key Words</label>
                                            <input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Text 1 Status</label>
                                            <select class="form-control" name="text1_status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="phone">Text 1 Text</label>
                                            <input class="form-control" id="phone" name="text1_text" placeholder="Enter text 1 text" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Text 2 Status</label>
                                            <select class="form-control" name="text2_status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="website">Text 2 Text</label>
                                            <input class="form-control" id="website" name="text2_status" placeholder="Enter text 2 text" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3 ">
                                            <label for="website">Logo</label>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile01" type="file" name="logo" aria-describedby="inputGroupFileAddon01" />
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Phone</label>
                                            <input class="form-control" id="picker2" placeholder="Enter phone" name="phone" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Email</label>
                                            <input class="form-control" id="picker2" placeholder="Enter email" name="email" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Working Day</label>
                                            <input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Copy Right</label>
                                            <input class="form-control" id="picker2" placeholder="Enter copyright" name="copyright" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Status</label>
                                            <select class="form-control" name="text2_status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Address</label>
                                            <textarea class="form-control" id="picker2" placeholder="Enter address" name="address"></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker2">Description</label>
                                            <textarea class="form-control" id="picker2" placeholder="Enter description" name="description"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary">Submit</button>
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