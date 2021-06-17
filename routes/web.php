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

// Home
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

// Projects
Route::get('projects', 'App\Http\Controllers\ProjectsController@index');
Route::get('projects/create', 'App\Http\Controllers\ProjectsController@create');
Route::post('projects', 'App\Http\Controllers\ProjectsController@store');
Route::get('projects/{project_id}/edit', 'App\Http\Controllers\ProjectsController@edit');
Route::patch('projects/{project_id}', 'App\Http\Controllers\ProjectsController@update');
Route::delete('projects/{project_id}', 'App\Http\Controllers\ProjectsController@destroy');

// Self
Route::get('self', 'App\Http\Controllers\SelfController@index');

// Login
Route::get('login', 'App\Http\Controllers\LoginController@index');
Route::post('login', 'App\Http\Controllers\LoginController@verify');
