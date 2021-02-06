<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactController;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/contact/store', [HomeController::class, 'contact_store'])->name('contact.store');

Route::post('/user-login',[HomeController::class, 'login'])->name('user.login');

// Route for test
//-------------------------------------------------------------------------------------------------------------------------
Route::match(['get','post'],'/test',[HomeController::class, 'test']);
Route::get('dynamic-field', [HomeController::class, 'dynamicfield']);

Route::post('dynamic-field/insert', [HomeController::class, 'dynamicfieldinsert'])->name('dynamic-field.insert');

// -------------bulk delete data
Route::get('bulk/delete', 'ContactController@bulkDelete')->name('bulk.delete');
Route::post('bulk/update', 'ContactController@bulkUpdate')->name('bulk.update');
//-------------------------------------------------------------------------------------------------------------------------
//Route for add user registration
Route::post('/user-register',[HomeController::class, 'register'])->name('user.register');
//Route for add user registration
Route::get('/user-logout',[HomeController::class, 'logout'])->name('user.logout');


Route::match(['get','post'],'/admin',[AdminController::class, 'login']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['AdminLogin']], function () {
    Route::match(['get','post'],'/admin/dashboard',[AdminController::class, 'dashboard']);

    //Contact Route
    Route::match(['get','post'],'/admin/contacts',[ContactController::class, 'contact']);
    //Banner Route
    Route::match(['get', 'post'], '/admin/banners', [BannerController::class, 'banners']);
    Route::match(['get', 'post'], '/admin/add-banner', [BannerController::class, 'addBanner']);
    Route::match(['get', 'post'], '/admin/edit-banner/{id}', [BannerController::class, 'editBanner']);
    Route::match(['get', 'post'], '/admin/delete-banner/{id}', [BannerController::class, 'deleteBanner']);
    Route::post('/admin/update-banners-status', [BannerController::class, 'updateStatus']);
});

//Route for add Admin Logoout
Route::get('/admin-logout',[AdminController::class, 'logout']);


