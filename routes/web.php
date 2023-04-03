<?php
// php artisan serve -> to run

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

// Search Route
Route::get('/search', [App\Http\Controllers\SearchController::class, 'show']);

// Discover page
Route::get('/stock', [App\Http\Controllers\StockController::class, 'show']);

// Products
Route::get('/test', function () {
    return view('test', [
        'categories' => Categories::tree(),
    ]);
})->name('test');

// Admin Panel
// I'm a genius
Route::group(['middleware' => ['App\Http\Middleware\AdminMiddleware']], function () {
    Route::get('/panel', [App\Http\Controllers\ItemController::class, 'show']);
    Route::post('/panel', [App\Http\Controllers\ItemController::class, 'store']);
    Route::get('/admin', function() {
        return view('admin');
    });
});

// Account page
Route::get('/account', [App\Http\Controllers\AccountController::class, 'index']);

// Auth Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Logout Route
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'preform']);
