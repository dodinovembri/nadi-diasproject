<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Routes Frontend Website
$routes->get('/', [\App\Controllers\Frontend\Homecontroller::class, 'index']);
$routes->get('about', [\App\Controllers\Frontend\Aboutcontroller::class, 'index']);
$routes->get('account', [\App\Controllers\Frontend\Accountcontroller::class, 'index'], ['filter' => 'user_auth']);
$routes->post('account/update/(:any)', [\App\Controllers\Frontend\Accountcontroller::class, 'update'], ['filter' => 'user_auth']);
// register
$routes->get('register', [\App\Controllers\Frontend\Registercontroller::class, 'index']);
$routes->post('register/store', [\App\Controllers\Frontend\Registercontroller::class, 'store']);
// login
$routes->get('login', [\App\Controllers\Frontend\Authcontroller::class, 'index']);
$routes->post('login/auth', [\App\Controllers\Frontend\Authcontroller::class, 'auth']);
$routes->get('logout', [\App\Controllers\Frontend\Authcontroller::class, 'logout']);
$routes->get('forgot', [\App\Controllers\Frontend\Authcontroller::class, 'forgot']);
$routes->get('blog', [\App\Controllers\Frontend\Blogcontroller::class, 'index']);
// Routes cart
$routes->get('cart', [\App\Controllers\Frontend\Cartcontroller::class, 'index'], ['filter' => 'user_auth']);
$routes->get('cart/store/(:any)', [\App\Controllers\Frontend\Cartcontroller::class, 'store'], ['filter' => 'user_auth']);
$routes->get('cart/store/(:any)/(:any)/(:any)/(:any)', [\App\Controllers\Frontend\Cartcontroller::class, 'store'], ['filter' => 'user_auth']);
$routes->get('cart/destroy/(:any)', [\App\Controllers\Frontend\Cartcontroller::class, 'destroy'], ['filter' => 'user_auth']);
$routes->post('cart/update', [\App\Controllers\Frontend\Cartcontroller::class, 'update'], ['filter' => 'user_auth']);
$routes->get('checkout', [\App\Controllers\Frontend\Checkoutcontroller::class, 'index'], ['filter' => 'user_auth']);
$routes->get('checkout/store', [\App\Controllers\Frontend\Checkoutcontroller::class, 'store'], ['filter' => 'user_auth']);
$routes->get('order/confirmation', [\App\Controllers\Frontend\Ordercontroller::class, 'confirmation'], ['filter' => 'user_auth']);
$routes->get('contact', [\App\Controllers\Frontend\Contactcontroller::class, 'index']);
// Routes category
$routes->get('category', [\App\Controllers\Frontend\Productcategorycontroller::class, 'index']);
$routes->get('category/(:any)', '\App\Controllers\Frontend\Productcategorycontroller::show/$1');
// Routes product
$routes->get('product', [\App\Controllers\Frontend\Productcontroller::class, 'index']);
$routes->get('product/(:any)', [\App\Controllers\Frontend\Productcontroller::class, 'show']);
$routes->get('product-search', [\App\Controllers\Frontend\Productcontroller::class, 'search']);
$routes->get('wishlist', [\App\Controllers\Frontend\Wishlistcontroller::class, 'index']);
$routes->post('inbox/store', [\App\Controllers\Frontend\Inboxcontroller::class, 'store']);

// Routes Backend Website
$routes->get('ext-login', [\App\Controllers\Extranet\Authcontroller::class, 'login']);
$routes->post('ext-auth', [\App\Controllers\Extranet\Authcontroller::class, 'auth']);
$routes->get('ext-logout', [\App\Controllers\Extranet\Authcontroller::class, 'logout']);
$routes->group('extranet', ['filter' => 'auth'], function($routes){
	$routes->get('/', [\App\Controllers\Extranet\Extranethomecontroller::class, 'index']);

	$routes->group('configuration', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Configurationcontroller::class, 'index']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Configurationcontroller::class, 'update']);
    });

	$routes->group('social-media', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Socialmediacontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Socialmediacontroller::class, 'create']);
		$routes->post('store', [App\Controllers\Extranet\Socialmediacontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Socialmediacontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Socialmediacontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Socialmediacontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Socialmediacontroller::class, 'destroy']);
    });

	$routes->group('product-category', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Productcategorycontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Productcategorycontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Productcategorycontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Productcategorycontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Productcategorycontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Productcategorycontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Productcategorycontroller::class, 'destroy']);
    });
	
	$routes->group('banner', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Bannercontroller::class, 'index']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Bannercontroller::class, 'update']);
    });

	$routes->group('blog', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Blogcontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Blogcontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Blogcontroller::class, 'store']);
		$routes->get('show', [\App\Controllers\Extranet\Blogcontroller::class, 'show']);
		$routes->get('edit', [\App\Controllers\Extranet\Blogcontroller::class, 'edit']);
		$routes->post('update', [\App\Controllers\Extranet\Blogcontroller::class, 'update']);
		$routes->get('destroy', [\App\Controllers\Extranet\Blogcontroller::class, 'destroy']);
    });
	
	$routes->group('brand', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Brandcontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Brandcontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Brandcontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Brandcontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Brandcontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Brandcontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Brandcontroller::class, 'destroy']);
    });		

	$routes->group('exclusive', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Exclusivecontroller::class, 'index']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Exclusivecontroller::class, 'update']);
    });	

	$routes->group('guarantee', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Guaranteecontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Guaranteecontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Guaranteecontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Guaranteecontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Guaranteecontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Guaranteecontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Guaranteecontroller::class, 'destroy']);
    });			

	$routes->group('product', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Productcontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Productcontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Productcontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Productcontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Productcontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Productcontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Productcontroller::class, 'destroy']);
    });

	$routes->group('promotion', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Promotioncontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Promotioncontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Promotioncontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Promotioncontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Promotioncontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Promotioncontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Promotioncontroller::class, 'destroy']);
    });

	$routes->group('slider', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Slidercontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Slidercontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Slidercontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Slidercontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Slidercontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Slidercontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Slidercontroller::class, 'destroy']);
    });

	$routes->group('support', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Supportcontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Supportcontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Supportcontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Supportcontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Supportcontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Supportcontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Supportcontroller::class, 'destroy']);
    });

	$routes->group('user', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Usercontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Usercontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Usercontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Usercontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Usercontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Usercontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Usercontroller::class, 'destroy']);
    });

	$routes->group('order', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Ordercontroller::class, 'index']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Ordercontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Ordercontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Ordercontroller::class, 'update']);
    });

	$routes->group('about', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Aboutcontroller::class, 'index']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Aboutcontroller::class, 'update']);
    });	

	$routes->group('contact', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Contactcontroller::class, 'index']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Contactcontroller::class, 'update']);
    });

	$routes->group('faq', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Faqcontroller::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\Faqcontroller::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\Faqcontroller::class, 'store']);
		$routes->get('show/(:any)', [\App\Controllers\Extranet\Faqcontroller::class, 'show']);
		$routes->get('edit/(:any)', [\App\Controllers\Extranet\Faqcontroller::class, 'edit']);
		$routes->post('update/(:any)', [\App\Controllers\Extranet\Faqcontroller::class, 'update']);
		$routes->get('destroy/(:any)', [\App\Controllers\Extranet\Faqcontroller::class, 'destroy']);
    });	

	$routes->group('bill', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\Billcontroller::class, 'index']);
    });		
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
