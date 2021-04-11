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
    return view('login');
});

Route::get('/login', "LoginController@login");

Route::post('/login/checklogin', "LoginController@checkLogin");

Route::get('/register', "LoginController@register");

Route::post('/register/checkRegister', "LoginController@checkRegister");

Route::get('/email', "LoginController@email");
Route::post('/email/checkEmail', "LoginController@checkEmail");

Route::get('/citizen', "family__data@index");
Route::post('/citizen', "family__data@store");

Route::get('/index', function () {
    return view('index');
});

// Route::get('/citizen', function () {
//     return view('citizen');
// });

Route::get('/charts1', function () {
    return view('charts1');
});

Route::get('/charts2', function () {
    return view('charts2');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

// Route::get('/citizen', function () {
//     return view('citizen');
// });


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