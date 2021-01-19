<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageViewController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\UploadController;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware('auth')->group( function (){
    Route::get('/feed', [HomeController::class, 'index'])->name('home');
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
    Route::get('/profile/{user:username}', [ProfilesController::class, 'show'])->name('profile.show');
    Route::get('/profile/{user:username}/update', [ProfilesController::class, 'profile_show'])->name('profile.update.show');
    Route::patch('/profile/u/{user:username}', [ProfilesController::class, 'update'])->name('profile.update');
    Route::post('/profile/u/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');

    Route::get('/post/{post}', [ImageViewController::class, 'show'])->name('image.show');

    Route::get('/{user:username}/upload', [UploadController::class, 'show'])->name('upload.show');
    Route::post('/{user:username}', [UploadController::class, 'store'])->name('upload.store');

});


