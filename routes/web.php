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

// Route::get('/admin', function () {
//     return view('welcome');
// });

Route::group([
    'prefix' => 'admin',
    'middleware' => 'check_auth',
], function () {
    Route::get('/', 'admin\HomeController')->name('admin');
    // user
    Route::resource('users', 'admin\UserController');
    Route::resource('posts', 'admin\PostController');
    Route::resource('categories', 'admin\PostController');
    Route::resource('comments', 'admin\CommentController');
});

Route::get('login', 'AuthController@getLoginForm');
Route::post('login', 'AuthController@login')->name('auth.login');
Route::get('logout', 'AuthController@logout')->name('auth.logout');
