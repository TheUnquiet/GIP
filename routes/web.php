<?php
// php artisan serve -> to run

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routeSs for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', [ProductController::class, 'index']);


Route::get('/', function() {
    return view('intro');
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/ordersuccess', function () {
    return view('ordersuccess');
});


// Search Route
Route::get('/search', [App\Http\Controllers\SearchController::class, 'show']);

// Discover page
Route::get('/stock', [App\Http\Controllers\StockController::class, 'show']);

// Admin Panel
// I'm a genius
Route::group(['middleware' => ['App\Http\Middleware\AdminMiddleware']], function () {
    Route::get('/panel', [App\Http\Controllers\ItemController::class, 'show']);
    Route::post('/panel', [App\Http\Controllers\ItemController::class, 'store']);
});

// Account page
Route::get('/account', [App\Http\Controllers\AccountController::class, 'index']);

// Auth Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Logout Route
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'preform']);

// Foods Route
Route::get('/foods', [ProductController::class, 'showFoods']);

// Drinks
Route::get('/drinks', [ProductController::class, 'showDrinks']);

// Produce
Route::get('/produce', [ProductController::class, 'showProduce']);

// Frozen
Route::get('/frozen', [ProductController::class, 'showFrozen']);

// Cart functionality
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'cartList']);
Route::get('/remove-cart{id}', [ProductController::class, 'removeCartItem']);

// Order Routes
Route::get('/ordernow', [ProductController::class, 'orderNow']);
Route::post('/placeorder', [ProductController::class, 'placeOrder']);
Route::get('/myorders', [ProductController::class, 'myOrders']);