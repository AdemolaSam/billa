<?php

use App\Http\Controllers\V2\SomeController;
use Illuminate\Support\Facades\Route;


Route::get('/some', [SomeController::class, 'some'])->name('some');
