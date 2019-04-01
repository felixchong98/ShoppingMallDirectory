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

Route::get('navigation', 'ViewController@navigation')
  ->name('views.navigation');
Route::get('footer', 'ViewController@footer')
  ->name('views.footer');
Route::get('welcome', 'ViewController@welcome')
  ->name('views.welcome');
Route::get('about', 'ViewController@about')
  ->name('views.about');
Route::get('contact', 'ViewController@contact')
  ->name('views.contact');

// routes shopcontoller
Route::get('/shop/create', 'ShopController@create')
  ->name('shop.create');
Route::post('/shop', 'ShopController@store')
  ->name('shop.store');
Route::get('/shop', 'ShopController@index')
  ->name('shop.index');
Route::get('/shop/{id}', 'ShopController@show')
  ->name('shop.show');
Route::get('/shop/{id}/edit', 'ShopController@edit')
  ->name('shop.edit');
Route::put('/shop/{id}', 'ShopController@update')
  ->name('shop.update');
Route::get('shop/delete/{division}',['as' => 'shop.delete', 'uses' => 'ShopController@destroy']);

//auth
Auth::routes();
Route::get('/home', 'HomeController@index')
  ->name('home');
Route::get('/contacts', 'ContactController@index')
  ->name('contacts.index');
Route::post('/contacts/store', 'ContactController@store')
  ->name('contacts.store');
