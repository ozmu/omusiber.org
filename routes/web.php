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


Route::get('/', 'IndexController@index');
Route::post('/','IndexController@store');

Route::get('/docs','DocsController@index');
Auth::routes();

Route::get('subscribe','MembersController@newMember');
Route::post('subscribe','MembersController@newMembertoDB');

Route::get('/users','UserController@index')->middleware('admin');
Route::get('/users/{id}','UserController@edit')->middleware('admin');
Route::post('/users/{id}','UserController@update');

Route::group(['prefix' => 'members', 'middleware' => 'admin'],function (){
    Route::get('','MembersController@index');
    Route::post('add','MembersController@addMembertoDB');
    Route::get('add','MembersController@addMember');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'],function(){
    Route::get('','AdminController@index');
    Route::get('messages','AdminController@messages');
    Route::delete('messages/delete/{id}','AdminController@deleteMessage');
});

Route::group(['prefix' => 'docs'],function (){
    Route::get('add','DocsController@addTool')->middleware('editor');
    Route::post('add','DocsController@store');
    Route::get('add-category','DocsController@addCategory')->middleware('editor');
    Route::post('add-category','DocsController@addCategorytoDB')->middleware('editor');
    Route::get('tool/{tool}','DocsController@displayTool');
    Route::get('tool/{tool}/edit','DocsController@editTool')->middleware('editor');
    Route::post('tool/{tool}/edit','DocsController@updateTool')->middleware('editor');
});
