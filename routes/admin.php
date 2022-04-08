<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Usercontroller;


Route::view('/backpanel', 'backpanel.dashboard.index')->name('dash.index');

//user routes
Route::get('/backpanel/users', [Usercontroller::class, 'index'])->name('user.index');
Route::get('/backpanel/users/create', [Usercontroller::class, 'create'])->name('user.create');

