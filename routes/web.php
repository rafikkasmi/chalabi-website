<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PricesTableController;
use App\Http\Controllers\Admin\StoreDataController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\FrontendController as UserFrontendController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', [UserFrontendController::class, 'index']);
Route::get('category', [UserFrontendController::class, 'category']);
Route::get('category/{slug}', [UserFrontendController::class, 'viewCategory']);
Route::get('category/{cate_slug}/{prod_slug}', [UserFrontendController::class, 'viewProduct']);

Route::get('products', [UserFrontendController::class, 'productsPage']);


// Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {

    Route::get('cart', [CartController::class, 'viewCart']);
    Route::get('checkout', [CheckOutController::class, 'index']);
    Route::post('place-order', [CheckOutController::class, 'placeOrder']);

    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('view-order/{id}', [UserController::class, 'view']);

    Route::get('wishlist', [WishlistController::class, 'index']);
});

Route::middleware(['auth', 'isAdmin'])->prefix("admin")->group(function () {
// Route::middleware(['auth'])->group(function () {

    Route::get('/', [FrontendController::class, 'index']);

    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('add-category', [CategoryController::class, 'add']);
    Route::post('insert-category', [CategoryController::class, 'insert']);
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('brands', [BrandController::class, 'index']);
    Route::get('add-brand', [BrandController::class, 'add']);
    Route::post('insert-brand', [BrandController::class, 'insert']);
    Route::get('edit-brand/{id}', [BrandController::class, 'edit']);
    Route::put('update-brand/{id}', [BrandController::class, 'update']);
    Route::get('delete-brand/{id}', [BrandController::class, 'destroy']);


    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-product', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);
    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

    Route::get('prices-table', [PricesTableController::class, 'index']);   
    Route::post('update-prices', [PricesTableController::class, 'update']);

    Route::get('store-data', [StoreDataController::class, 'indexData']);   
    Route::put('update-store-data', [StoreDataController::class, 'updateData']);
    Route::get('store-front-images', [StoreDataController::class, 'indexImages']);   
    Route::put('update-store-front-images', [StoreDataController::class, 'updateImages']);

    Route::get('orders', [OrdersController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrdersController::class, 'view']);
    Route::put('update-order/{id}', [OrdersController::class, 'updateOrder']);
    Route::get('order-history', [OrdersController::class, 'orderHistory']);

    Route::get('users', [DashboardController::class, 'users']);
    Route::get('view-user/{id}', [DashboardController::class, 'viewUser']);
    Route::put('update-login-email', [DashboardController::class, 'updateEmail']);
    Route::put('update-password', [DashboardController::class, 'updatePassword']);
    
});
