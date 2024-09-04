<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseCondition;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     return view('UseConditions');
// });

Route::get('/user', [UseCondition::class, 'condition'])->name("condition");
