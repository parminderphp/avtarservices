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

Route::get('/', 'HomeController@index');
Route::get('about-us', 'AboutController@index');
Route::get('php-development', 'ServiceController@php');
Route::get('ecommerce-development', 'ServiceController@ecommerce');
Route::get('web-design', 'ServiceController@webdesign');
Route::get('graphic-design', 'ServiceController@graphic');
Route::get('portfolio', 'PortfolioController@php');
Route::get('portfolio-graphic', 'PortfolioController@graphic');
Route::get('contact', 'ContactController@index');