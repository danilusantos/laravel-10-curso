<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;

Route::name('supports.')
    ->controller(SupportController::class)
    ->prefix('supports')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
    });

Route::get('/contato', [ContactController::class, 'index']);
