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
    $this->post('login', 'LoginController@login'); //TODO: de preferencia todas las rutas deben tener nombre
    $this->post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('{username}/invitation', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('{username}/invitation', 'RegisterController@register'); //TODO: de preferencia todas las rutas deben tener nombre

    // Password Reset Routes...
    Route::group(['as' => 'password.'],function (){
        $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('request');
        $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('email');
        $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('reset');
    });
    $this->post('password/reset', 'ResetPasswordController@reset'); //TODO: de preferencia todas las rutas deben tener nombre
});

Route::get('/home', 'HomeController@index')->name('home');

//testing route
Route::get('/mycelium/order/create',function (){
    require_once('../app/Http/Controllers/Web/Geary.php');

    $gateway_id = '69897df7c38067fd628a1158512adae408e33fa6501b1c93e1c093b58efc15ef';
    $gateway_secret = '67VvTot3rSrWXad7cXKprgZryRTZh1H2hgccaneDJbyEKefnc4jWLVTLcqAACY9b';

    $price = 13.9;
    $keychain_id = 0;

    $geary = new Geary($gateway_id, $gateway_secret);
    $order = $geary->create_order($price, $keychain_id);

    if ($order->payment_id) {
        // Redirect to a payment gateway
        redirect("https://gateway.gear.mycelium.com/pay/{$order->payment_id}");
    }
});
