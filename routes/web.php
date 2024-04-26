<?php

use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContactController::class, 'index']);
