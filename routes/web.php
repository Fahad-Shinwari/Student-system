<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AnnouncementsController;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');

Route::resources([
    'posts' => PostsController::class,
]);

Route::resources([
    'announcements' => AnnouncementsController::class,
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/task', 'App\Http\Controllers\CoinController@store');
Route::post('/signup', 'App\Http\Controllers\RegisterController@validator');

Route::post('/posts/create', 'App\Http\Controllers\PostsController@store');

Route::post('/announcements/create', 'App\Http\Controllers\AnnouncementsController@store');

Route::post('sample', 'App\Http\Controllers\AnnouncementsController@uploadimage');
Route::get('sample', 'App\Http\Controllers\AnnouncementsController@imageUpload');

