<?php

use Illuminate\Support\Facades\Route;
use DMCode\NewsPackage\Http\Controllers\NewsController;

Route::middleware(['web', 'auth', 'verified'])->group(function () {
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
});