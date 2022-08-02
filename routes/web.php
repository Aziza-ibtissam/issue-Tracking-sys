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
 Route::get('/home', 'HomeController@index')->name('home');
Route::resource('tasks', 'TaskController');
Route::get('task/soft/delete/{id}', 'TaskController@softDelete')
->name('soft.delete');
Route::resource('users', 'UserController');

Route::get('task/reOpenTask/{id}', 'TaskController@reOpenTask')
->name('reOpenTask');
Route::get('task/closeTask/{id}', 'TaskController@closeTask')
->name('closeTask');

Route::get('task/reSloveTask/{id}', 'TaskController@reSloveTask')
->name('reSloveTask');
Route::get('task/assignto/{id}', 'TaskController@assignto')
->name('assignto');
Route::get('task/assigned', 'TaskController@assigned')
->name('assigned');

/*
Route::get('task/trash', 'TaskController@trashedTasks')
->name('task.trash');
Route::get('task/stautsTask', 'TaskController@stautsTask')
->name('task.stautsTask');


Route::get('task/back/from/trash/{id}', 'TaskController@backFromSoftDelete')
->name('task.back.from.trash');

Route::get('task/delete/from/trash/{id}', 'TaskController@deleteForEver')
->name('task.delete.from.trash');
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
