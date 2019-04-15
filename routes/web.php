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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' =>'dashboard','namespace' => 'dashboard','middleware'=>['auth','verified']],function (){

    Route::get('/',function (){
        return view('master');
    })->name('dashboard');
    Route::post('/delete','NotebookController@delete')->name('notebook.delete');
    Route::post('/search','NotebookController@searchNotebook')->name('notebook.search');
    Route::resource('notebook','NotebookController');
});