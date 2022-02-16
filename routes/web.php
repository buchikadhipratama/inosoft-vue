<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{any}', function () {
    return view('welcome');
});
