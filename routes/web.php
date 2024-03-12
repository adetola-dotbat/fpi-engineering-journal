<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CallForPaperController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EditorialBoardController;
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
    return view('welcome');
});

Route::resource('about', AboutController::class)
    ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
Route::resource('announcement', AnnouncementController::class)
    ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
Route::resource('call-for-paper', CallForPaperController::class)
    ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
Route::resource('designation', DesignationController::class)
    ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
Route::resource('editorial-board', EditorialBoardController::class)
    ->only(['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']);
