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
Route::get('/charts2', "charts2Controller@index");

Route::get('/addChild', "addChildController@index");
Route::post('/addChild', "addChildController@store");

// route Tables for palestine
Route::get('/gropTable', "groupTableController@index");
Route::get('/exportedTable', "exportedTableController@index");

Route::get('/index1', function () {
    return view('index1');
});

Route::get('/nablus', "nablusController@index");
Route::get('/ramallah', "ramallahController@index");
Route::get('/hebron', "hebronController@index");
Route::get('/jericho', "jerichoController@index");
Route::get('/qalqilya', "qalqilyaController@index");
Route::get('/tulkarm', "tulkarmController@index");
Route::get('/jenin', "jeninController@index");

Route::get('/gropTableNablus', "groupTableNablusController@index");
Route::get('/exportedTableNablus', "exportedTableNablusController@index");

Route::get('/gropTableramallah', "groupTableramallahController@index");
Route::get('/exportedTableramallah', "exportedTableramallahController@index");

Route::get('/gropTablehebron', "groupTablehebronController@index");
Route::get('/exportedTablehebron', "exportedTablehebronController@index");

Route::get('/gropTablejericho', "groupTablejerichoController@index");
Route::get('/exportedTablejericho', "exportedTablejerichoController@index");

Route::get('/gropTableqalqilya', "groupTableqalqilyaController@index");
Route::get('/exportedTableqalqilya', "exportedTableqalqilyaController@index");

Route::get('/gropTabletulkarm', "groupTabletulkarmController@index");
Route::get('/exportedTabletulkarm', "exportedTabletulkarmController@index");

Route::get('/gropTablejenin', "groupTablejeninController@index");
Route::get('/exportedTablejenin', "exportedTablejeninController@index");