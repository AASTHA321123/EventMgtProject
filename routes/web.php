<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Item;
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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/',[pageController::class,'home'])->name('home');
Route::get('/about',[pageController::class,'about'])->name('about');;
Route::get('/contact',[pageController::class,'contact'])->name('contact');;
Route::get('/services',[pageController::class, 'services'])->name('services');;


Route::get('/viewpackage/{id}',[pageController::class,'viewpackage'])->name('viewpackage');

Route::get('/search',[pageController::class,'search'])->name('search');
Route::post('/review/stores',[pageController::class,'reviewstore'])->name('review.store');

//Auth
Route::middleware(['auth'])->group(function(){
Route::get('/bookpackage/{id}',[pageController::class,'bookpackage'])->name('bookpackage');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');

Route::post('/addtocart',[CartController::class,'store'])->name('addtocart');
Route::get('/checkout/{cartid}',[CartController::class,'checkout'])->name('checkout');
Route::get('/cart/{id}/destroy',[CartController::class,'destroy'])->name('cart.destroy');

Route::get('/order/{cartid}/{totalprice}',[OrderController::class,'store'])->name('order.store');
});


Route::get('/dashboard', [DashboardController::class,'dashboard'])->middleware(['auth', 'isadmin'])->name('dashboard');

Route::middleware(['auth' ,'isadmin'])->group(function () {
//Category
Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');

//Notice
Route::get('/notice',[NoticeController::class,'index'])->name('notice.index');
Route::get('/notice/create',[NoticeController::class,'create'])->name('notice.create');
Route::post('/notice/create/store',[NoticeController::class,'store'])->name('notice.store');
Route::get('/notice/{id}/edit',[NoticeController::class,'edit'])->name('notice.edit');
Route::post('/notice/{id}/update',[NoticeController::class,'update'])->name('notice.update');
Route::get('/notice/{id}/destroy',[NoticeController::class,'destroy'])->name('notice.destroy');


//Item
Route::get('/items',[ItemController::class,'index'])->name('items.index');
    Route::get('/items/create',[ItemController::class,'create'])->name('items.create');
    Route::post('/items/store',[ItemController::class,'store'])->name('items.store');
    Route::get('/items/{id}/edit',[ItemController::class,'edit'])->name('items.edit');
    Route::post('/items/{id}/update',[ItemController::class,'update'])->name('items.update');
    Route::get('/items/{id}/destroy',[ItemController::class,'destroy'])->name('items.destroy');

    //package
    Route::get('/packages',[PackageController::class,'index'])->name('packages.index');
    Route::get('/packages/create',[packageController::class,'create'])->name('packages.create');
    Route::post('/packages/store',[packageController::class,'store'])->name('packages.store');
    Route::get('/packages/{id}/edit',[packageController::class,'edit'])->name('packages.edit');
    Route::post('/packages/{id}/update',[packageController::class,'update'])->name('packages.update');
    Route::get('/packages/{id}/destroy',[packageController::class,'destroy'])->name('packages.destroy');

//Banner
    Route::get('/banners',[BannerController::class,'index'])->name('banners.index');
    Route::get('/banners/create',[BannerController::class,'create'])->name('banners.create');
    Route::post('/banners/store',[BannerController::class,'store'])->name('banners.store');
    Route::get('/banners/{id}/edit',[BannerController::class,'edit'])->name('banners.edit');
    Route::post('/banners/{id}/update',[BannerController::class,'update'])->name('banners.update');
    Route::get('/banners/{id}/destroy',[BannerController::class,'destroy'])->name('banners.destroy');




//orders
Route::get('/orders',[OrderController::class,'index'])->name('orders.index');
Route::post('/orders/store',[OrderController::class,'store'])->name('orders.store');
Route::get('/orders/{id}/{status}',[OrderController::class,'status'])->name('orders.status');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

 //Review
 Route::post('/packages/{package}/review', [ReviewController::class, 'store'])->name('reviews.store');


});

require __DIR__.'/auth.php';
