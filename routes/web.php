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

Route::redirect('/', 'en');

Route::group(['prefix' => '{language?}'], function () {
    Auth::routes();
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/home', 'HomeController@home');
    Route::get('/pricing', 'HomeController@pricing');
    Route::get('/contact_us', 'HomeController@contact_us');
    Route::post('/contact_us', 'HomeController@send_message')->name('contact_us');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
    Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin-login.submit');
    Route::post('get_quota', 'PricingController@get_quota');

    Route::group(['middleware' => ['auth:admin']], function () {
        /*** home page admin route ***/
        Route::get('/admin', 'AdminController@index')->name('admin');
        Route::group(['prefix' => 'admin'], function () {
            /*** users routes ***/
            Route::resource('users', 'UserController');
            Route::post('users_search', ['uses' => 'UserController@search', 'as' => 'users_view']);
            Route::get('users/activation/{user}','UserController@activation');
            /*** System routes ***/
            Route::resource('admins', 'AdminController');
            Route::resource('settings', 'SettingsController');
            Route::resource('contents', 'ContentController');
            Route::resource('pricing', 'PricingController');
            Route::post('add_city', 'PricingController@add_city');
            Route::get('delete_city/{id}', 'PricingController@delete_city');
        });
    });
});
