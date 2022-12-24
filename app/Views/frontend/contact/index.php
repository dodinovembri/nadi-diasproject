<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact - Dias Project</title>
    <meta name="keywords" content="Dias Project, Ecommerce Website" />
    <meta name="description" content="Dias Project - Ecommerce Website">
    <meta name="author" content="diasproject">
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">
	<script>
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>
	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Main CSS File -->
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
	<div class="page-wrapper">
		<?= $this->include('frontend/components/header') ?>

		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="demo4.html"><i class="icon-home"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Contact Us
						</li>
					</ol>
				</div>
			</nav>

			<div id="map"></div>

			<div class="container contact-us-container">
				<div class="contact-info">
					<div class="row">
						<div class="col-12">
							<h2 class="ls-n-25 m-b-1">
								Contact Info
							</h2>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing
								elit. Sed imperdiet libero id nisi euismod, sed
								porta est consectetur. Vestibulum auctor felis eget
								orci semper vestibulum. Pellentesque ultricies nibh
								gravida, accumsan libero luctus, molestie nunc.L
								orem ipsum dolor sit amet, consectetur adipiscing
								elit.
							</p>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box text-center">
								<i class="sicon-location-pin"></i>
								<div class="feature-box-content">
									<h3>Address</h3>
									<h5>123 Wall Street, New York / NY</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box text-center">
								<i class="fa fa-mobile-alt"></i>
								<div class="feature-box-content">
									<h3>Phone Number</h3>
									<h5>(800) 123-4567</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box text-center">
								<i class="far fa-envelope"></i>
								<div class="feature-box-content">
									<h3>E-mail Address</h3>
									<h5>porto@portotheme.com</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box text-center">
								<i class="far fa-calendar-alt"></i>
								<div class="feature-box-content">
									<h3>Working Days/Hours</h3>
									<h5>Mon - Sun / 9:00AM - 8:00PM</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<h2 class="mt-6 mb-2">Send Us a Message</h2>

						<form class="mb-0" action="#">
							<div class="form-group">
								<label class="mb-1" for="contact-name">Your Name
									<span class="required">*</span></label>
								<input type="text" class="form-control" id="contact-name" name="contact-name" required />
							</div>

							<div class="form-group">
								<label class="mb-1" for="contact-email">Your E-mail
									<span class="required">*</span></label>
								<input type="email" class="form-control" id="contact-email" name="contact-email" required />
							</div>

							<div class="form-group">
								<label class="mb-1" for="contact-message">Your Message
									<span class="required">*</span></label>
								<textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
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
							<div class="card card-accordion">
								<a class="card-header" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Curabitur eget leo at velit imperdiet viaculis
									vitaes?
								</a>

								<div id="collapseOne" class="collapse show" data-parent="#accordion">
									<p>Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Curabitur eget leo at velit
										imperdiet varius. In eu ipsum vitae velit
										congue iaculis vitae at risus. Nullam tortor
										nunc, bibendum vitae semper a, volutpat eget
										massa.</p>
								</div>
							</div>

							<div class="card card-accordion">
								<a class="card-header collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
									Curabitur eget leo at velit imperdiet vague
									iaculis vitaes?
								</a>

								<div id="collapseTwo" class="collapse" data-parent="#accordion">
									<p>Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Curabitur eget leo at velit
										imperdiet varius. In eu ipsum vitae velit
										congue iaculis vitae at risus. Nullam tortor
										nunc, bibendum vitae semper a, volutpat eget
										massa. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit. Integer
										fringilla, orci sit amet posuere auctor,
										orci eros pellentesque odio, nec
										pellentesque erat ligula nec massa. Aenean
										consequat lorem ut felis ullamcorper posuere
										gravida tellus faucibus. Maecenas dolor
										elit, pulvinar eu vehicula eu, consequat et
										lacus. Duis et purus ipsum. In auctor mattis
										ipsum id molestie. Donec risus nulla,
										fringilla a rhoncus vitae, semper a massa.
										Vivamus ullamcorper, enim sit amet consequat
										laoreet, tortor tortor dictum urna, ut
										egestas urna ipsum nec libero. Nulla justo
										leo, molestie vel tempor nec, egestas at
										massa. Aenean pulvinar, felis porttitor
										iaculis pulvinar, odio orci sodales odio, ac
										pulvinar felis quam sit.</p>
								</div>
							</div>

							<div class="card card-accordion">
								<a class="card-header collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
									Curabitur eget leo at velit imperdiet viaculis
									vitaes?
								</a>

								<div id="collapseThree" class="collapse" data-parent="#accordion">
									<p>Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Curabitur eget leo at velit
										imperdiet varius. In eu ipsum vitae velit
										congue iaculis vitae at risus. Nullam tortor
										nunc, bibendum vitae semper a, volutpat eget
										massa.</p>
								</div>
							</div>

							<div class="card card-accordion">
								<a class="card-header collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree">
									Curabitur eget leo at velit imperdiet vague
									iaculis vitaes?
								</a>

								<div id="collapseFour" class="collapse" data-parent="#accordion">
									<p>Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Curabitur eget leo at velit
										imperdiet varius. In eu ipsum vitae velit
										congue iaculis vitae at risus. Nullam tortor
										nunc, bibendum vitae semper a, volutpat eget
										massa. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit. Integer
										fringilla, orci sit amet posuere auctor,
										orci eros pellentesque odio, nec
										pellentesque erat ligula nec massa. Aenean
										consequat lorem ut felis ullamcorper posuere
										gravida tellus faucibus. Maecenas dolor
										elit, pulvinar eu vehicula eu, consequat et
										lacus. Duis et purus ipsum. In auctor mattis
										ipsum id molestie. Donec risus nulla,
										fringilla a rhoncus vitae, semper a massa.
										Vivamus ullamcorper, enim sit amet consequat
										laoreet, tortor tortor dictum urna, ut
										egestas urna ipsum nec libero. Nulla justo
										leo, molestie vel tempor nec, egestas at
										massa. Aenean pulvinar, felis porttitor
										iaculis pulvinar, odio orci sodales odio, ac
										pulvinar felis quam sit.</p>
								</div>
							</div>

							<div class="card card-accordion">
								<a class="card-header collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
									Curabitur eget leo at velit imperdiet varius
									iaculis vitaes?
								</a>

								<div id="collapseFive" class="collapse" data-parent="#accordion">
									<p>Lorem ipsum dolor sit amet, consectetur
										adipiscing elit. Curabitur eget leo at velit
										imperdiet varius. In eu ipsum vitae velit
										congue iaculis vitae at risus. Nullam tortor
										nunc, bibendum vitae semper a, volutpat eget
										massa. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit. Integer
										fringilla, orci sit amet posuere auctor,
										orci eros pellentesque odio, nec
										pellentesque erat ligula nec massa. Aenean
										consequat lorem ut felis ullamcorper posuere
										gravida tellus faucibus. Maecenas dolor
										elit, pulvinar eu vehicula eu, consequat et
										lacus. Duis et purus ipsum. In auctor mattis
										ipsum id molestie. Donec risus nulla,
										fringilla a rhoncus vitae, semper a massa.
										Vivamus ullamcorper, enim sit amet consequat
										laoreet, tortor tortor dictum urna, ut
										egestas urna ipsum nec libero. Nulla justo
										leo, molestie vel tempor nec, egestas at
										massa. Aenean pulvinar, felis porttitor
										iaculis pulvinar, odio orci sodales odio, ac
										pulvinar felis quam sit.</p>
								</div>
							</div>
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
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="assets/js/main.min.js"></script>

	<!-- Google Map-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
	<script src="assets/js/map.js"></script>
</body>
</html>