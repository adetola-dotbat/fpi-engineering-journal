<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CallForPaperController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EditorialBoardController;
use App\Http\Controllers\GuidelineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaperTemplateController;
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

Route::get('/test', function () {
    return view('myhome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('announcement', AnnouncementController::class)->only(['index']);
Route::resource('about', AboutController::class)->only(['index']);
Route::resource('call-for-paper', CallForPaperController::class)->only(['index']);
Route::resource('designation', DesignationController::class)->only(['index']);
Route::resource('editorial-board', EditorialBoardController::class)->only(['index']);
Route::resource('volume', VolumeController::class)->only(['index']);
Route::resource('article', ArticleController::class)->only(['index']);
Route::resource('quick-link', QuickLinksController::class)->only(['index']);
Route::resource('paper', PaperTemplateController::class)->only(['index']);
Route::resource('guideline', GuidelineController::class)->only(['index']);
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('announcement', AnnouncementController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('about', AboutController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('call-for-paper', CallForPaperController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('designation', DesignationController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('editorial-board', EditorialBoardController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('volume', VolumeController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('article', ArticleController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
    Route::resource('quick-link', QuickLinksController::class)
        ->only(['show', 'create', 'edit', 'store', 'update', 'destroy']);
});

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
