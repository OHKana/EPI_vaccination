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




//curd

// Route::get('/UserList',[HealthWorkerListController::class,'list']);
// Route::post('/User/create',[HealthWorkerListController::class,'create']);
// Route::put('/User/update/{id}', [HealthWorkerListController::class, 'update']);
// Route::delete('/User/delete/{id}', [HealthWorkerListController::class, 'delete']);






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();




});



