<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/tooltip', function () {
    return view('tooltip');
});
Route::get('/map', function () {
    return view('map');
});
