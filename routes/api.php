<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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



Route::get('/',[TodoController::class,'index']);
Route::get('{id}',[TodoController::class,'show']);
Route::post('create-todo',[TodoController::class,'create']);
Route::get('edit',[TodoController::class,'edit']);
Route::post('update',[TodoController::class,'update']);
Route::post('delete',[TodoController::class,'destroy']);

// secondss


//welcome to zanzibar