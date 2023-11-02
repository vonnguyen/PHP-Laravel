<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\BillController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\BootsController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ChitietController;
use App\Http\Controllers\Client\CollectionController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\InfomationController;
use App\Http\Controllers\Client\NotiController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\ShippingController;
use App\Http\Controllers\Client\WishController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


// Admin

Route::get('admin/login', [AdminAuthController::class, 'login'])->name('loginadmin');
Route::post('/admin/login', [AdminAuthController::class, 'submitLogin'])->name('postloginadmin');


Route::prefix('admin')->name('admin.')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('register', [AdminAuthController::class, 'register'])->name('register');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


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

    Route::prefix('bill')->name('bill.')->group(function () {
        Route::get('/list', [BillController::class, 'list'])->name('list');
    });


    Route::prefix('comments')->name('comments.')->group(function () {
        Route::get('/list', [AdminCommentController::class, 'list'])->name('list');
        Route::get('/delete/{id}', [AdminCommentController::class, 'delete'])->name('delete');
    });
});

//client
Route::get("/getNoti/{id}", [NotiController::class, 'getNoti'])->middleware('auth')->name('getNoti');
Route::get("/readAll/{id}", [NotiController::class, 'readAll'])->middleware('auth')->name('readAll');
// Route::get("/readOne/{id}", [NotiController::class, 'readOne'])->middleware('auth')->name('readOne');

Route::get("/vnpay_return", [PaymentController::class, 'vnPay_return'])->middleware('auth')->name('vnpay_return');
Route::get("/payment/vnpay", [PaymentController::class, 'vnPay'])->middleware('auth')->name('vnpay');

Route::get("/home", [HomeController::class, 'index'])->name('home');
Route::get("/product", [ClientProductController::class, 'index'])->name('shoes');
Route::get('/favorite/{id}', [ClientProductController::class, 'favorite'])->name('favorite');
Route::get("/chitietsp/{id}", [ClientProductController::class, 'detail'])->middleware('auth')->name('product');
Route::get("/chitietsp", [ChitietController::class, 'index'])->name('chitietsp');

Route::get("/boots", [BootsController::class, 'index'])->name('boots');
Route::get("/collection", [CollectionController::class, 'index'])->name('collection');
Route::get("/blog", [BlogController::class, 'index'])->name('blog');
Route::get("/whish", [WishController::class, 'index'])->middleware('auth')->name('whish');
Route::get("/contact", [ContactController::class, 'index'])->middleware('auth')->name('contact');
Route::get("/about", [AboutController::class, 'index'])->name('about');


Route::get("/infomation", [InfomationController::class, 'index'])->middleware('auth')->name('infomation');
Route::get("/shipping", [ShippingController::class, 'index'])->middleware('auth')->name('shipping');
Route::get("/payment/{id}", [PaymentController::class, 'index'])->middleware('auth')->name('payment');
Route::get("/bill/{id}", [PaymentController::class, 'detail_bill'])->middleware('auth')->name('detail_bill');

Route::get("/order", [PaymentController::class, 'order'])->middleware('auth')->name('order');
Route::get('/delete/{id}', [PaymentController::class, 'delete'])->middleware('auth')->name('delete');

Route::get("/profile", [ProfileController::class, 'index'])->middleware('auth')->name('profile');
Route::post("/profile", [ProfileController::class, 'update'])->middleware('auth')->name('update');


Route::get("/", [HomeController::class, 'index'])->middleware('auth');
Route::post("/faceid/login", [HomeController::class, 'faceidLogin']);

Auth::routes();

// cart
Route::prefix('cart')->name('cart.')->group(function () {
    Route::post('/add', [CartController::class, 'add'])->middleware('auth')->name('add');
    Route::post('/delete', [CartController::class, 'remove'])->middleware('auth')->name('delete');
});
Route::post("/saveinfo", [PaymentController::class, 'saveInfo'])->middleware('auth')->name('saveinfo');
Route::post("/postPayment", [PaymentController::class, 'postPayment'])->middleware('auth')->name('postPayment');

Route::prefix('comment')->name('comment.')->group(function () {
    Route::post('/add', [CommentController::class, 'add'])->name('add');
});
