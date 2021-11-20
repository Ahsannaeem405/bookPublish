<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookPublishController;
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
Route::get('migrate', function () {
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
});
Route::get('/', function () {
    return view('admin.login');
});

// Route::get('/',[BookPublishController::class,'login']);
Route::prefix('admin')->group(function () {

    Route::get('/',[BookPublishController::class,'index']);
    Route::get('books',[BookPublishController::class,'books']);
    Route::get('approval_books',[BookPublishController::class,'approval_books']);
    Route::get('book_status_approve/{id}',[BookPublishController::class,'book_status_approve']);
Route::get('book_status_disapprove/{id}',[BookPublishController::class,'book_status_disapprove']);
   // Route::view('/authors', 'admin.author');
   //Route::view('/profile', 'admin.profile');
   //////////////////////profile update/////////////////
   Route::get('profile',[BookPublishController::class,'profile']);
   Route::post('update_profile',[BookPublishController::class,'update_profile']);
   //////////////////////authors/////////////////////////
   Route::get('pending_books',[BookPublishController::class,'pending_books']);
   Route::get('inactive_books',[BookPublishController::class,'inactive_books']);
   Route::get('approve_books',[BookPublishController::class,'approve_books']);
    Route::post('add_authors',[BookPublishController::class,'add_authors']);
    Route::post('update_authors/{id}',[BookPublishController::class,'update_authors']);
    Route::get('delete_authors/{id}',[BookPublishController::class,'delete_authors']);
    Route::get('authors',[BookPublishController::class,'authors']);
    Route::get('mybooks',[BookPublishController::class,'authors_mybooks']);
    Route::get('delete_mybooks/{id}',[BookPublishController::class,'delete_mybooks']);
    ////////////////////////Designers//////////////////////
    Route::post('add_Designers',[BookPublishController::class,'add_Designers']);
    Route::post('update_Designers/{id}',[BookPublishController::class,'update_Designers']);
    Route::get('delete_Designers/{id}',[BookPublishController::class,'delete_Designers']);
    Route::get('designers',[BookPublishController::class,'Designers']);
    Route::get('designer_book',[BookPublishController::class,'designer_book']);
    Route::get('designer_waiting_book',[BookPublishController::class,'designer_waiting_book']);
    Route::post('add_design',[BookPublishController::class,'add_design']);
    

    ///////////////////////////////////////////////////
   // Route::view('/designers', 'admin.designer');
   ////////////////////////////////////////////////////
   Route::post('add_book',[BookPublishController::class,'add_book']);
   

    //Route::view('/approve_books', 'admin.approvebooks');
    // Route::view('/unapprove_books', 'admin.pendingbooks');
    Route::view('/submission', 'admin.submission');
    Route::view('/login_page', 'admin.login');
  
  
    Route::view('/add_books', 'admin.addbooks');


    









});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
