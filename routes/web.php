<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebContentController;
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


// Webcontent Route
Route::post('/webcontent/update/{id}', [WebContentController::class, 'webcontentUpdate'])->name('company.profile.update');

// Category Route
Route::post('category/insert', [CategoryController::class, 'categoryInsert'])->name('store.category');
Route::get('category/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('edit.category');
Route::get('category/delete/{id}', [CategoryController::class, 'categoryDelete']);

// Slider part
Route::post('slider/insert', [SliderController::class, 'sliderInsert'])->name('store.slider');
Route::get('slider/edit/{id}', [SliderController::class, 'sliderEdit'])->name('edit.slider');
Route::post('slider/update/{id}', [SliderController::class, 'sliderUpdate']);
//Route::post('slider/delete', [SliderController::class, 'sliderInsert'])->name('store.slider');

// Product Route
Route::post('product/insert', [ProductController::class, 'productInsert'])->name('store.product');
Route::post('product/delete/{id}', [ProductController::class, 'productDelete'])->name('delete.product');

// Middleware
Route::group(['middleware'=>['AuthCheck']], function() {
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    //Route::get('auth/register', [MainController::class, 'register'])->name('auth.register');
    
    // Dashboard Route
    Route::get('/admin/dashboard', [HomeController::class, 'dashboard']);
    Route::get('/admin/webcontent', [WebContentController::class, 'webcontent']);
    Route::get('/admin/slider', [SliderController::class, 'slider']);
    Route::get('/admin/category', [CategoryController::class, 'category']);
    Route::get('/admin/product', [ProductController::class, 'product']);
    Route::get('/admin/chart', [HomeController::class, 'chart']);
    Route::get('/admin/registration', [HomeController::class, 'userRegistration']);
    Route::get('/admin/form', [HomeController::class, 'form']);
    Route::get('/admin/tables', [HomeController::class, 'table']);
    // Route::get('admin/dashboard1', [MainController::class, 'dashboard1']);
    
    // User all route
    Route::get('/user/all', [UserInfoController::class, 'AllUser'])->name('all.user');
});