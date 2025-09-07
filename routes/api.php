<?php
// routes/api.php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::post('/chatbot/ask', [ChatbotController::class, 'ask']);