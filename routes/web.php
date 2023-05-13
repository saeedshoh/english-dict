<?php

use App\Http\Controllers\DictController;
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

Route::get('/', [DictController::class, 'index'])->name('list');
Route::get('new-dicts', [DictController::class, 'favorites'])->name('dicts.new');
Route::get('create', [DictController::class, 'create'])->name('create');
Route::post('create', [DictController::class, 'store'])->name('store');
Route::delete('destroy/{dict}', [DictController::class, 'destroy'])->name('destroy');
Route::get('random', [DictController::class, 'random'])->name('random');
Route::get('favorite-show', [DictController::class, 'favorite'])->name('favorite.show');
Route::get('latest', [DictController::class, 'latest'])->name('latest');
