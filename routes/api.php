<?php

use App\Http\Controllers\Api\GamesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('games', [GamesController::class, 'index']);
Route::get('gamesSales', [GamesController::class, 'gamesSales']);
Route::get('gamesFlagged', [GamesController::class, 'gamesFlagged']);