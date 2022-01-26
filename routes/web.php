<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckAuth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SiteController;
use \App\Models\Product;
use \App\Models\Category;
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
    return view('main');
});
Route::get('admin',function (){
    return view('admin.index');
});

Route::/*middleware(['auth', CheckAuth::class])->*/prefix('admin')->name('admin.')->group(function (){
    Route::resources([
        'brand' => \App\Http\Controllers\admin\BrandController::class,
        'category' => \App\Http\Controllers\admin\CategoryController::class,
        'product' => \App\Http\Controllers\admin\ProductController::class
    ]);
});

Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');

Route::get('wish-list', [\App\Http\Controllers\WishListController::class, 'index'])->name('wishList');
Route::post('add-to-wish-list', [\App\Http\Controllers\WishListController::class, 'addToWishList'])->name('addToWishList');

Route::get('test', function () {
    $balance = rand(0, 100);
    dump($balance);
    if($balance > 50){
        \App\Events\BingoEvent::dispatch($balance);
    }
});

Route::get('show-form', [FormController::class, 'showForm'])->name('showForm');
Route::post('show-form', [FormController::class, 'postForm'])->name('namePostForm');

Route::get('product/{id?}', [ProductController::class, 'index'])->name('show-product');
Route::get('catalog', [ProductController::class, 'catalog'])->name('catalog');



Route::get('hello', [SiteController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

