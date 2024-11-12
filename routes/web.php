<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\onlineprojectcontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
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
//index route
Route::get('/', [onlineprojectcontroller::class, 'index'])->name('index');
// user route
Route::get('/register', [onlineprojectcontroller::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [onlineprojectcontroller::class, 'register']);

Route::get('/login', [onlineprojectcontroller::class, 'showloginForm'])->name('showloginform');
Route::post('/login', [onlineprojectcontroller::class, 'login'])->name('login');

Route::get('/index', [authcontroller::class, 'index'])->name('index');
Route::get('/logout', [authcontroller::class, 'logout'])->name('logout');
Route::get('/user',[onlineprojectcontroller::class,'displayuser'])->name('user.display');
Route::get('/edit/{id}',[onlineprojectcontroller::class,'edit']);
Route::post('/useredit/{id}',[onlineprojectcontroller::class,'update'])->name('user.edit');
Route::get('/delete/{id}',[onlineprojectcontroller::class,'deleteuser'])->name('user.delete');


//product route
Route::get('/product', [ProductController::class, 'create'])->name('products.create');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::get('/productshow', [ProductController::class, 'show'])->name('products.show');
Route::get('/productdelete/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/productedit/{id}',[productcontroller::class,'editproduct'])->name('products.edit');
Route::post('/productupdate/{id}',[productcontroller::class,'updateproduct'])->name('products.update');

//admin route
Route::get('/admin', [admincontroller::class, 'dashboard'])->name('dashboard');
Route::get('/layout', [admincontroller::class, 'layout'])->name('layout');

//product 
Route::get('/userdisplay', [usercontroller::class, 'userdisplay'])->name('user.product.display');
Route::get('/userdisplay', [usercontroller::class, 'display'])->name('user.product.display');

//product category
Route::get('/category/{id}/products', [CategoryController::class, 'addcategory'])->name('add.category');
Route::get('/category/{id}/{products}', [CategoryController::class, 'addCategoryToProduct'])->name('products.add_category');
Route::get('/index', [CategoryController::class, 'index'])->name('admin.category');

// add to card 
Route::get('/cartview', [CartController::class, 'cartview'])->name('products.cart.view');
Route::get('/addtocart/{id}', [CartController::class, 'addtocart'])->name('products.addtocart');
Route::post('/deletecart/{id}', [CartController::class, 'removecart'])->name('products.cart.remove');



