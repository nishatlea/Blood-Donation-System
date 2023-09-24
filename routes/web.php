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
Route::get('homepage', function () {
    return view('homepage');
});
Route::get('error', function () {
    return view('error');
});
Route::get('page1', 'PageController@show');
Route::get('update', 'PageController@updateinfo');
Route::get('register', 'PageController@show2');
Route::get('page3', 'PageController@insert');
Route::get('showusers', 'PageController@select');
Route::get('updatename', 'PageController@updatename');
Route::get('showsum', 'PageController@showsum');
Route::get('joinvalue', 'PageController@joindata');
Route::get('querysub', 'PageController@subquery');
Route::get('activeusers', 'PageController@unionvalue');
Route::get('donate', 'PageController@show4');
Route::get('don', 'PageController@donate1');
Route::get('receive', 'PageController@show5');
Route::get('rec', 'PageController@receive1');
Route::get('ser', 'PageController@search1');

Route::get('mdc', 'PageController@modifycolumn');
Route::get('dv', 'PageController@deletevalue');
Route::get('dm', 'PageController@donormax');
Route::get('lojoindata', 'PageController@lojoin');
Route::get('xxx', 'PageController@procedurecall');
Route::get('test', function () {
    return view('test');
});
