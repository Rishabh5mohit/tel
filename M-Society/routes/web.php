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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/resident_list','residentcontroller@owner');
Route::post('/resident_list','residentcontroller@owner_update');   

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom',['uses' =>	'userctrl@login' , 'as' =>'login.custom' ]);
Route::group(['middleware'=>'auth'],function(){
	Route::get('/owner', function () {
    return view('owner');
	})->name('owner');

	Route::get('/shop', function () {
    return view('shop');
	})->name('shop');
	Route::get('/resident', function () {
    return view('resident');
	})->name('resident');
	Route::get('/worker', function () {
    return view('worker');
	})->name('worker');
});
Route::get('/resident','residentcontroller@unregistered');
Route::post('/resident','residentcontroller@store');
Route::get('/resident/index','residentcontroller@index');

Route::resource('complaint','ComplaintController');
Route::resource('worker','workercontroller');
Route::resource('validate','validatecontroller');