<?php

use Illuminate\Support\Facades\Route;

Route::prefix('.telegram')->name('telegram')->group(function () {
    Route::post('/', fn (Request $request) => $request->all());
});
