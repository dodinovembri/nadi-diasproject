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

$routes->get('wishlist', [\App\Controllers\Frontend\Wishlistcontroller::class, 'index']);

// Routes Backend Website
$routes->get('ext-login', 'App\Controllers\Extranet\Authcontroller::login');
$routes->post('ext-auth', 'App\Controllers\Extranet\Authcontroller::auth');
$routes->get('ext-logout', 'App\Controllers\Extranet\Authcontroller::logout');

$routes->group('extranet', ['filter' => 'auth'], function($routes){
	$routes->get('/', 'App\Controllers\Extranet\Homecontroller::index');

	$routes->group('configuration', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Configurationcontroller::index');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Configurationcontroller::update/$1');
    });

	$routes->group('social-media', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Socialmediacontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Socialmediacontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Socialmediacontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Socialmediacontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Socialmediacontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Socialmediacontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Socialmediacontroller::destroy/$1');
    });

	$routes->group('product-category', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Productcategorycontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Productcategorycontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Productcategorycontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Productcategorycontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Productcategorycontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Productcategorycontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Productcategorycontroller::destroy/$1');
    });
	
	$routes->group('banner', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Bannercontroller::index');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Bannercontroller::update/$1');
    });

	$routes->group('blog', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Blogcontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Blogcontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Blogcontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Blogcontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Blogcontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Blogcontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Blogcontroller::destroy');
    });
	
	$routes->group('brand', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Brandcontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Brandcontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Brandcontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Brandcontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Brandcontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Brandcontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Brandcontroller::destroy/$1');
    });		

	$routes->group('exclusive', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Exclusivecontroller::index');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Exclusivecontroller::update/$1');
    });	

	$routes->group('guarantee', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Guaranteecontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Guaranteecontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Guaranteecontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Guaranteecontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Guaranteecontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Guaranteecontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Guaranteecontroller::destroy/$1');
    });			

	$routes->group('product', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Productcontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Productcontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Productcontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Productcontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Productcontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Productcontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Productcontroller::destroy/$1');
    });

	$routes->group('promotion', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Promotioncontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Promotioncontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Promotioncontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Promotioncontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Promotioncontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Promotioncontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Promotioncontroller::destroy/$1');
    });

	$routes->group('slider', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Slidercontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Slidercontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Slidercontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Slidercontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Slidercontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Slidercontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Slidercontroller::destroy/$1');
    });

	$routes->group('support', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Supportcontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Supportcontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Supportcontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Supportcontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Supportcontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Supportcontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Supportcontroller::destroy/$1');
    });

	$routes->group('user', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Usercontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Usercontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Usercontroller::store');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Usercontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Usercontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Usercontroller::update/$1');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Usercontroller::destroy/$1');
    });

	$routes->group('order', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Ordercontroller::index');
		$routes->get('show/(:any)', 'App\Controllers\Extranet\Ordercontroller::show/$1');
		$routes->get('edit/(:any)', 'App\Controllers\Extranet\Ordercontroller::edit/$1');
		$routes->post('update/(:any)', 'App\Controllers\Extranet\Ordercontroller::update/$1');
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
