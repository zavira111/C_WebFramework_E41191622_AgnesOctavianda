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

//Route: :get('user', 'ManagementUserController@index');
Route: recource('user', 'ManagementUserController');

Route: :get('/'), function () {
    return view ('welcome');
});
 