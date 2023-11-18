<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProductsController;


Route::get('/perfil/editar', [PerfilController::class, 'editar'])->name('perfil.editar');
Route::post('/perfil/actualizar', [PerfilController::class, 'actualizar'])->name('perfil.actualizar');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'editar'])->name('perfil');

// Comenté estas líneas ya que están duplicadas
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products/list', [ProductsController::class, 'index'])->name('products.index');

Route::get('/', [ProductsController::class, 'indexs'])->name('welcome');
Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('products/guardar', [ProductsController::class, 'store'])->name('products.store');
Route::get('products/{id}/delete', [ProductsController::class, 'destroy'])->name('products.delete');
Route::post('products/{id}/update', [ProductsController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::get('product/image/{id}', [ProductsController::class, 'showImage'])->name('product.img');


// Comenté estas líneas ya que están duplicadas
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Comenté estas líneas ya que están duplicadas
// Route::get('/', 'FrontController@index' );

// Rutas del carrito (descomentar si es necesario)
// Route::post('/cart-add', 'CartController@add')->name('cart.add');
// Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
// Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
// Route::post('/cart-removeitem', 'CartController@removeitem')->name('cart.removeitem');
