<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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
    return view ('welcome');
});
Route::get('/home',[HomeController::class,'redirect']);


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Auth::routes();


Route::get('/index',[PostController::class,'index2'])->name('posts');
Route::get('/upload',function(){
    return view ('upload');

});
Route::post('/post',[App\Http\Controllers\PostController::class,  'store']);
Route::delete('/delete/{id}',[App\Http\Controllers\PostController::class,'destroy']);
Route::get('/edit/{id}',[App\Http\Controllers\PostController::class,'edit']);
Route::delete('/deleteimage/{id}',[App\Http\Controllers\PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[App\Http\Controllers\PostController::class,'deletecover']);
Route::put('/update/{id}',[App\Http\Controllers\PostController::class,  'update']);
Route::put('/put/{id}',[App\Http\Controllers\PostController::class,  'verify']);




Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index1'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('/CRUD',[AdminController::class,'CRUD'])->name('admin.CRUD');
    Route::get('/user',[AdminController::class,'user'])->name('admin.user');

    Route::delete('/delete/{id}',[AdminController::class,'destroy']);
    Route::get('/edit/{id}',[AdminController::class,'edit']);
    Route::delete('/deleteimage/{id}',[AdminController::class,'deleteimage']);
    Route::delete('/deletecover/{id}',[AdminController::class,'deletecover']);
    Route::put('/update/{id}',[AdminController::class,  'update']);
    Route::put('/put/{id}',[AdminController::class,  'verify']);
    Route::get('/index',[AdminController::class,'index2'])->name('posts');
    Route::get('share',[AdminController::class,'share']);
    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
    /**
     * data controllers
     */

/**
 * Produducts Controllers
 */
    Route::get('dashboards/admins/Products/index', [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');


    Route::get('{Products}', [App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');

    Route::get('/edit{id}', [App\Http\Controllers\ProductsController::class, 'edit'])->name('admins.edit');
    Route::put('{Products}', [App\Http\Controllers\ProductsController::class, 'update'])->name('Products.update');
    Route::delete('/delete/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('Products.destroy');
    Route::get('dashboards/admins/Products/create',[App\Http\Controllers\ProductsController::class, 'create'])->name('Products.create');

    Route::post('',[App\Htpp\Controllers\ProductsController::class,'store'])->name('Products.store');
    Route::post('/datatable', [App\Http\Controllers\ProductsController::class, 'datatable'])->name('Products.datatable');


/**
 * Payment Form Controllers
 */
        Route::get('dashboards/admins/payments/create', [App\Http\Controllers\PaymentformController::class, 'create'])->name('admin/create');
        Route::get('index', [App\Http\Controllers\PaymentformController::class, 'index'])->name('admin.Paymentform');
        Route::post('', [App\Http\Controllers\PaymentformController::class, 'store'])->name('Paymentform.store');
        Route::post('/datatable', [App\Http\Controllers\PaymentformController::class, 'datatable'])->name('datatable');
        Route::put('update{id}',[App\Http\Controllers\PaymentformController::class,'update'])->name('Payment.update');

    /**
     * Wage Controller
     */
    Route::get('dashboards/admins/Wagerepo', [App\Http\Controllers\WageReportController::class, 'Wagerepo'])->name('admin.Wagerepo');
    Route::put('/update/{id}', [App\Http\Controllers\WageReportController::class, 'update'])->name('Wagerepo.update');
    Route::get('/forms/edit', [App\Http\Controllers\WageReportController::class, 'edit'])->name('wagerepo.edit');
    Route::get('dashboards/admins/view{id}', [App\Http\Controllers\WageReportController::class, 'view'])->name('admins.view');



});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('/data',[UserController::class,'View'])->name('user.data');
Route::get('settings',[UserController::class,'settings'])->name('user.settings');

});

Route::group(['prefix'=>'manager', 'middleware'=>['isManager','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[ProjectController::class,'index'])->name('manager.dashboard');
    Route::get('profile',[ProjectController::class,'profile'])->name('manager.profile');
    Route::get('settings',[ProjectController::class,'settings'])->name('manager.settings');
    Route::get('upload',[ProjectController::class,'upload'])->name('manager.upload');
    Route::post('/post',[projectController::class,'store']);

    /**
     * Wage CAONTROLLER
     */
    Route::get('Wage', [App\Http\Controllers\WagereportController::class, 'index'])->name('manager.Wage');
    Route::post('', [App\Http\Controllers\WageReportController::class, 'store'])->name('Wage.store');
    Route::post('/datatable', [App\Http\Controllers\WageReportController::class, 'datatable'])->name('Wage.datatable');

    });





    Route::post('', [App\Http\Controllers\ProductsController::class, 'store'])->name('Product.store');

    Route::post('/datatable',[App\Http\Controllers\ProductsController::class.'datatable'])->name('Products.datatable');

/**
 *  DATA CONTROLLER
 */


    Route::get('index', [DataController::class,'index'])->name('index.data');
    Route::post('/put',[App\Http\Controllers\DataController::class,  'store'])->name('Data.store');

    Route::get('/show',[App\Http\Controllers\DataController::class,'show'])->name('Data.show');
    Route::get('/edituser/{id}',[AdminController::class,'edituser'])->name('admin.edituser');


