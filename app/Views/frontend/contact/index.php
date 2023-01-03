<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Contact - <?= $configuration->title ?></title>
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
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
	<div class="page-wrapper">
		<?= $this->include('frontend/components/header') ?>

		<main class="main">
			<h5 class="heading-bottom text-uppercase" style="text-align: center; margin-top: 20px;">Contact Us</h5>

			
			<div class="container contact-us-container">
				<div class="contact-info">
					<div class="row">
						<div class="col-12">
							<iframe src="<?= $contact->iframe_maps_link ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<h2 class="ls-n-25 m-b-1">
							<?= $contact->text1 ?>
							</h2>

							<p>
							<?= $contact->description ?>
							</p>
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<h2 class="mt-6 mb-2">Send Us a Message</h2>

						<form class="mb-0" action="<?= base_url('inbox/store') ?>" method="post">
							<div class="form-group">
								<label class="mb-1" for="contact-name">Your Name
									<span class="required">*</span></label>
								<input type="text" class="form-control" id="contact-name" name="name" required />
							</div>

							<div class="form-group">
								<label class="mb-1" for="contact-email">Your E-mail
									<span class="required">*</span></label>
								<input type="email" class="form-control" id="contact-email" name="email" required />
							</div>

							<div class="form-group">
								<label class="mb-1" for="contact-message">Your Message
									<span class="required">*</span></label>
								<textarea cols="30" rows="1" id="contact-message" class="form-control" name="message" required></textarea>
							</div>

							<div class="form-footer mb-0">
								<button type="submit" class="btn btn-dark font-weight-normal">
									Send Message
								</button>
							</div>
						</form>
					</div>

					<div class="col-lg-6">
						<h2 class="mt-6 mb-1">Frequently Asked Questions</h2>
						<div id="accordion">
							<?php foreach ($faqs as $key => $value) { ?>
								<div class="card card-accordion">
									<a class="card-header <?= $key > 0 ? "collapsed": "" ?>" href="#" data-toggle="collapse" data-target="#collapse<?= $key ?>" aria-expanded="true" aria-controls="collapseOne">
										<?= $value->question ?>
									</a>
	
									<div id="collapse<?= $key ?>" class="collapse <?= $key == 0 ? "show": "" ?>" data-parent="#accordion">
										<p style="text-align: justify;"><?= $value->answer ?></p>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>

			<div class="mb-8"></div>
		</main>

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

	<!-- Google Map-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
	<script src="<?= base_url('assets/js/map.js') ?>"></script>
</body>

</html>