<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Carbon;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\API\PhotoController;
use App\Http\Controllers\ProfileController;

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
    return $request->user ();
});



Route::match(['get','post'], '/','App\Http\Controllers\TodoController@create');
// Route::get("/", [TodoController::class, 'index']);
// Route::post("/", [TodoController::class, 'create']);


Route::post('/lame', function (Request $request){
    return response()->json($request->input(('token'))) ;
})->middleware('valid');

Route::post('/rest', function(Request $request){
    $token = $request->input("token");
    return response()->json("Welcome home to rest `{$token}`");
})->middleware('valid');



// Middleware
Route::middleware(['valid'])->group(function(){

    Route::get('/', function (Request $request){
            return response()->json("Get All First");
    });

    Route::get('users/profile', function () {

        try{

        } catch (Throwable $e){
            report($e);
            return false;
        }

        return response()->json("Weldone");
    })->withoutMiddleware('valid');
});


// Route::apiResource('photos', PhotoController::class);
// Route::resource('profiles', ProfileController::class)->except([
//     'create','store','update','destroy','delete'
// ]);



// Route Prefixes
Route::prefix('admin')->group(function (){
    Route::get('/users', function (Request $request){
        return response()->json("users");
    });
});



//main
Route::get('/{id}',[TodoController::class,'show']);
Route::get('edit',[TodoController::class,'edit']);
Route::put('update',[TodoController::class,'update']);
Route::post('delete',[TodoController::class,'destroy']);

Route::get('/rake',[TodoController::class,'index']);
Route::get('guage',[TodoController::class,'guage']);
// secondss
Route::match(['get', 'post'], '/', function () {
    Route::post('/',[TodoController::class,'create']);
    //
});


//welcome to zanzibar


// apisenv
