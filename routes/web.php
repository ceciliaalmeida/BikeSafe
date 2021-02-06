<?php

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
use App\Http\Controllers\bikeController;

Route::get('/', [bikeController::class, 'index']);
Route::get('/bikes/create', [bikeController::class, 'create']);
Route::post('/bikes', [bikeController::class, 'store']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact/product', function () {
    return view('product');
});

Route::get('/product', function () {
    $busca = request('search');
    return view('product', ['busca' => $busca]);
});

Route::get('/product/{id?}', function ($id = null) {
    return view('productservice', ['id' => $id]);
});
