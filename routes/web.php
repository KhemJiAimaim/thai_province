<?php

use App\Http\Controllers\LiveSearchController;
use App\Http\Controllers\ZipController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ZipController::class, 'getzipcodeAll']);

Route::get('/search', [LiveSearchController::class, 'index']);
Route::get('/live-search-results', [LiveSearchController::class, 'search'])->name('search');
