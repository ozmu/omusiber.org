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

use App\Doc;


Route::get('/', function () {
    return view('index');
});

Route::get('/docs','DocsController@index');
Route::get('/docs/{category}/{tool}','DocsController@displayTool');