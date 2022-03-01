<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {

    Route::get('/dashboard',function(){
        return view('Admin.component.dashboard');
    });
    // Route::get('/user/create-user', function () {
    //     return view('Admin.component.products.create');
    // });
    // Route::get('/user/manage-user', function ()) {
    //     return view('Admin.component.products.index');

    // });
    // Route::get('/product/create-product', function ($id) {

    // });
    // Route::get('/product/manage-product', function ($id) {

    // });
    Route::resource('products', ProductController::class);
    Route::resource('users',UserController::class);
});

