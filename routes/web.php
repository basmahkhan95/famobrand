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


Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {

    //All the admin routes will be defined here...
    Route::namespace('Auth')->group(function () {

        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');

    });

    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', 'HomeController@index')->name('home');

        Route::prefix('/profile')->name('profile.')->group(function () {
            Route::get('/', 'ProfileController@index')->name('index');
            Route::get('/edit', 'ProfileController@edit')->name('edit');
            Route::post('/update', 'ProfileController@update')->name('update');
        });

        Route::post('/change/pwd', 'ChangePwdController@update')->name('change-pwd');

        Route::prefix('/package')->name('package.')->group(function () {

            Route::get('/', 'PackageController@index')->name('index');
            Route::get('/create', 'PackageController@create')->name('create');
            Route::get('/edit/{id}', 'PackageController@edit')->name('edit');
            Route::get('/show/{id}', 'PackageController@show')->name('show');
            Route::post('/store', 'PackageController@store')->name('store');

            Route::post('/update/{id}', 'PackageController@update')->name('update');
            Route::post('/delete/{id}', 'PackageController@destroy')->name('delete');
        });

        Route::prefix('/feedback')->name('feedback.')->group(function () {
            Route::get('/', 'FeedbackController@index')->name('index');
            Route::get('/show/{id}', 'FeedbackController@show')->name('show');
            Route::post('/delete/{id}', 'FeedbackController@destroy')->name('delete');
        });

        Route::prefix('/notification')->name('notification.')->group(function () {
            Route::get('/', 'NotificationController@index')->name('index');
            Route::post('/update', 'NotificationController@update')->name('update');
        });

        Route::prefix('/user')->name('user.')->group(function () {

            Route::get('/', 'UserController@index')->name('index');
            Route::get('/show/{id}', 'UserController@show')->name('show');
            Route::get('/edit/{id}', 'UserController@edit')->name('edit');
            Route::get('/create', 'UserController@create')->name('create');

            Route::post('/store', 'UserController@store')->name('store');
            Route::post('/update/{id}', 'UserController@update')->name('update');
            Route::post('/delete/{id}', 'UserController@destroy')->name('delete');

        });

        Route::prefix('/testimonial')->name('testimonial.')->group(function () {
            Route::get('/', 'TestimonialController@index')->name('index');
            Route::post('/store', 'TestimonialController@store')->name('store');
            Route::post('/update', 'TestimonialController@update')->name('update');
            Route::post('/delete/{id}', 'TestimonialController@destroy')->name('delete');
        });

        Route::prefix('/subscription')->name('subscription.')->group(function () {
            Route::get('/', 'SubscriptionController@index')->name('index');
        });

        Route::prefix('/domain-search')->name('domain-search.')->group(function () {
            Route::get('/', 'DomainSearchController@index')->name('index');
        });

        Route::prefix('/chart')->name('chart.')->group(function () {
            Route::get('/', 'ChartController@index')->name('index');
        });

        Route::prefix('/chat')->name('chat')->group(function () {
            Route::get('/', 'ChatController@index');
        });

    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('about-us', function () {
    return view('about-us');
});
Route::get('/logo-design', function () {
    return view('logo-design');
});

Route::get('web-design-and-development', function () {
    return view('web-design-and-development');
});

Route::get('app-design-and-development', function () {
    return view('app-design-and-development');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('printing-and-accessories', function () {
    return view('printing-and-accessories');
});

Route::prefix('message')->name('message')->group(function () {
    Route::get('/', 'MessageController@index');
    Route::post('/', 'MessageController@store');
});

Route::prefix('domain')->name('domain')->group(function () {
    Route::get('/', 'DomainSearchController@index');
});

Route::middleware('auth')->group(function () {

    Route::prefix('account')->name('account')->group(function () {
        Route::get('/', 'AccountController@index');
        Route::get('/edit', 'AccountController@edit')->name('.edit');
        Route::post('/update', 'AccountController@update')->name('.update');
    });

    Route::prefix('payment')->name('payment')->group(function () {
        Route::get('/log', 'PaymentController@index');
        Route::post('/store', 'PaymentController@store')->name('.store');
    });

    Route::post('/change/pwd', 'ChangePwdController@update')->name('change-pwd');

    Route::prefix('chat')->name('chat')->group(function () {
        Route::get('/', 'ChatController@index');
    });


});
