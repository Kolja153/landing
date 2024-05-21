<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminOrdersController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/orders', [OrdersController::class, 'new'])->name('order_new');

// Auth
Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return view('admin.admin_index');
    })->name('admin');

    Route::get('/admin/page', function () {
        return view('admin.admin_page');
    })->name('admin_page');

    Route::get('/admin/page_header', function () {
        return view('admin.admin_page_header');
    })->name('admin_page_header');

    Route::get('/admin/products', [AdminProductsController::class, 'index'])
        ->name('admin_products_index');
    Route::match(['GET', 'POST'], '/admin/products/new', [AdminProductsController::class, 'new'])
        ->name('admin_products_new');
    Route::delete('/admin/products/{id}', [AdminProductsController::class, 'delete'])
        ->name('admin_products_delete');
    Route::match(['GET', 'PATCH'], '/admin/products/{id}', [AdminProductsController::class, 'edit'])
        ->name('admin_products_edit');

    Route::get('/admin/orders', [AdminOrdersController::class, 'index'])
        ->name('admin_orders_index');
    Route::delete('/admin/orders/{id}', [AdminOrdersController::class, 'delete'])
        ->name('admin_orders_delete');
});







