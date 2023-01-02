<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Account - <?= $configuration->title ?></title>
	<meta name="keywords" content="<?= $configuration->keyword ?>" />
	<meta name="description" content="<?= $configuration->description ?>">
	<meta name="author" content="<?= $configuration->author ?>">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/icons/favicon.png') ?>">


	<script>
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = '<?= base_url('assets/js/webfont.js') ?>';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') ?>">
</head>

<body>
	<div class="page-wrapper">
		<?php if ($configuration->text1_status == 1) { ?>
			<div class="top-notice bg-primary text-white">
				<div class="container text-center">
					<h5 class="d-inline-block"><?= $configuration->text1_text ?></h5>
					<button title="Close (Esc)" type="button" class="mfp-close">×</button>
				</div>
			</div>
		<?php } ?>

		<?= $this->include('frontend/components/header') ?>

		<main class="main">

			<div class="container account-container custom-account-container">
				<div class="row">
					<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">My Account</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="true">My Orders</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 order-lg-last order-1 tab-content">
						<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
							<div class="dashboard-content">

								<div class="account-content">
									<form action="<?= base_url('account/update/'.$account->id) ?>" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="acc-name">Name <span class="required">*</span></label>
													<input type="text" name="name" value="<?= $account->name ?>" class="form-control" placeholder="Editor" id="acc-name" name="acc-name" required />
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="acc-lastname">Email <span class="required">*</span></label>
													<input type="email" name="email" value="<?= $account->email ?>" class="form-control" id="acc-lastname" name="acc-lastname" required />
												</div>
											</div>
										</div>

										<div class="form-group mb-2">
											<label for="acc-text">Address <span class="required">*</span></label>
											<textarea type="text" name="address" class="form-control" id="acc-text" name="acc-text" required ><?= $account->address ?></textarea>
										</div>

										<div class="form-footer mt-3 mb-0">
											<button type="submit" class="btn btn-dark mr-0">
												Save changes
											</button>
										</div>
									</form>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="order" role="tabpanel">
							<div class="order-content">
								<h3 class="account-sub-title d-none d-md-block"><i class="sicon-social-dropbox align-middle mr-3"></i>Orders</h3>
								<div class="order-table-container text-center">
									<table class="table table-order text-left">
										<thead>
											<tr>
												<th class="order-id">ORDER</th>
												<th class="order-date">DATE</th>
												<th class="order-price">TOTAL</th>
												<th class="order-status">STATUS</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($orders as $key => $value) { ?>
												<tr>
													<td><?= $value->order_number ?></td>
													<td><?= $value->created_at ?></td>
													<td><?= "Rp. " . number_format($value->total, 0, ",", "."); ?></td>
													<td><?php if ($value->status == 1) {
														echo "Order Created";
													}elseif ($value->status == 2) {
														echo "Order Processing";	
													}elseif ($value->status == 3) {
														echo "Order Completed";
													} ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
									<hr class="mt-0 mb-3 pb-2" />

								</div>
							</div>
						</div><!-- End .tab-pane -->
					</div><!-- End .tab-content -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->

		<?= $this->include('frontend/components/footer') ?>
	</div><!-- End .page-wrapper -->

	<?= $this->include('frontend/components/overlay') ?>
	<?= $this->include('frontend/components/mobilemenu') ?>
	<?= $this->include('frontend/components/mobilenavbar') ?>



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugins.min.js') ?>"></script>

	<!-- Main JS File -->
	<script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>

</html>