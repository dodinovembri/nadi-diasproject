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
                                            <label for="firstName1">Name</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3 ">
                                            <label for="website">Image</label>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile01" type="file" name="logo" aria-describedby="inputGroupFileAddon01" />
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Text 1</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Text 2</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Text Button</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Button Link</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Text 3</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Text 4</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Text 5</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Text 6</label>
                                            <input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Status</label>
                                            <select class="form-control" name="text2_status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
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