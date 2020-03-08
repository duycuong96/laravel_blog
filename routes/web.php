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

// client
Route::get('/', 'client\HomeController')->name('homepage');
Route::resource('account', 'client\AccountController')->middleware(['check_auth']);

// administration
Route::group([
    'prefix' => 'admin',
    'middleware' => 'check_auth',
], function () {
    Route::get('/', 'admin\HomeController')->name('admin');
    // user
    Route::resource('users', 'admin\UserController');
    Route::resource('posts', 'admin\PostController');
    Route::resource('categories', 'admin\CategoryController');
    Route::resource('comments', 'admin\CommentController');
});

// đăng ký - register
Route::get('register', 'AuthController@getRegisterForm')->name('form-register');
Route::post('register', 'AuthController@register')->name('auth.register');
// đăng nhập - singin
Route::get('login', 'AuthController@getLoginForm')->name('form-login');
Route::post('login', 'AuthController@login')->name('auth.login');
// đăng xuất
Route::get('logout', 'AuthController@logout')->name('auth.logout');


