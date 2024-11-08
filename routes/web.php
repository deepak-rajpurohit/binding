<?php

use App\Http\Controllers\BindController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index/{key:name}',[BindController::class, 'index']);
