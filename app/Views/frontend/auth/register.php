<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Register - <?= $configuration->title ?></title>
	<meta name="keywords" content="<?= $configuration->keyword ?>" />
	<meta name="description" content="<?= $configuration->description ?>">
	<meta name="author" content="<?= $configuration->author ?>">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url(base_url('assets/images/icons/favicon.png')) ?>">
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
			<h5 class="heading-bottom text-uppercase" style="text-align: center; margin-top: 50px">Register</h5>

			<div class="container login-container">
				<div class="row">
					<div class="col-lg-4 mx-auto">
						<div class="row">
							<div class="col-md-12">
								<form action="<?= base_url('register/store') ?>" method="post">
									<label for="register-email">
										Name
										<span class="required">*</span>
									</label>
									<input type="text" name="name" class="form-input form-wide" required />
									
									<label for="register-email">
										Email Address
										<span class="required">*</span>
									</label>
									<input type="email" name="email" class="form-input form-wide" id="register-email" required />

									<label for="register-password">
										Password
										<span class="required">*</span>
									</label>
									<input type="password" name="password" class="form-input form-wide" id="register-password" required />
									<div class="form-footer">
										Already have account? <a href="<?= base_url('login') ?>" class="forget-password text-dark form-footer-right">Login</a>
									</div>
									<div class="form-footer mb-2">
										<button type="submit" class="btn btn-dark btn-md w-100 mr-0">
											Register
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
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