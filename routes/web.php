<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Postcontroller; 
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

Route::get('/',[Postcontroller::class,'toutou']   
);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/client', [Postcontroller::class,'client']  
)->name('client')->middleware('auth');

Route::get('/employe', [Postcontroller::class,'employe']  
)->name('employe')->middleware('auth');

Route::get('/retrait', [Postcontroller::class,'retrait']  
)->name('retrait')->middleware('auth');
