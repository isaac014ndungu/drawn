<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use illuminate\Support\Facades\Auth;

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

Route::view("contract", 'contract');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\PostController::class,  'create']);
Route::get('/upload',function(){
    return view ('upload');

});
Route::post('/post',[App\Http\Controllers\PostController::class,  'store']);
Route::delete('/delete/{id}',[App\Http\Controllers\PostController::class,'destroy']);
Route::get('/edit/{id}',[App\Http\Controllers\PostController::class,'edit']);
Route::delete('/deleteimage/{id}',[App\Http\Controllers\PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[App\Http\Controllers\PostController::class,'deletecover']);
Route::put('/update/{id}',[App\Http\Controllers\PostController::class,  'put']);



Route::get('/admin/login',[adminController::class,'login']);
Route::get('/users/user',[UserController::class,'user']);
Route::get('/project/project',[ProjectController::class,'project']);
