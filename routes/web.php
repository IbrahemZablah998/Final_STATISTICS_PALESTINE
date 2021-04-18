<?php

use Illuminate\Support\Facades\Route;

// the home page to login
Route::get('/', function () {
    return view('Auth.login');
});

// route register
Route::get('/register', "LoginController@register");
Route::post('/register/checkRegister', "LoginController@checkRegister");

// route email
Route::get('/email', "LoginController@email");
Route::post('/email/checkEmail', "LoginController@checkEmail");
Route::get('/confirmation', function () {
    return view('Auth.confirmation');
});

// route login
Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@login']);
Route::post('login/checklogin', "LoginController@checkLogin");

// route logout
Route::get('logout', 'LoginController@logout');

// route fill data citizen
Route::get('/citizen', "familyController@index");
Route::post('/citizen', "familyController@store");

// route charts
Route::get('/charts1', "charts1Controller@index");
Route::get('/charts2', function () {
    return view('Charts.charts2');
});
Route::get('/floatChart', function () {
    return view('Charts.floatChart');
});

// route Tables
Route::get('/gropTable', function () {
    return view('Tables.gropTable');
});
Route::get('/exportedTable', function () {
    return view('Tables.exportedTable');
});

Route::get('/index1', function () {
    return view('index1');
});