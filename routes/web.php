<?php

use App\Http\Controllers\MovieController;
use App\Models\Movies;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'chkAdmin'])-> group(function(){
    Route::get('/admin/home', function(){
        return view('admin.home');
    });

    Route::get('/viewMovies', 'App\Http\Controllers\MovieController@show');
    Route::post('/addMovies', 'App\Http\Controllers\MovieController@addMovie');
    Route::get('/addMovies', function(){
        return view('admin.addMovies');
    });

});

Route::get('/aboutUs', function(){
    return view('admin.aboutUs');
});
