<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/{any}', function () {
    return view('welcome');
});
