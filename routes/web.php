<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProgramController;

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

// Praktikum 1
// Route::get('/', function () {
//     echo"Selamat Datang";
// });

// Route::get('/about', function () {
//     return "NAMA : RISKY DWI RAMADHAN <br> NIM : 1941720234";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman artikel dengan id $id";
// });

// Praktikum 2
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Praktikum 3

Route::get('/home',[HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/{id}', [ProductsController::class,'product']);
});

Route::get('/{param}',[NewController::class, 'index']);
 
Route::prefix('program')->group(function () {
    Route::get('/{id}', [ProgramController::class,'program']);
});

Route::get('/about',[NewController::class, 'about']);

Route::resource('/contact',[ContactController::class, 'contact']);
