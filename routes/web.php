<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [VendorController::class, 'index']);
Route::get('/add', [VendorController::class, 'create']);
Route::get('/add', [VendorController::class, 'store']);
Route::get('/edit/{id}', [VendorController::class, 'edit']);
Route::get('/edit/{id}', [VendorController::class, 'update']);
Route::get('/{id}', [VendorController::class, 'destroy']);
