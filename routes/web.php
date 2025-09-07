<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ProfileController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/chatbot', function () {
    return view('chatbot');
})->name('chatbot');

// Route untuk API chatbot
Route::post('/chatbot/ask', [ChatbotController::class, 'ask'])->name('chatbot.ask');

// Route untuk mendapatkan quick ask suggestions
Route::get('/chatbot/quick-ask', [ChatbotController::class, 'getQuickAsk'])->name('chatbot.quickask');

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');