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

Route::group(['prefix' => 'auth'], function() {
    Route::post('login', 'AuthLoginController')->name('authLogin');

    Route::group(['middleware' => 'jwt.auth'], function(){
        Route::get('user', 'AuthUserController')->name('authUser');
        Route::post('user', 'AuthLogoutController')->name('authLogout');
    });

    Route::group(['middleware' => 'jwt.refresh'], function(){
        Route::get('refresh', 'AuthRefreshController')->name('authRefresh');
    });
});