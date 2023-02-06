<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('details', [FrontendController::class, 'details'])->name('details');
