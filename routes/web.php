<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\BudayaController;
// use App\Http\Controllers\ExploreController; // Pastikan ini ada


Route::get('/', function () {
    return view('welcome');
});

// ==== Auth Routes ====
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ==== Protected Routes (wajib login) ====
Route::middleware('auth')->group(function () {
    Route::get('/chatbot', function () {
        return view('chatbot');
    })->name('chatbot');

    // BARIS INI AKAN MEMANGGIL CONTROLLER YANG MENGIRIM DATA DARI DATABASE
    // Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
    // Route::get('/budaya', [BudayaController::class, 'index'])->name('budaya.ragam');
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/budaya', function () {
        return view('budaya');
    })->name('budaya');

        Route::get('/explore', function () {
        return view('explore');
    })->name('explore');


            Route::get('/ragam', function () {
        return view('ragam');
    })->name('ragam');

                Route::get('/detail', function () {
        return view('detail');
    })->name('detail');



    // API chatbot
    Route::post('/chatbot/ask', [ChatbotController::class, 'ask'])->name('chatbot.ask');
    Route::get('/chatbot/quick-ask', [ChatbotController::class, 'getQuickAsk'])->name('chatbot.quickask');

    // Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});