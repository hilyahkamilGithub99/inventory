<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HpControllers;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('hp', HpControllers::class);
