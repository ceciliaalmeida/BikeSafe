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

Route::get('/', function () {
    $nome = "Matheus";
    $idade = 29;
    $array = [1, 2, 3, 4, 5];
    $bikes = ['monark', 'houston'];

    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Programador",
            'array' => $array,
            'bikes' => $bikes


        ]
    );
});

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
