<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// melakukan aktivitas login pake api
Route::get('/', function () {

    $response = ['message' => 'API sudah berjalan'];
    return response()->json($response);
});

Route::get('user', [App\Http\Controllers\API\ApiController::class, 'getUsers']);
Route::post('user', [App\Http\Controllers\API\ApiController::class, 'storeUsers']);
Route::put('user/{id}', [App\Http\Controllers\API\ApiController::class, 'updateUsers']);
Route::delete('user/{id}', [App\Http\Controllers\API\ApiController::class, 'deleteUsers']);
Route::get('user/{id}', [App\Http\Controllers\API\ApiController::class, 'editUsers']);
