<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;

Route::get('/', [ClubController::class, 'index'])->name('club.index');
Route::get('/club/contact', [ClubController::class, 'contactForm'])->name('club.contact');
Route::post('/club/contact', [ClubController::class, 'contactStore'])->name('club.contact.store');
