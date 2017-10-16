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
    return view('landing.index');
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

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'DashboardController@index')->name('home');

        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/create', 'UsersControllers@create')->name('create');
            Route::post('/store', 'UsersControllers@store')->name('store');
        });

        Route::group(['prefix' => 'wallets', 'as' => 'wallets.'], function () {
            Route::get('/', 'WalletsController@index')->name('index');
            Route::get('/show/{uuid}', 'WalletsController@show')->name('show');
        });

        Route::group(['prefix' => 'trees', 'as' => 'trees.'], function () {
            //        Route::get('/', 'TreesController@index')->name('index');
            Route::get('/unilevel', 'UnilevelTreeController@index')->name('unilevel');
            Route::get('/unilevel/create', 'UnilevelTreeController@create')->name('unilevel.create');
            Route::get('/binary/create', 'BinaryTreeController@create')->name('binary.create');
            Route::get('/binary', 'BinaryTreeController@index')->name('binary');
            //        Route::get('/show', 'BinaryTreeController@show')->name('show');
        });

        Route::group(['prefix' => 'transfers', 'as' => 'transfers.'], function () {
            Route::get('/', 'TransfersController@index')->name('new');

        });

        Route::get('payments', function () {
            return view('payments.index');
        });

        /*******************        ADMIN.      ****************/
        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('home', function () {
                return view('admin.index');
            })->name('index');

            Route::group(['prefix' => 'wallets', 'as' => 'wallets.'], function () {
                Route::get('/', function () {
                    return view('admin.wallets.index');
                })->name('index');
            });

            Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
                Route::get('/', 'Admin\SettingsController@index')->name('settings');
            });
        });

    });

    Route::any('/ajax', 'BinaryTreeController@ajax')->name('ajax');
});
