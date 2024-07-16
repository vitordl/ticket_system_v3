<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\ShowTicketsLivewire;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('newticket', function (){
        return view('newticket');
    })->name('newticket');

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

  
    Route::get('ticket/{ticket}', [ShowTicketsLivewire::class, 'showItem'])->name('ticket');

    Route::get('finish/{ticket}', [ShowTicketsLivewire::class, 'finishTicket'])->name('finish-ticket');
    
    Route::get('accept/{ticket}', [ShowTicketsLivewire::class, 'acceptTicket'])->name('accept-ticket');
    Route::get('refuse/{ticket}', [ShowTicketsLivewire::class, 'refuseTicket'])->name('refuse-ticket');

});

require __DIR__.'/auth.php';
