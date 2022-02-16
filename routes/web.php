<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ItemController;
=======
use App\Http\Controllers\VendorController;
>>>>>>> mongodb


// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD
// Route::any('/{any}', function () {
//     return view('welcome');
// });

Route::get('/', [ItemController::class, 'index']);
Route::get('/add', [ItemController::class, 'create']);
Route::post('/add', [ItemController::class, 'store']);
Route::get('/edit/{id}', [ItemController::class, 'edit']);
Route::post('/edit/{id}', [ItemController::class, 'update']);
Route::delete('/{id}', [ItemController::class, 'destroy']);
=======
Route::get('/{any}', function () {
    return view('welcome');
});
>>>>>>> mongodb
