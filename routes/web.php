<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


//Authticate
Route::get(
    '/login', 'App\Http\Controllers\Auth\AuthentificController@login'
    )->name('login');

Route::get(
    '/register', 'App\Http\Controllers\Auth\AuthentificController@register'
    )->name('register');

Route::post(
    '/register1', 'App\Http\Controllers\Auth\AuthentificController@store'
    )->name('register1');

Route::post(
    '/login', 'App\Http\Controllers\Auth\AuthentificController@authenticate'
    )->name('auth');

Route::get(
    'logout','App\Http\Controllers\Auth\AuthentificController@logout'
    )->name('logout');

//For client

Route::get('/', function () {
    return view('main');
})->name('main');
Route::group(['middleware'=>['user']],function()
{
Route::get('cabinet','\App\Http\Controllers\UserPermissionController@index');
});


//Admin panel
Route::group(
    ['middleware' => ['admin']],
    function(){
        Route::get(
            'dashboard', function(){ 
                return view('admin.dashboard'); 
        })->name('dashboard');
        Route::resource(
            'sections', \App\Http\Controllers\SectionController::class
        );  
        Route::resource(
            'treners', \App\Http\Controllers\TrenerController::class
        );

        Route::resource(
            'galleries', \App\Http\Controllers\GalleryController::class
    );

        Route::resource(
            'users', \App\Http\Controllers\UserController::class
    );

        Route::resource(
            'pages', \App\Http\Controllers\PageController::class
    );
});



