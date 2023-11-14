<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProductsController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');

//Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'index'])->name('carrito');

Route::get('products/list', [ProductsController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('products/guardar',[ProductsController::class, 'store'])->name('products.store');
route::get('products/{id}/delete',[ProductsController::class, 'destroy'])->name('products.delete');


Route::post('products/{id}/update', [ProductsController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');

Route::get('product/image/{id}', [ProductsController::class, 'showImage'])->name('product.img');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', 'FrontController@index' );
// rutas del carrito
//Route::post('/cart-add',    'CartController@add')->name('cart.add');

//Route::get('/cart-checkout','CartController@cart')->name('cart.checkout');

//Route::post('/cart-clear',  'CartController@clear')->name('cart.clear');

//Route::post('/cart-removeitem',  'CartController@removeitem')->name('cart.removeitem');
