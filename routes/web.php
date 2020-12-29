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

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        return view('admin.index');
    });
});          
Route::group(['prefix'=>'Phim'],function(){
    Route::get('','PhimController@index')->name('admin.phim.index');

    Route::get('create','PhimController@create')->name('admin.phim.create');
    Route::post('create','PhimController@store');

    Route::get('update/{id}','PhimController@edit')->name('admin.phim.update');
    Route::post('update/{id}','PhimController@update');

    Route::get('delete/{id}','PhimController@delete')->name('admin.phim.delete');
    

});  

