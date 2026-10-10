<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);
use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);