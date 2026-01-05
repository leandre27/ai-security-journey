<?php

namespace App\Http\Controllers;

use App\Services\Chatbot\ChatbotServices;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index(Request $request, ChatbotServices $chatbotService)
    {
        $message = $request->input('message');
        $response = $chatbotService->handleMessage($message);

        return response()->json($response);
    }
}
