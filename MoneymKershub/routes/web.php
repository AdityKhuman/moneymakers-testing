<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingController::class,'index'])->name('index');
Route::get('video/{id}',[DashboardController::class,'seeVideo'])->name('see.video');
Route::get('get-posts',[DashboardController::class,'getPosts'])->name('get.posts');
Auth::routes();

Route::middleware('auth')->group(function () {
        Route::resource('dashboard', DashboardController::class);
        Route::get('destroy/{id}', [DashboardController::class,'destroy'])->name('destroy');
        Route::post('post-create',[DashboardController::class,'postCreate'])->name('post.create');
        Route::get('bids/{id}',[DashboardController::class,'bids'])->name('bids');
        Route::post('bid-create',[DashboardController::class,'bidCreate'])->name('bid.create');
        Route::get('view-post/{id}',[DashboardController::class,'viewPost'])->name('view.post');
        Route::get('get-bid-html',[DashboardController::class,'getBidHtml'])->name('get.bid.html');
});


//on deploy

Route::get('/run-migration', function () {
    Artisan::call('optimize:clear');
    Artisan::call('migrate:fresh --seed');

    return "migration success";
});

