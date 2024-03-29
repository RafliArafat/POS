<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// routes/web.php
Route::get('/products/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('products.food_beverage');
Route::get('/products/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('products.beauty_health');
Route::get('/products/category/home-care', [ProductController::class, 'homeCare'])->name('products.home_care');
Route::get('/products/category/baby-kid', [ProductController::class, 'babyKid'])->name('products.baby_kid');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');

Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('user.profile');