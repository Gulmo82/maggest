<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMovimentController;
use App\Http\Controllers\UserManagerController;
use App\Mail\TestEmail;
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


Route::middleware('auth')->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');

    Route::put('productmoviment/{product}', [ProductMovimentController::class, 'moviment'])->name('product-moviment');


    Route::resource('customer', CustomerController::class)->middleware('can:manage-customer');
    Route::resource('user', UserManagerController::class)->middleware('can:manage-user');

    Route::resources([

        'products' => ProductController::class,
    ]);

    Route::get('testmail', function () {

        Mail::to('gulmo82@gmail.com')->send(new TestEmail(Auth::user()));
    });
});
