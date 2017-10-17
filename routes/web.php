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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('docs')->group(function (){
   Route::get('add','DocsController@addTool')->middleware('editor');
   Route::get('tool/{tool}','DocsController@displayTool');
});