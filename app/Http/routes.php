<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/ensah', 'HomeController@showEnsah');
    Route::get('/actualites', 'HomeController@showActualite');
    Route::get('/gallery', 'HomeController@showGallery');
    Route::get('/formation', 'HomeController@showFormation');
    Route::get('/Corps_Enseigant', 'HomeController@showEnseigant');
    Route::get('/inscription', 'HomeController@register');
    Route::get('/connexion', 'HomeController@login');
});

Route::group(['prefix' => 'etudiant','middleware' => 'web'], function () {
  //  Route::get('login', 'Auth\AuthEtudiantController@showLoginForm');
    Route::post('login', 'Auth\AuthEtudiantController@login');
    Route::get('logout', 'Auth\AuthEtudiantController@logout');

// Registration Routes...
   // Route::get('register', 'Auth\AuthEtudiantController@showRegistrationForm');
    Route::post('register', 'Auth\AuthEtudiantController@register');

// Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    Route::get('home', 'EtudiantController@index');
    Route::get('/', 'EtudiantController@index');
});


Route::group(['prefix' => 'professeur','middleware' => 'web'], function () {
    //Route::get('login', 'Auth\AuthProfesseurController@showLoginForm');
    Route::post('login', 'Auth\AuthProfesseurController@login');
    Route::get('logout', 'Auth\AuthProfesseurController@logout');

// Registration Routes...
   // Route::get('register', 'Auth\AuthProfesseurController@showRegistrationForm');
    Route::post('register', 'Auth\AuthProfesseurController@register');

// Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');


    Route::get('home', 'ProfesseurController@index');
    Route::get('/', 'ProfesseurController@index');
});

