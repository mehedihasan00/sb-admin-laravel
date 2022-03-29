<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/all', [UserInfoController::class, 'AllUser'])->name('all.user');
Route::post('/user/add', [UserInfoController::class, 'AddUser'])->name('store.user');
Route::get('/user/edit/{id}', [UserInfoController::class, 'Edit']);
Route::post('/user/update/{id}', [UserInfoController::class, 'Update']);
Route::get('/delete/user/{id}', [UserInfoController::class, 'Delete']);
