<?php

use Illuminate\Support\Facades\Route;
use ArielMejiaDev\LarapexCharts\LarapexChart;

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
    return view('login');
});
// register
Route::get('/login', "LoginController@login");
Route::post('/login/checklogin', "LoginController@checkLogin");

Route::get('/register', "LoginController@register");
Route::post('/register/checkRegister', "LoginController@checkRegister");

Route::get('/email', "LoginController@email");
Route::post('/email/checkEmail', "LoginController@checkEmail");

Route::get('/confirmation', function () {
    return view('confirmation');
});

// fill data
Route::get('/citizen', "family__data@index");
Route::post('/citizen', "family__data@store");

Route::get('/charts1', "charts1@index");

Route::get('/charts2', function () {
    return view('charts2');
});


Route::get('/index1', function () {
    return view('index1');
});
Route::get('/gropTable', function () {
    return view('gropTable');
});

Route::get('/exportedTable', function () {
    return view('exportedTable');
});

Route::get('/floatChart', function () {
    return view('floatChart');
});