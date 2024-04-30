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
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::get('/{id}', 'show')->name('show');
        Route::post('/', 'store')->name('store');
        Route::put('/{support}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

Route::get('/contato', [ContactController::class, 'index']);
