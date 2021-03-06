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


Route::get('/',[
    'uses' => 'NewShopController@index',
    'as' => '/'
]);

Route::get('/category-product',[
    'uses' => 'NewShopController@categoryProduct',
    'as' => 'category-product'
]);

Route::get('/mail',[
    'uses' => 'NewShopController@mailUs',
    'as' => 'mail'
]);


