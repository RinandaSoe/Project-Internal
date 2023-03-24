<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\SalesOrder;
use Illuminate\Routing\RouteGroup;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('custumer')->group(function (){
    Route::post('/create', [CustomerController::class, 'create']);
});
Route::prefix('proyek')->group(function (){
    Route::post('/create', [ProyekController::class, 'create']); 
});
Route::prefix('part')->group(function (){
    Route::post('/create', [PartController::class, 'create'] );    
});
Route::prefix('sales-order')->group(function (){
    Route::post('/create', [SalesOrder::class, 'create'] );    
});
