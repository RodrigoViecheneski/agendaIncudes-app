<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('include');
});

Route::get('/components', [SiteController::class,'components']);