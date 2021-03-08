<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

/*
Route::get('/', function () {
    return view('layouts.baseAdmin');
});
*/

//Route::get('/', [InicioController::class, 'index']);

Auth::routes(['register' =>false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');


Route::resource('/categories', CategoryController::class)->names('categories')->parameters(['categories' => 'request'])->middleware('auth');

Route::resource('/products', ProductController::class)->names('products')->parameters(['products' => 'request'])->middleware('auth');

Route::resource('/users', UserController::class)->names('users')->parameters(['users' => 'request'])->middleware('auth');
