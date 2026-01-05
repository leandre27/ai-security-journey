<?php
namespace App\Providers;

use Illuminate\Support\Facades\Http;

class ClaudeAiProvider
{
    public function send(string $message): mixed
    {

        $response = Http::withHeaders([
            'x-api-key' => env('ANTHROPIC_API_KEY')
        ])->post('https://api.anthropic.com/v1/messages', [
            'messages' => [['role' => 'user', 'content' => $message]]
        ])->json();
        dd($response);
    }
}