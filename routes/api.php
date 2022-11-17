<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;


Route::apiResource('store', StoreController::class);
