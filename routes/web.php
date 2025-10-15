<?php

use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\EditMessage;
use App\Livewire\Login;
use App\Livewire\Registration;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class)->name('counter');

Route::get('/login', Login::class)->name('login');

Route::get('/registration', Registration::class)->name('registration');

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/edit-message/{message}', EditMessage::class)->name('edit-message');
