<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('products/{product:slug}', [ProductController::class, 'show']);

Route::get('/{any}', function () {
    return view('products.index'); // Dit verwijst naar de view die je voor je Vue.js-app hebt ingesteld
})->where('any', '.*');


