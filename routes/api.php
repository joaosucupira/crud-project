<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\UserController;
Route::post('/create', [UserController::class,'create']);
Route::get('/', [UserController::class, 'findAll']);
Route::get('/{id}', [UserController::class, 'findById']);
Route::put('/', [UserController::class, 'update']);
Route::put('/{id}', [UserController::class, 'delete']);