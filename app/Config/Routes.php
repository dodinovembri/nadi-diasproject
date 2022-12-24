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
$routes->setDefaultNamespace('App\Controllers\Frontend');
$routes->setDefaultController('Homecontroller');
$routes->setDefaultMethod('index');
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
$routes->get('login', [\App\Controllers\Frontend\Authcontroller::class, 'login']);
$routes->get('forgot', [\App\Controllers\Frontend\Authcontroller::class, 'forgot']);
$routes->get('blog', [\App\Controllers\Frontend\Blogcontroller::class, 'index']);
$routes->get('cart', [\App\Controllers\Frontend\Cartcontroller::class, 'index']);
$routes->get('checkout', [\App\Controllers\Frontend\Checkoutcontroller::class, 'index']);
$routes->get('contact', [\App\Controllers\Frontend\Contactcontroller::class, 'index']);
$routes->get('product', [\App\Controllers\Frontend\Productcontroller::class, 'index']);
$routes->get('wishlist', [\App\Controllers\Frontend\Wishlistcontroller::class, 'index']);

// Routes Backend Website
$routes->group('admin', static function ($routes) {
    $routes->get('/', [\App\Controllers\Extranet\HomeController::class, 'index']);
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
