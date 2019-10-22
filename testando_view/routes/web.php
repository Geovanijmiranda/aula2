<?php

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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function() {
    phpinfo();
});

Route::middleware('verifica-hora')->get('/hello/{nome}/{idade?}', function(Request $r, $nome, $idade="-") {
    echo($r->id);
    return "Hello world, $nome!\nVc tem $idade anos";
});

Route::get('/boa-tarde/{nome?}', function($nome=""){
    return view('boatarde', ['nome' => $nome]);
});



