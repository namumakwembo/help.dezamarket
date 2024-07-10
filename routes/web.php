<?php

use App\Http\Controllers\PagesController;
use App\Livewire\Welcome;
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

Route::get('/', Welcome::class);


Route::get('/privacy', [PagesController::class,'privacy'])->name('privacy');
Route::get('/terms', [PagesController::class,'terms'])->name('terms');
Route::get('/about', [PagesController::class,'about'])->name('about');

Route::get('/download', [PagesController::class,'download'])->name('download');




