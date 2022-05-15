<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
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
// FrontendController 

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

Route::get('/book/filter', [App\Http\Controllers\FrontendController::class, 'bookfilter'])->name('book.filter');


// ProfileController Start
Route::get('/profile/update/{id}', [App\Http\Controllers\ProfileController::class, 'updateprofile'])->name('update.profile');
Route::post('/profile/photo/update', [App\Http\Controllers\ProfileController::class, 'updateprofilephoto'])->name('update.profile.photo');
Route::post('/profile/update/name', [App\Http\Controllers\ProfileController::class, 'updateprofilename'])->name('update.profile.name');
Route::post('/profile/update/password', [App\Http\Controllers\ProfileController::class, 'updateprofilepassword'])->name('update.profile.password');

// ProfileController end

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin Profile update
Route::get('home/update/profile/{id}', [App\Http\Controllers\HomeController::class, 'updateadmin'])->name('update.admin.profile');
Route::post('home/profile/photo/update', [App\Http\Controllers\HomeController::class, 'updateadminphoto'])->name('update.admin.photo');
Route::post('home/profile/update/name', [App\Http\Controllers\HomeController::class, 'updateadminname'])->name('update.admin.name');
Route::post('home/profile/update/password', [App\Http\Controllers\HomeController::class, 'updateadminpassword'])->name('update.admin.password');
Route::get('home/logo/update', [App\Http\Controllers\HomeController::class, 'updatelogo'])->name('update.logo');
Route::post('home/logo/update/post/{id}', [App\Http\Controllers\HomeController::class, 'updatelogopost'])->name('update.logo.post');
Route::get('home/user/delete/{id}', [App\Http\Controllers\HomeController::class, 'userdelete'])->name('user.delete');
// End admin profile update



// category route start
Route::resource('dashbaord/category', CategoryController::class);
// category route end



// BookController Start
Route::resource('home/book', BookController::class);
// BookController Ends


// BannerController Start
Route::resource('home/banner', BannerController::class);
// BannerController Ends
