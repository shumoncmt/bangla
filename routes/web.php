<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/DemoAction/{name}/{age}', [DemoController::class,'DemoAction'])->name('DemoAction');

Route::get('DemoAction',[DemoController::class, 'DemoAction']);