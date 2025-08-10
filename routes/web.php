<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\DownloadController;

Route::get('/', [CvController::class, 'index']);
Route::get('/cv/download', DownloadController::class)->name('download');
