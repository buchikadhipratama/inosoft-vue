<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

// Route::any('/{any}', function () {
//     return view('welcome');
// });

Route::get('/', [ItemController::class, 'index']);
Route::get('/add', [ItemController::class, 'create']);
Route::post('/add', [ItemController::class, 'store']);
Route::get('/edit/{id}', [ItemController::class, 'edit']);
Route::post('/edit/{id}', [ItemController::class, 'update']);
Route::delete('/{id}', [ItemController::class, 'destroy']);
