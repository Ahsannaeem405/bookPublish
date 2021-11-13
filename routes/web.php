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
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.welcome');
    Route::view('/authors', 'admin.author');
    Route::view('/designers', 'admin.designer');
    Route::view('/approve_books', 'admin.approvebooks');
    Route::view('/unapprove_books', 'admin.pendingbooks');
    Route::view('/submission', 'admin.submission');
    Route::view('/login_page', 'admin.login');
    Route::view('/profile', 'admin.profile');
    Route::view('/mybooks', 'admin.mybooks');
    Route::view('/add_books', 'admin.addbooks');


    









});
