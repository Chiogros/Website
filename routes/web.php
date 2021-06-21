<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SelfController;
use App\Http\Controllers\AuthentificationController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

// Projects
/*
Route::get('projects', 'App\Http\Controllers\ProjectsController@index');
Route::get('projects/create', 'App\Http\Controllers\ProjectsController@create');
Route::post('projects', 'App\Http\Controllers\ProjectsController@store');
Route::get('projects/{project_id}/edit', 'App\Http\Controllers\ProjectsController@edit');
Route::patch('projects/{project_id}', 'App\Http\Controllers\ProjectsController@update');
Route::delete('projects/{project_id}', 'App\Http\Controllers\ProjectsController@destroy');
*/
Route::resource('projects', ProjectsController::class);

// Self
Route::get('self', [SelfController::class, 'index']);

// Login
Route::get('login', [AuthentificationController::class, 'index']);
Route::post('login/auth', [AuthentificationController::class, 'authentify']);
Route::post('logout', [AuthentificationController::class, 'logout']);
