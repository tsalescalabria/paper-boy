<?php

use App\Http\Controllers\Telegram\StoreImageController;
use Illuminate\Support\Facades\Route;

Route::name('photo.')->prefix('photo')->group(function () {
    Route::post('/', StoreImageController::class)->name("index");
});
