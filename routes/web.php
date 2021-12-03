<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;


Route::get('/', [ContactsController::class, 'index'])->name('contact');
Route::post('/confirm', [ContactsController::class, 'confirm'])->name('confirm');
Route::post('/process', [ContactsController::class, 'process'])->name('process');
Route::get('/complete', [ContactsController::class, 'complete'])->name('complete');