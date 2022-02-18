<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;

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


Route::get('/', [VendorController::class, 'index']);
Route::get('/1', [VendorController::class, 'completed']);
Route::post('/store', [VendorController::class, 'store']);
Route::put('/update', [VendorController::class, 'update']);  //ganti /update jadi path ntk halaman update
Route::delete('/{id}', [VendorController::class, 'destroy']);  //sama kayak /update ganti jga
Route::put('/change', [VendorController::class, 'changeStatus']);  //sama kayak /update ganti jga