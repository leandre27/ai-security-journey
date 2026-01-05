<?php

namespace App\Services\Chatbot;

use App\Providers\ClaudeAiProvider;

class ChatbotServices
{
    public function handleMessage(string $message)
    {
       $provider = new ClaudeAiProvider();
        return $provider->send($message);
    }
}