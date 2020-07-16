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


Route::get('/', 'MainController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
//    Route::get('/cabinet', function () {
//        return view('pages.cabinet');
//    });
    Route::resource('/programs', 'AdminController');
    Route::get('/kind', 'Kind_ProgramsController@store')->name('kind');
    Route::delete('/kind/destroy/{id}', 'Kind_ProgramsController@destroy')->name('kind.destroy');
    Route::get('/details/{id}','AdminController@details')->name('admin.details');
});
Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {
    Route::resource('/programs', 'AdminController')->only('index', 'show');
    Route::get('/details/{id}','AdminController@details')->name('user.details');
});
Route::group(['middleware' => 'nutritionist', 'prefix' => 'nutritionist'], function () {
    Route::resource('/programs', 'AdminController')->only('index', 'show');
    Route::get('/details','AdminController@details');
});
Route::group(['middleware' => 'trainer', 'prefix' => 'trainer'], function () {
    Route::resource('/programs', 'AdminController')->only('index', 'show');
    Route::get('/details','AdminController@details');
});


