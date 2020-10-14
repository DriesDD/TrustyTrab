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
    return view('menu');
});
Route::get('isthisthetrustytrab', function () {      
return "No, this is Patrick!";  
});
Route::get('reviews', function () {
    return view('reviews');
});
Route::get('index', function () {  
    return redirect('/');  
});
