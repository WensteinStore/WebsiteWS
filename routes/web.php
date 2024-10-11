<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenipuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listpenipu', function () {
    return view('listpenipu');
});

Route::get('/search', [PenipuController::class, 'search']);