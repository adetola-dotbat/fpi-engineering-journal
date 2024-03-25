<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CallForPaperController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EditorialBoardController;
use App\Http\Controllers\QuickLinksController;
use App\Http\Controllers\VolumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('myhome');
});



Route::middleware(['auth'])->group(function () {
    Route::resource('announcement', AnnouncementController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('about', AboutController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('call-for-paper', CallForPaperController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('designation', DesignationController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('editorial-board', EditorialBoardController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('volume', VolumeController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('article', ArticleController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('quick-link', QuickLinksController::class)
        ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
