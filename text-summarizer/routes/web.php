<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SummarizerController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/summarizer', [SummarizerController::class, 'index']);
Route::get('/summarizer', [SummarizerController::class, 'summarizer']);
