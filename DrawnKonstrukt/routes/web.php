<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
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




Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('/CRUD',[AdminController::class,'CRUD'])->name('admin.CRUD');


    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('settings',[UserController::class,'settings'])->name('user.settings');

});

Route::group(['prefix'=>'manager', 'middleware'=>['isManager','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[ProjectController::class,'index'])->name('manager.dashboard');
    Route::get('profile',[ProjectController::class,'profile'])->name('manager.profile');
    Route::get('settings',[ProjectController::class,'settings'])->name('manager.settings');

    });


