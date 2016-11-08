<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => 'admin'], function () {

    Route::group(['prefix' => 'admin'], function () {

        Route::get('/', 'AdminController@index');
// кейсы
        Route::get('case/create', 'AdminController@create_case');
        Route::post('case/create', 'AdminController@create_case');

        Route::get('/cases', 'AdminController@cases');
        Route::post('/cases', 'AdminController@cases');

        Route::get('/edit/case/{id}', 'AdminController@edit_case');
        Route::post('/edit/case/{id}', 'AdminController@edit_case');

        Route::get('/delete/case/{id}', 'AdminController@delete_case');

// призы
        Route::get('/case/{id}', 'AdminController@gifts');

        Route::get('/case/{id}/create/gift', 'AdminController@create_gift');
        Route::post('/case/{id}/create/gift', 'AdminController@create_gift');

        Route::get('/edit/gift/{id}', 'AdminController@edit_gift');
        Route::post('/edit/gift/{id}', 'AdminController@edit_gift');

        Route::get('/delete/gift/{id}', 'AdminController@delete_gift');

        Route::get('/users', 'AdminController@users');
//шансы
        Route::get('/case/{id}/chances', 'AdminController@chances');

        Route::get('/case/{id}/create/chance', 'AdminController@chance_create');
        Route::post('/case/{id}/create/chance', 'AdminController@chance_create');

        Route::get('/case/edit/chance/{id}', 'AdminController@edit_chance');
        Route::post('/case/edit/chance/{id}', 'AdminController@edit_chance');
//винеры
        Route::get('/winners', 'AdminController@winners');

    });
});

//кейс
Route::get('/', 'CaseController@getCases');

Route::get('case/{id}', 'CaseController@getById');
Route::post('case/{id}', 'CaseController@getById');

Route::post('try/chance', 'CaseController@try_chance');


//юзер
Route::get('profile/{id}', 'UserController@getUser');

Route::post('login/auth','UserController@login_vk');

//страницы

Route::get('/content', function () {

    return view('pages.content');
});

Route::get('/faq', function () {

    return view('pages.faq');
});

Route::get('/guarantees', function () {

    return view('pages.guarantees');
});

Route::get('/reviews', function () {

    return view('pages.reviews');
});

Route::get('/social_login/{provider}', 'SocialController@login');
Route::get('/social_login/callback/{provider}', 'SocialController@callback');

Auth::routes();



Route::get('/home', 'HomeController@index');
