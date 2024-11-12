<?php

use App\Http\Controllers\Api\ProjectController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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

//Route::apiResource('projects', App\Http\Controllers\Api\ProjectController::class);

Route::name('api.')->group(function () { 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('project', ProjectController::class);

Route::get('/projects',[ProjectController::class, 'index'])->name('projects.index');

});

