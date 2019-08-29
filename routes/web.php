<?php
/*
 *
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('datatables','DatatablesController@anyData')->name('datatables.data');
Route::get('getIndex','DatatablesController@getIndex');
Route::resource('users', 'UsersController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('ajax-crud', 'AjaxCrudController');
Route::get('ajax-curd','AjaxCrudController@index')->name('ajax-crud.index');
Route::post('ajax-curd/store','AjaxCrudController@store')->name('ajax-crud.store');
Route::get('ajax-crud/{id}/edit','AjaxCrudController@edit');

Route::put('ajax-curd/update','AjaxCrudController@update')->name('ajax-crud.update');
Route::get('ajax-crud/destroy/{id}','AjaxCrudController@destroy')->name('ajax-crud.delete');
*/



Route::resource('ajax-crud', 'AjaxCrudController');

Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');

Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');
