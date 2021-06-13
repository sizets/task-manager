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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/savevertical', 'VerticalController@save')->name('save');
Route::get('/showvertical', 'VerticalController@show')->name('show.vertical');
Route::get('/editvertical/{id}', 'VerticalController@edit')->name('edit.vertical');
Route::post('/updatevertical/{id}', 'VerticalController@update')->name('update.vertical');
Route::get('/deletevertical/{id}', 'VerticalController@delete')->name('delete.vertical');








Route::get('/task', 'TaskController@index')->name('task');
Route::post('/savetask', 'TaskController@save')->name('task.save');
Route::get('/showtask', 'TaskController@show')->name('show.task');
Route::get('/edittask/{id}', 'TaskController@edit')->name('edit.task');
Route::post('/updatetask/{id}', 'TaskController@update')->name('update.task');
Route::get('/deletetask/{id}', 'TaskController@delete')->name('delete.task');




Route::get('/user', 'UserController@index')->name('User');
Route::post('/saveuser', 'UserController@save')->name('user.save');
Route::get('/showuser', 'UserController@show')->name('show.user');
Route::get('/edituser/{id}', 'UserController@edit')->name('edit.user');
Route::post('/updateuser/{id}', 'UserController@update')->name('update.user');
Route::get('/deleteuser/{id}', 'UserController@delete')->name('delete.user');


Route::get('/userform', 'UserController@form')->name('User');


Route::get('/report', 'ReportController@index')->name('report');
Route::post('/savereport', 'ReportController@save')->name('report.save');

Route::get('/showreport', 'ShowReportController@index')->name('report.show');















