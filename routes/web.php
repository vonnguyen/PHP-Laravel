<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\BootsController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ChitietController;
use App\Http\Controllers\Client\CollectionController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\InfomationController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\ShippingController;
use App\Http\Controllers\Client\WishController;
use App\Http\Controllers\HomeController;
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


// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('trangchu');

    Route::prefix('category')->name('category.')->group(function () {
        Route::post('/add', [CategoryController::class, 'add'])->name('add');
        Route::get('/listds', [CategoryController::class, 'list'])->name('listds');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        Route::get('/add', [CategoryController::class, 'showadd'])->name('showadd');
        Route::get('/update/{id}', [CategoryController::class, 'showupdate'])->name('showupdate');
        Route::post('/update/{id}', [CategoryController::class, 'sua'])->name('sua');
    });

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/list', [UsersController::class, 'list'])->name('list');
        Route::get('/add', [UsersController::class, 'showadd'])->name('add');
        Route::post('/add', [UsersController::class, 'add'])->name('postadd');
        Route::get('/update/{id}', [UsersController::class, 'showupdate'])->name('showupdate');
        Route::post('/update/{id}', [UsersController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('delete');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/list', [ProductController::class, 'list'])->name('list');
        Route::get('/add', [ProductController::class, 'showadd'])->name('add');
        Route::post('/add', [ProductController::class, 'add'])->name('postadd');
        Route::get('/update/{id}', [ProductController::class, 'showupdate'])->name('showupdate');
        Route::post('/update/{id}', [ProductController::class, 'sua'])->name('sua');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    });

    Route::prefix('groups')->name('groups.')->group(function () {
        Route::get('/list', [GroupController::class, 'list'])->name('list');
        Route::get('/add', [GroupController::class, 'showadd'])->name('add');
        Route::post('/add', [GroupController::class, 'add'])->name('postadd');
        Route::get('/update/{id}', [GroupController::class, 'showupdate'])->name('showupdate');
        Route::post('/update/{id}', [GroupController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [GroupController::class, 'delete'])->name('delete');
    });
});

//client

    Route::get("/home", [HomeController::class, 'index'])->middleware('auth')->name('home');
    Route::get("/product", [ClientProductController::class, 'index'])->middleware('auth')->name('shoes');
    Route::get("/product/{id}", [ClientProductController::class, 'detail'])->middleware('auth')->name('product');

    Route::get("/boots", [BootsController::class, 'index'])->middleware('auth')->name('boots');
    Route::get("/collection", [CollectionController::class, 'index'])->middleware('auth')->name('collection');
    Route::get("/blog", [BlogController::class, 'index'])->middleware('auth')->name('blog');
    Route::get("/whish", [WishController::class, 'index'])->middleware('auth')->name('whish');
    Route::get("/contact", [ContactController::class, 'index'])->middleware('auth')->name('contact');
    Route::get("/about", [AboutController::class, 'index'])->middleware('auth')->name('about');
    
    Route::get("/chitietsp", [ChitietController::class, 'index'])->middleware('auth')->name('chitietsp');
    Route::get("/infomation", [InfomationController::class, 'index'])->middleware('auth')->name('infomation');
    Route::get("/shipping", [ShippingController::class, 'index'])->middleware('auth')->name('shipping');
    Route::get("/payment", [PaymentController::class, 'index'])->middleware('auth')->name('payment');


    Route::get("/", [HomeController::class, 'index'])->middleware('auth');
    Auth::routes();

// cart
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::post('/add', [CartController::class, 'add'])->middleware('auth')->name('add');
        Route::post('/delete', [CartController::class, 'remove'])->middleware('auth')->name('delete');
});
