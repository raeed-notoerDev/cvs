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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();
//    Route::get('/{path?}', 'HomeController@index')->where('path', '[\/\w\.-]*');
    // users
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/job', 'ViewsController@job');
    Route::get('/cv', 'ViewsController@cv');
    Route::get('/advertise', 'ViewsController@index_adv');
    Route::get('/advertises', 'ViewsController@index_advertise');
    Route::get('/create-ad', 'ViewsController@create_ad');
    Route::get('/details-ad/{id}', 'ViewsController@show_ad');
    Route::get('/ad/create/{id}', 'ProductController@show');
    Route::post('/ad/create', 'ProductController@store');


//    Route::get('/create-cv', 'ViewsController@cv');


    Route::prefix('member')->group(function () {
        Route::get('/login', 'Auth\MemberLoginController@showLoginForm')->name('member.login');
        Route::post('/login', 'Auth\MemberLoginController@login')->name('member.login.submit');
        Route::get('logout/', 'Auth\MemberLoginController@logout')->name('member.logout');
        Route::get('logout/', 'Auth\MemberLoginController@logout')->name('member.logout');
        Route::get('/', 'Auth\MemberController@index')->name('member.dashboard');
        Route::get('/register', 'Auth\RegisterController@showMemberRegistrationForm')->name('member.register');
        Route::post('/register', 'Auth\RegisterController@createMember')->name('member.create');
        Route::get('/category', 'API\admin\ViewController@category');
        Route::get('/prop', 'API\admin\ViewController@property');
        Route::post('/api/prop', 'API\admin\CategoryController@storeProperties');
        Route::get('/api/prop', 'API\admin\CategoryController@indexProperties');
        Route::get('/api/category','API\admin\CategoryController@index')->name('member.index.category');
        Route::get('/api/category/{id}','API\admin\CategoryController@show')->name('member.show.category');
        Route::post('/api/category','API\admin\CategoryController@store')->name('member.store.category');
    });
});


