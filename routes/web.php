<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;


Route::get('/', function () {
    return view('welcome');
});

Route::any('/{any}', function () {
    return view('welcome');
});

// Route::get('/', [ItemController::class, 'index']);
// Route::get('/add', [ItemController::class, 'create']);
// Route::post('/add', [ItemController::class, 'store']);
// Route::get('/edit/{id}', [ItemController::class, 'edit']);
// Route::post('/edit/{id}', [ItemController::class, 'update']);
// Route::delete('/{id}', [ItemController::class, 'destroy']);
