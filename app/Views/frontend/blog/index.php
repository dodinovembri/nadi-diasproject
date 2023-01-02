<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog - <?= $configuration->title ?></title>
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
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/css/style.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
	<div class="page-wrapper">
		<div class="top-notice bg-primary text-white">
			<div class="container text-center">
				<h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
				<a href="category.html" class="category">MEN</a>
				<a href="category.html" class="category ml-2 mr-3">WOMEN</a>
				<small>* Limited time only.</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->

		<?= $this->include('frontend/components/header') ?>

		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="blog-section row">
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="assets/images/blog/home/post-1.jpg" alt="Post" width="225" height="280">
										</a>
										<div class="post-date">
											<span class="day">26</span>
											<span class="month">Feb</span>
										</div>
									</div><!-- End .post-media -->

									<div class="post-body">
										<h2 class="post-title">
											<a href="single.html">Top New Collection</a>
										</h2>
										<div class="post-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non
												placerat mi.
												Etiam non tellus sem. Aenean...</p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="assets/images/blog/home/post-2.jpg" alt="Post" width="225" height="280">
										</a>
										<div class="post-date">
											<span class="day">26</span>
											<span class="month">Feb</span>
										</div>
									</div><!-- End .post-media -->

									<div class="post-body">
										<h2 class="post-title">
											<a href="single.html">Fashion Trends</a>
										</h2>
										<div class="post-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non
												placerat mi.
												Etiam non tellus sem. Aenean...</p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="assets/images/blog/home/post-3.jpg" alt="Post" width="225" height="280">
										</a>
										<div class="post-date">
											<span class="day">26</span>
											<span class="month">Feb</span>
										</div>
									</div><!-- End .post-media -->

									<div class="post-body">
										<h2 class="post-title">
											<a href="single.html">Etiam laoreet sem</a>
										</h2>
										<div class="post-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non
												placerat mi.
												Etiam non tellus sem. Aenean...</p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="assets/images/blog/home/post-4.jpg" alt="Post" width="225" height="280">
										</a>
										<div class="post-date">
											<span class="day">26</span>
											<span class="month">Feb</span>
										</div>
									</div><!-- End .post-media -->

									<div class="post-body">
										<h2 class="post-title">
											<a href="single.html">Perfect Accessories</a>
										</h2>
										<div class="post-content">
											<p>Leap into electronic typesetting, remaining essentially unchanged. It was
												popularised in the 1960s with the release of Letraset sheets...
											</p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
						</div>
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-toggle custom-sidebar-toggle">
						<i class="fas fa-sliders-h"></i>
					</div>
					<div class="sidebar-overlay"></div>
					<aside class="sidebar mobile-sidebar col-lg-3">
						<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
							<div class="widget widget-categories">
								<h4 class="widget-title">Blog Categories</h4>

								<ul class="list">
									<li>
										<a href="#">All about clothing</a>

										<ul class="list">
											<li><a href="#">Dresses</a></li>
										</ul>
									</li>
									<li><a href="#">Make-up &amp; beauty</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Fashion trends</a></li>
									<li><a href="#">Haircuts &amp; hairstyles</a></li>
								</ul>
							</div><!-- End .widget -->

							<div class="widget widget-post">
								<h4 class="widget-title">Recent Posts</h4>

								<ul class="simple-post-list">
									<li>
										<div class="post-media">
											<a href="single.html">
												<img src="assets/images/blog/widget/post-1.jpg" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="single.html">Top New Collection</a>
											<div class="post-meta">February 26, 2018</div>
											<!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>

									<li>
										<div class="post-media">
											<a href="single.html">
												<img src="assets/images/blog/widget/post-2.jpg" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="single.html">Fashion Trends</a>
											<div class="post-meta">February 26, 2018</div><!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>
								</ul>
							</div><!-- End .widget -->

							<div class="widget">
								<h4 class="widget-title">Tags</h4>

								<div class="tagcloud">
									<a href="#">ARTICLES</a>
									<a href="#">CHAT</a>
								</div><!-- End .tagcloud -->
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
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