<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Vender;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [HomeController::class, 'categories'])->name('category');

Route::resources([
  'products' => ProductController::class,
]);

Auth::routes();

Route::get('/test', function () {
  $json = \Illuminate\Support\Facades\File::get("database/data/products.json");
  //  return $json;
  return public_path("database/data/products.json");
});
