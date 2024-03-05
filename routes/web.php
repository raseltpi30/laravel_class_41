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
Route::get('login','App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('login','App\Http\Controllers\Auth\LoginController@authenticate')->name('login.confirm');

Route::get('register','App\Http\Controllers\RegisterController@create');
Route::post('register','App\Http\Controllers\RegisterController@store')->name('register');
// Route::post('register','App\Http\Controllers\RegisterController@store')->name('register');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/users', function () {
        return view('users.user');
    });
    Route::get('logout','App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    
    Route::get('/groups','App\Http\Controllers\UsersGroupsController@index');
    Route::get('/groups/create','App\Http\Controllers\UsersGroupsController@create');
    Route::post('/groups','App\Http\Controllers\UsersGroupsController@store');
    Route::delete('/groups/{id}','App\Http\Controllers\UsersGroupsController@destroy');
    
    Route::resource('users', 'App\Http\Controllers\UsersController');
    Route::get('users/{id}/sales', 'App\Http\Controllers\UserSaleController@index')->name('user.sales');
    Route::get('users/{id}/purchase', 'App\Http\Controllers\UserPurchaseController@index')->name('user.purchases');
    Route::get('users/{id}/payment', 'App\Http\Controllers\UserPaymentController@index')->name('user.payments');
    Route::get('users/{id}/receipt', 'App\Http\Controllers\UserReceiptController@index')->name('user.receipts');




    Route::resource('categories', 'App\Http\Controllers\CategoriesController');
    Route::resource('products', 'App\Http\Controllers\ProductController');
});

