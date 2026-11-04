<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


// Route::prefix('form')
//     ->name('form.')
//     ->controller(FormController::class)
//     ->group(function () {

//         Route::get('/', 'create')->name('create');
//         Route::post('/store', 'store')->name('store');

//     });


Route::prefix('post')
        ->name('post.')
        ->controller(UploadController::class)
        ->group(function(){

        Route::get('/', 'create')->name('create');
        Route::post('/store', 'store')->name('upload');
});

