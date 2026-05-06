<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('home');

Route::get('/live-class', [PageController::class, 'liveClass'])->name('live-class');

Route::get('/promo', function () {
    return view('promo');
})->name('promo.index');
