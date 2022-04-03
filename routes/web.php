<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\DB;
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
// Route::get('/', function () {
//     return view('welcome');
// });


// Frontend
Route::get('/', [TempController::class, 'mainTemp']);



// Dashboard Templating Route

Route::post('/user/add', [UserInfoController::class, 'AddUser'])->name('store.user');
Route::get('/user/edit/{id}', [UserInfoController::class, 'Edit']);
Route::post('/user/update/{id}', [UserInfoController::class, 'Update']);
Route::get('/delete/user/{id}', [UserInfoController::class, 'Delete']);

// route for authentication
Route::post('auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('auth/logout', [MainController::class, 'logout'])->name('auth.logout');


// route for uploads
Route::post('/home/update', [StoreController::class, 'homeView'])->name('store.home');
// Route::get('/home/all', [StoreController::class, 'AllContent'])->name('store.all');

// Middleware
Route::group(['middleware'=>['AuthCheck']], function() {
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    // Route::get('auth/register', [MainController::class, 'register'])->name('auth.register');
    
    // Dashboard Route
    Route::get('/admin/dashboard', [HomeController::class, 'dashboard']);
    Route::get('/admin/editContent', [HomeController::class, 'edit_content']);
    Route::get('/admin/chart', [HomeController::class, 'chart']);
    Route::get('/admin/registration', [HomeController::class, 'userRegistration']);
    Route::get('/admin/form', [HomeController::class, 'form']);
    Route::get('/admin/tables', [HomeController::class, 'table']);
    // Route::get('admin/dashboard1', [MainController::class, 'dashboard1']);
    
    // User all route
    Route::get('/user/all', [UserInfoController::class, 'AllUser'])->name('all.user');
});