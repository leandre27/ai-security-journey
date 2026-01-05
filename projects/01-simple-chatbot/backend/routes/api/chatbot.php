<?php
use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::post('chat',[ChatbotController::class,'index'])->name('chatbot.chat');

