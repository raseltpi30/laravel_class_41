<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    return view('users.user');
});
Route::get('/groups','App\Http\Controllers\UsersGroupsController@index');
Route::get('/groups/create','App\Http\Controllers\UsersGroupsController@create');
Route::post('/groups','App\Http\Controllers\UsersGroupsController@store');
Route::delete('/groups/{id}','App\Http\Controllers\UsersGroupsController@destroy');


Route::resource('users', 'App\Http\Controllers\UsersController');
Route::resource('categories', 'App\Http\Controllers\CategoriesController');
