<?php

use App\Http\Controllers\LiveSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZipController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/zipcode', [ZipController::class,'getzipcode']);

// Route::get('/live-search', [LiveSearchController::class,'index']);
// Route::post('/live-search-results', [LiveSearchController::class,'search']);