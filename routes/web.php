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

Route::group(['middleware' => ['web']], function() {
	Route::resource('home', 'HomeController');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'PanelController@panelTasks')->name('tasks');
Route::get('/create', 'PanelController@panelCreateTasks')->name('createTasks');
Route::get('/lists', 'PanelController@panelLists')->name('lists');
Route::get('/settings/{id}', 'PanelController@panelSettings')->name('settings');
Route::patch('/settings/{id}/edit/name', 'PanelController@panelUpdateSettings');
Route::patch('/settings/{id}/edit/email', 'PanelController@panelUpdateEmailSettings');
Route::patch('/settings/{id}/edit/password', 'PanelController@panelUpdatePasswordSettings');
Auth::routes();

