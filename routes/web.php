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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/cabinet', function () {
    return view('pages.cabinet');
});

Route::get('/', 'MainController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/cabinet', function () {
        return view('pages.cabinet');
    });
});
Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {
    Route::get('/cabinet', function () {
        return view('pages.cabinet');
    });
});
Route::group(['middleware' => 'nutritionist', 'prefix' => 'nutritionist'], function () {

});
Route::group(['middleware' => 'trainer', 'prefix' => 'trainer'], function () {

});
