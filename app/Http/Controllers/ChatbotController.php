<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $userMessage = $request->input('message');
        $geminiApiKey = env('GEMINI_API_KEY');

        if (!$geminiApiKey) {
            return response()->json(['error' => 'GEMINI_API_KEY not set in .env'], 500);
        }

        // Prompt sistem untuk membatasi topik
        $systemPrompt = "Kamu adalah chatbot yang ahli dalam budaya, tradisi, dan warisan Indonesia. 
        Jawab pertanyaan hanya seputar budaya Indonesia. 
        Jika pertanyaan di luar topik, tolak dengan sopan dan arahkan ke topik budaya Indonesia.";

        try {
            // Panggil Gemini API via REST
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $geminiApiKey,
            ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent', [
                        'contents' => [
                            ['parts' => [['text' => $systemPrompt . "\nUser: " . $userMessage]]]
                        ]
                    ]);

            if ($response->failed()) {
                return response()->json(['error' => 'Gemini API error'], 500);
            }

            $data = $response->json();
            $botReply = $data['candidates'][0]['content']['parts'][0]['text'] ?? "Maaf, saya tidak bisa menjawab pertanyaan itu.";

            return response()->json(['reply' => $botReply]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}