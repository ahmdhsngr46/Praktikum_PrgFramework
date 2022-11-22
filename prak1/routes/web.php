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
    return view('welcome');
});

Route::get('/lat1', function () {
    echo "ini adalah latihan 1";
});

Route::get('/lat2',function () {
    return view('/lat2');
});

Route::get('/pertambahan/{a}/{b}', function($a,$b) {
    $c-$a+$b;
    return view('pertambahan', ["a"=>$a,"b"=>$b,"c"=>$c]);
});