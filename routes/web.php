<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/piscos_m', function(){
	return view("piscos");
});
Route::get('/piscos_m2', function(){
return view("piscos2");   
})->name('piscosM');

Route::get('/hehe', function(){
	return 5 + 5;
});








//NEW
Route::get('/index', function () {
    return view('mypages.index');
})->name("index");

Route::get('gallery', function () {
    return view('mypages.gallery');
})->name("gallery");

Route::get('services', function () {
    return view('mypages.services');
})->name("services");


//CALCULATOR
Route::get('calculator',[CalculatorController::class, 'showCalculatorPage']);










Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
