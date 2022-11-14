<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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


Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::get('/home',function(){
    return view('auth.home');
})->name('home');

Route::post('/users',[UserController::class,'store']); //guarda un nuevo usuario
Route::get('/users/index',[UserController::class,'index'])->name('users.index');  //Muestra todos los usuarios
Route::get('/users/create',[UserController::class,'create'])->name('users.create'); //Manda a formulario crear usuarios
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show'); //Muestra detalles de un usuario
Route::get('/users/edit/{user}',[UserController::class,'edit'])->name('users.edit'); // manda al form editar usuario recive un objeto usuario

Route::put('/users/update/{id}',[UserController::class,'update'])->name('users.update'); //actualiza un usuario recive el valor del id
Route::delete('/users/delete/{user}',[UserController::class,'destroy'])->name('users.destroy'); // elimina un usuario en especifico recive un objeto usuario

Route::get('/clients/index',[ClientController::class,'index'])->name('clients.index');  //Muestra todos los clientes
Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create'); //Manda a formulario crear clientes
Route::get('/clients/{id}',[ClientController::class,'show'])->name('clients.show'); //Muestra detalles de un cliente
Route::get('/clients/edit/{client}',[ClientController::class,'edit'])->name('clients.edit'); // manda al form editar cliente recive un objeto cliente
Route::post('/clients',[ClientController::class,'store'])->name('clients.store'); //guarda un nuevo cliente
Route::put('/clients/update/{id}',[ClientController::class,'update'])->name('clients.update'); //actualiza un cliente recive el valor del id
Route::delete('/clients/delete/{client}',[ClientController::class,'destroy'])->name('clients.destroy'); // elimina un cliente en especifico recive un objeto cliente

Route::get('/brands/index',[BrandController::class,'index'])->name('brands.index');  //Muestra todos los marcas
Route::get('/brands/create',[BrandController::class,'create'])->name('brands.create'); //Manda a formulario crear marcas
Route::get('/brands/{id}',[BrandController::class,'show'])->name('brands.show'); //Muestra detalles de un marca
Route::get('/brands/edit/{brand}',[BrandController::class,'edit'])->name('brands.edit'); // manda al form editar marca recive un objeto marca
Route::post('/brands',[BrandController::class,'store'])->name('brands.store'); //guarda un nuevo marca
Route::put('/brands/update/{id}',[BrandController::class,'update'])->name('brands.update'); //actualiza un marca recive el valor del id
Route::delete('/brands/delete/{brand}',[BrandController::class,'destroy'])->name('brands.destroy'); // elimina un marca en especifico recive un objeto marca

Route::get('/categories/index',[CategoryController::class,'index'])->name('categories.index');  //Muestra todos los categorias
Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create'); //Manda a formulario crear categorias
Route::get('/categories/{id}',[CategoryController::class,'show'])->name('categories.show'); //Muestra detalles de un categoria
Route::get('/categories/edit/{category}',[CategoryController::class,'edit'])->name('categories.edit'); // manda al form editar categoria recive un objeto categoria
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store'); //guarda un nuevo categoria
Route::put('/categories/update/{id}',[CategoryController::class,'update'])->name('categories.update'); //actualiza un categoria recive el valor del id
Route::delete('/categories/delete/{category}',[CategoryController::class,'destroy'])->name('categories.destroy'); // elimina un categoria en especifico recive un objeto categoria

Route::get('/coupons/index',[CouponController::class,'index'])->name('coupons.index');  //Muestra todos los cupones
Route::get('/coupons/create',[CouponController::class,'create'])->name('coupons.create'); //Manda a formulario crear cupones
Route::get('/coupons/{id}',[CouponController::class,'show'])->name('coupons.show'); //Muestra detalles de un cupon
Route::get('/coupons/edit/{coupon}',[CouponController::class,'edit'])->name('coupons.edit'); // manda al form editar cupon recive un objeto cupon
Route::post('/coupons',[CouponController::class,'store'])->name('coupons.store'); //guarda un nuevo cupon
Route::put('/coupons/update/{id}',[CouponController::class,'update'])->name('coupons.update'); //actualiza un cupon recive el valor del id
Route::delete('/coupons/delete/{coupon}',[CouponController::class,'destroy'])->name('coupons.destroy'); // elimina un cupon en especifico recive un objeto cupon
