<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/actors", [ActorController::class, "index"]);