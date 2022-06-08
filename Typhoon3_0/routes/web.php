<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetDataBase;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DishesManagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;




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

Route::get('/', function () {
    return view('home');
});


Route::get('/menu', function () {
    return view('menu');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/cart', function () {
    return view('cart');
});

Auth::routes();

// Route::get('menu', [App\Http\Controllers\GetDataBase::class, 'index']);

Auth::routes();

Route::get('/menu/{dish_id}', [App\Http\Controllers\DishController::class, 'show'])->name('showDishes');
Route::get('menu', [App\Http\Controllers\DishController::class, 'index']);

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cartIndex');
Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'initHome'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'initHome'])->name('home');

Route::get('user', function(){
    return 'User';
});
Route::get('admin', function(){
    return 'Admin';
});
Route::get('admin', [App\Http\Controllers\AdminController::class, 'home'])->name('admin');
Route::get('admin/menu', [App\Http\Controllers\AdminController::class, 'menu'])->name('adminMenu');
Route::get('admin/menu/{dish_id}', [App\Http\Controllers\AdminController::class, 'dishes'])->name('adminDishes');
Route::get('admin/order', [App\Http\Controllers\OrderController::class, 'orders'])->name('adminOrder');
Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'home'])->name('adminHome');
Route::get('admin/orders', function () {
    return view('admin.order');
});
Route::get('admin/create', function(){
    return view('admin.create_dish');
})->name('create');
Route::get('admin/menu/{id}/update', [DishesManagerController::class, 'update'])->name('update-dish');
Route::post('admin/menu/{id}/update', [DishesManagerController::class, 'updateDish'])->name('update-dish-submit');

Route::get('user', [App\Http\Controllers\UserController::class, 'home'])->name('user');
Route::get('user/menu', [App\Http\Controllers\UserController::class, 'menu'])->name('userMenu');
Route::get('user/menu/{dish_id}', [App\Http\Controllers\UserController::class, 'dishes'])->name('userDishes');
Route::get('user/orders', [App\Http\Controllers\UserController::class, 'orders'])->name('userOrders');
Route::get('user/home', [App\Http\Controllers\UserController::class, 'home'])->name('userHome');
Route::get('user/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('userContact');

Route::get('user/cart', [App\Http\Controllers\CartController::class, 'indexUser'])->name('cartIndexUser');
Route::get('user/add-to-cart/{id}', [CartController::class, 'addToCartUser'])->name('add.to.cartUser');
Route::patch('user/update-cart', [CartController::class, 'updateUser'])->name('update.cartUser');
Route::delete('user/remove-from-cart', [CartController::class, 'removeUser'])->name('remove.from.cartUser');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cartIndex');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

Route::resource('dishes', DishesManagerController::class);
Route::get('/test/{names}', [App\Http\Controllers\OrderController::class, 'order'])->name('tests');