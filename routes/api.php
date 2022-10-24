<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
}); */

    /* Route::controller(EmployeeController::class)->group(function (){
    Route::get('/employees', 'index');
    Route::post('/employee', 'store');
    Route::get('/employee/{id}', 'show');
    Route::put('/employee/{id}', 'update');
    Route::delete('/employee/{id}', 'destroy');
    }); */

    Route::get('/employees',[EmployeeController::class,'index']);
    Route::post('/employee',[EmployeeController::class,'store']);
    Route::get('/employee/{id}',[EmployeeController::class,'show']);
    Route::put('/employee/{id}',[EmployeeController::class,'update']);
    Route::delete('/employee/{id}',[EmployeeController::class,'destroy']);