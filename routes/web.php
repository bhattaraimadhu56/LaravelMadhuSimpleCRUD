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

//Route::get('/', function () {
  //  return view('welcome');
//});
// for comment ctrl+? 
// Route::get('/admin', function () {
//     return view('layouts');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/display', function () {
    return view('maindisplay');
});
//add_contact
Route::get('add_contact','ContactController@AddContact');
// ->name('allContact') must be matched with route name i.e {{route(allContact)}}
Route::get('allContact','ContactController@AllContact')->name('allContact');


Route::post('insertContact','ContactController@InsertContact');
Route::post('updateContact/{id}','ContactController@UpdateContact');




Route::get('view_contact/{id}','ContactController@ViewContact');
Route::get('edit_contact/{id}','ContactController@EditContact');
Route::get('delete_contact/{id}','ContactController@DeleteContact');

// For Authentication

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


