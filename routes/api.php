<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});

Route::middleware('auth:api')->group(function () {
    Route::get('/blogs/unique', 'BlogController@apiCheckUnique')->name('api.blogs.unique');
});


Route::group(['prefix' => 'manage',  'middleware' => ['role:SuperAdministrator']], function() {
    Route::resource('profile', 'ProfileController');    
});