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

Route::group(['namespace' => 'Auth'], function () {
    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('{username}/invitation', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('{username}/invitation', 'RegisterController@register');

    // Password Reset Routes...
    Route::group(['as' => 'password.'], function () {
        $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('request');
        $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('email');
        $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('reset');
    });
    $this->post('password/reset', 'ResetPasswordController@reset');
});

Route::group(['namespace' => 'Web'], function () {

    Route::get('/Home', 'DashboardController@index')->name('Home');

    Route::get('/wallets', 'WalletsController@index')->name('Wallets');
    Route::get('/wallet/show', 'WalletsController@show')->name('wallet.show');

    Route::get('/users/new', 'UsersControllers@new')->name('user.new');

    Route::group(['prefix' => 'wallets', 'as' => 'wallets.'], function () {
        Route::get('/', 'WalletController@index')->name('index');
    });
});



