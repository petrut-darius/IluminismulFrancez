<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "home", 301);
Route::view("/home", "welcome")->name("home");
Route::view("/nuanta-generala", "nuanta_generala")->name("nuanta_generala");
Route::view("/introducere", "introducere")->name("introducere");
Route::view("/filosofi-reprezentativi", "filosofi_reprezentativi")->name("filosofi_reprezentativi");
Route::view("/caracteristicile_generale", "caracteristicile_generale")->name("caracteristicile_generale");
Route::view("/impact", "impact")->name("impact");
Route::view("/context-si-motivatie", "context_motivatie")->name("context_motivatie");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //rute test

});

require __DIR__.'/auth.php';
