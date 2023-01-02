<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cart - <?= $configuration->title ?></title>
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
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<a href="void::">Shopping Cart</a>
					</li>
					<li class="disabled">
						<a href="void::">Checkout</a>
					</li>
					<li class="disabled">
						<a href="void::">Order Complete</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Quantity</th>
										<th class="text-right">Subtotal</th>
									</tr>
								</thead>
								<form action="<?= base_url('cart/update') ?>" method="post">
									<tbody>
										<?php
										$total_product = 0;
										foreach ($cart_products as $key => $value) { ?>
											<tr class="product-row">
												<td>
													<figure class="product-image-container">
														<a href="<?= base_url('product/'.$value->product_id) ?>" class="product-image">
															<img src="<?= base_url('assets/images/products/' . $value->image1) ?>" alt="product">
														</a>

														<a href="<?= base_url('cart/destroy/' . $value->id) ?>" class="btn-remove icon-cancel" title="Remove Product"></a>
													</figure>
												</td>
												<td class="product-col">
													<h5 class="product-title">
														<a href="<?= base_url('product/' . $value->product_id) ?>"><?= $value->product_name ?></a>
													</h5>
												</td>
												<td><?= "Rp. " . number_format($value->price -  $value->discount / 100 * $value->price, 0, ",", "."); ?></td>
												<td>
													<div class="product-single-qty" style="margin-left: 10px;">
														<input type="hidden" name="id[]" value="<?= $value->id ?>">
														<input class="form-control" type="text" name="qty[]" value="<?= $value->cart_qty ?>">
													</div><!-- End .product-single-qty -->
												</td>
												<td class="text-right">
													<span class="subtotal-price">
														<?php
														$total_per_product = ($value->price -  $value->discount / 100 * $value->price) * $value->cart_qty;
														echo "Rp. " . number_format($total_per_product, 0, ",", ".");
														?>
													</span>
												</td>
											</tr>
										<?php 
										$total_product = $total_product + $total_per_product; } ?>
									</tbody>
									<?php if ($count_cart > 0) { ?>
										<tfoot>
											<tr>
												<td colspan="5" class="clearfix">
													<div class="float-right">
														<button type="submit" class="btn btn-shop btn-update-cart">
															Update Cart
														</button>
													</div><!-- End .float-right -->
												</td>
											</tr>
										</tfoot>
									<?php } ?>
								</form>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>CART TOTALS</h3>

							<table class="table table-totals">
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td><?= "Rp. " . number_format($total_product, 0, ",", "."); ?></td>
									</tr>

								</tbody>

								<tfoot>
									<tr>
										<td>Total</td>
										<td><?= "Rp. " . number_format($total_product, 0, ",", "."); ?></td>
									</tr>
								</tfoot>
							</table>
							<?php if ($total_product > 0) { ?>								
								<div class="checkout-methods">
									<a href="<?= base_url('checkout') ?>" class="btn btn-block btn-dark">Checkout
										<i class="fa fa-arrow-right"></i></a>
								</div>
							<?php } ?>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
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