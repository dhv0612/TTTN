<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;

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


//front-end
Route::get('/',[HomeController::class, 'index']);
Route::get('/login-user',[HomeController::class, 'login_user']);
Route::get('/signup-user',[HomeController::class, 'signup_user']);


//admin
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);

//News
Route::get('/add-news',[NewsController::class, 'add_news']);
Route::get('/all-news',[NewsController::class, 'all_news']);
Route::post('/save-news',[NewsController::class, 'save_news']);
Route::get('/edit-news/{newid}',[NewsController::class, 'edit_news']);
Route::post('/update-news/{newsid}',[NewsController::class, 'update_news']);
Route::get('/delete-news/{newid}',[NewsController::class, 'delete_news']);

//User
Route::post('/save-user',[UserController::class, 'save_user']);
Route::post('/check-login-user',[UserController::class, 'check_login_user']);
Route::get('/logout-user',[UserController::class, 'logout_user']);