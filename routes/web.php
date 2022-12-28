<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::post("login",[UserController::class,'login'])->name('userlogin');

Route::get('/',[ProductController::class,'index'])->name('home');
Route::view('/login', 'login'); //returns login.blade.php

Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::get("/search",[ProductController::class,'search'])->name('searchheader');
Route::post('/add-to-cart',[ProductController::class,'addtocart'])->name('add_to_cart');
Route::get('/logout',[UserController::class,'logout'])->name('log_out');
Route::get('/cart-list',[ProductController::Class,'cartList'])->name('cart_list');
Route::post('/remove-cart-list',[ProductController::class,'removeCartlist'])->name('remove_cart');
Route::get('/ordernow',[ProductController::class,'orderNow'])->name('order_now');
Route::post('/orderplace',[ProductController::class,'orderPlace'])->name('order_place');
Route::get('/myorder',[ProductController::class,'myOrder'])->name('myorder');