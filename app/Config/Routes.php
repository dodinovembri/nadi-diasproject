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
$routes->get('account', [\App\Controllers\Frontend\Accountcontroller::class, 'index']);
$routes->get('register', [\App\Controllers\Frontend\Registercontroller::class, 'register']);
$routes->post('register/store', [\App\Controllers\Frontend\Registercontroller::class, 'store']);

$routes->get('login', [\App\Controllers\Frontend\Authcontroller::class, 'login']);
$routes->get('forgot', [\App\Controllers\Frontend\Authcontroller::class, 'forgot']);
$routes->get('blog', [\App\Controllers\Frontend\Blogcontroller::class, 'index']);

$routes->get('cart', [\App\Controllers\Frontend\Cartcontroller::class, 'index']);
$routes->get('cart/store/(:any)', [\App\Controllers\Frontend\Cartcontroller::class, 'store']);

$routes->get('checkout', [\App\Controllers\Frontend\Checkoutcontroller::class, 'index']);
$routes->get('contact', [\App\Controllers\Frontend\Contactcontroller::class, 'index']);
$routes->get('category', [\App\Controllers\Frontend\Categorycontroller::class, 'index']);
$routes->get('product', [\App\Controllers\Frontend\Productcontroller::class, 'index']);
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

	$routes->group('category', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Categorycontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Categorycontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Categorycontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Categorycontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Categorycontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Categorycontroller::update');
		$routes->get('destroy/(:any)', 'App\Controllers\Extranet\Categorycontroller::destroy/$1');
    });
	
	$routes->group('banner', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Bannercontroller::index');
		$routes->post('update', 'App\Controllers\Extranet\Bannercontroller::update');
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
		$routes->get('show', 'App\Controllers\Extranet\Brandcontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Brandcontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Brandcontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Brandcontroller::destroy');
    });		

	$routes->group('exclusive', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Exclusivecontroller::index');
		$routes->post('update', 'App\Controllers\Extranet\Exclusivecontroller::update');
    });	

	$routes->group('guarantee', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Guaranteecontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Guaranteecontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Guaranteecontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Guaranteecontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Guaranteecontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Guaranteecontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Guaranteecontroller::destroy');
    });			

	$routes->group('product', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Productcontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Productcontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Productcontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Productcontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Productcontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Productcontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Productcontroller::destroy');
    });

	$routes->group('promotion', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Promotioncontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Promotioncontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Promotioncontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Promotioncontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Promotioncontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Promotioncontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Promotioncontroller::destroy');
    });

	$routes->group('slider', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Slidercontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Slidercontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Slidercontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Slidercontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Slidercontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Slidercontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Slidercontroller::destroy');
    });

	$routes->group('support', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Supportcontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Supportcontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Supportcontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Supportcontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Supportcontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Supportcontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Supportcontroller::destroy');
    });

	$routes->group('user', function ($routes) {
		$routes->get('/', 'App\Controllers\Extranet\Usercontroller::index');
		$routes->get('create', 'App\Controllers\Extranet\Usercontroller::create');
		$routes->post('store', 'App\Controllers\Extranet\Usercontroller::store');
		$routes->get('show', 'App\Controllers\Extranet\Usercontroller::show');
		$routes->get('edit', 'App\Controllers\Extranet\Usercontroller::edit');
		$routes->post('update', 'App\Controllers\Extranet\Usercontroller::update');
		$routes->get('destroy', 'App\Controllers\Extranet\Usercontroller::destroy');
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
