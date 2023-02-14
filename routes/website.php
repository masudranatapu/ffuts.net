<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\AdPostController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\LocalizationController;


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('details', [FrontendController::class, 'details'])->name('details');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('terms-conditons', [FrontendController::class, 'termsCondition'])->name('terms.condition');
Route::get('privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy.policy');

//Localization 
Route::post('lange',[LocalizationController::class, 'setLang'])->name('localization');

// Route::get('create-post/post-type', [AdPostController::class, 'postType'])->name('create-post.step_one');
// Route::get('create-post/post-type/category', [AdPostController::class, 'postStepTwo'])->name('create-post.step_two');
// Route::get('create-post/post-type/sub-category', [AdPostController::class, 'postSubCategory'])->name('create-post.step_three');


Route::get('create-post/{type?}/{category?}/{subcategory?}', [AdPostController::class, 'create'])->name('post.create');
Route::post('store-post', [AdPostController::class, 'store'])->name('post.store');

Route::middleware(['auth:user', 'verified'])->group(function () {

    Route::get('user/profile', [UserDashboardController::class, 'profile'])->name('user.profile');

});

Route::post('user-logout', [UserDashboardController::class, 'userLogOut'])->name('user.logout');

