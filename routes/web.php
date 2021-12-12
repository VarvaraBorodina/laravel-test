<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
    /*$list = Product::query()
        ->where('status', true)
        ->where('price', '>', '1000')
        ->get();
    $category = new Category();
    $category->name = "Smartphones";
    $category->save();
    $data = [
        'name' => 'Laptops'
    ];
    Category::create($data);*/
    return view('main');
});

Route::get('show-form', [FormController::class, 'showForm'])->name('showForm');
Route::post('show-form', [FormController::class, 'postForm'])->name('namePostForm');
Route::get('product/{id?}', [ProductController::class, 'index'])->name('show-product');


Route::get('store', function () {
    return view('store');
});


Route::get('hello', [SiteController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
