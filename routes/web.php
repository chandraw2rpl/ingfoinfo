<?php

use Illuminate\Support\Facades\Route;

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
<<<<<<< HEAD
    return view('welcome');
});

=======
    return view('webpage.index');
});

Route::get('/index','WebpageController@index');
Route::get('/article','WebpageController@article');
Route::get('/privacy','WebpageController@privacy');
Route::get('/terms','WebpageController@terms');

Route::get('/test',function(){
    return view('test');
});


>>>>>>> a680613fd791cd3b9747d1e0c0c9a04a7a7541f4
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
