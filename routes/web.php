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

Route::get('/', 'WebController@index')->name('web.home');
Route::get('/news', 'WebController@news')->name('web.news');
Route::get('/about-us', 'WebController@aboutUs')->name('web.aboutus');
Route::get('/apply', 'WebController@apply')->name('web.apply');
Route::get('/contact', 'WebController@contact')->name('web.contact');
Route::get('/new/{slug}', 'WebController@detailsNews')->name('web.details.news');
Route::get('/spanish-levels', 'WebController@spanishLevels')->name('web.spanish.levels');
Route::get('/dash', 'WebController@dash')->name('web.dash');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('auth.login');
Route::post('/logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function (){

    Route::get('/', function() { return redirect()->route('dashboard'); });
    Route::get('/dashboard', 'AppController@dashboard')->name('dashboard');

});
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/usuarios', function () {
    return view('admin.usuarios');
});
Route::get('/admin/account', function () {
    return view('admin.account');
});
Route::get('/admin/blog-detalle', function () {
    return view('admin.blog-detalle');
});
Route::get('/admin/cursos', function () {
    return view('admin.cursos');
});
Route::get('/admin/setting', function () {
    return view('admin.setting');
});
Route::get('/admin/logs-mail', function () {
    return view('admin.logs-mail');
});
Route::get('/admin/mail-details', function () {
    return view('admin.email-details');
});
Route::get('/admin/chart', function () {
    return view('admin.estadistica');
});
Route::get('/admin', function () {
    return view('admin.index');
});