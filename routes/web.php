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


Route::get('/', 'MainController@index');
Route::get('/contact', 'MainController@contact');
Route::get('/about', 'MainController@about');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::resource('/programs', 'AdminController');
    Route::get('/kind', 'Kind_ProgramsController@store')->name('kind');
    Route::delete('/kind/destroy/{id}', 'Kind_ProgramsController@destroy')->name('kind.destroy');
    Route::get('/details/{id}', 'AdminController@details')->name('admin.details');
//    Route::resource('exercises', 'ExercisesController')->except('create','store');
    Route::get('exercises/create/{id}', 'ExercisesController@create')->name('exercises.create');
    Route::post('exercises/{id}', 'ExercisesController@store')->name('exercises.store');
    Route::get('exercises/all/{id}', 'ExercisesController@all_days')->name('exercises.all_ex');
    Route::get('exercises/show/{id}', 'ExercisesController@show')->name('exercises.show');
    Route::delete('exercises/destroy/{id}', 'ExercisesController@destroy')->name('exercises.destroy');
    Route::get('product', 'ProductController@index');
    Route::get('product/create', 'ProductController@create')->name('product.create');
    Route::post('product', 'ProductController@store')->name('product.store');
    Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::patch('product/{id}', 'ProductController@update')->name('product.update');
    Route::delete('product/delete/{id}', 'ProductController@delete')->name('product.delete');
    Route::get('/sort', 'SearchController@sort');
    Route::get('/search', 'SearchController@search');
    Route::get('/search_url', 'SearchController@search_url');
    Route::get('/coming_soon', function () {
        return view('coming_soon');
    });
    Route::get('/error', function () {
        return view('error');
    });
    Route::get('/user-program','UserProgramController@index');
    Route::post('/user-program/{id}','UserProgramController@store_program_user')->name('user.program');

});
Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {
    Route::resource('/programs', 'AdminController')->only('index', 'show');
    Route::get('/details/{id}', 'AdminController@details')->name('user.details');
    Route::get('exercises/all/{id}', 'ExercisesController@all_days')->name('user.exercises.all_ex');
    Route::get('exercises/show/{id}', 'ExercisesController@show')->name('user.exercises.show');
    Route::get('product', 'ProductController@index');
    Route::get('/sort', 'SearchController@sort');
    Route::get('/search', 'SearchController@search');
    Route::get('/coming_soon', function () {
        return view('coming_soon');
    });
    Route::get('/error', function () {
        return view('error');
    });
    Route::get('/user-program','UserProgramController@index');
    Route::get('/purchased/{id}','UserProgramController@purchased');
   //    Route::post('/user-program/{id}','UserProgramController@store_program_user')->name('user.program');
});
Route::group(['middleware' => 'nutritionist', 'prefix' => 'nutritionist'], function () {
    Route::resource('/programs', 'AdminController')->only('index', 'show');
    Route::get('/details', 'AdminController@details');
});
Route::group(['middleware' => 'trainer', 'prefix' => 'trainer'], function () {
    Route::resource('/programs', 'AdminController')->only('index', 'show');
    Route::get('/details', 'AdminController@details');
});


Route::get('/test', function () {
    return view('test');
});
