<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\AdPostController;

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('details', [FrontendController::class, 'details'])->name('details');

Route::get('post-step-one', [AdPostController::class, 'postStepOne'])->name('post.step.one');
Route::get('post-step-two', [AdPostController::class, 'postStepTwo'])->name('post.step.two');
Route::get('post-step-three', [AdPostController::class, 'postStepThree'])->name('post.step.three');