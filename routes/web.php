<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/', [CvController::class, 'index']);