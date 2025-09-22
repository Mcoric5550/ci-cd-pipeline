<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarsController::class, 'list']);
