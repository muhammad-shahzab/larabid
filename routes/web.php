<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'login'])->name('login.index');
Route::post('/', [WelcomeController::class, 'loginRequest'])->name('login.submit');


Route::get('/signup', [WelcomeController::class, 'signup'])->name('signup.index');
Route::post('/signup', [WelcomeController::class, 'signupRequest'])->name('signup.submit');





// Route::get('/', [WelcomeController::class, 'signup'])->name('signup.index');

// Route::get('/' , function(){
//     return view('login');
// });
// Route::get('/signup' , function(){
//     return view('signup');
// });