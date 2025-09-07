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

        // Enhanced system prompt untuk meningkatkan kepekaan dan fokus topik
        $systemPrompt = "Kamu adalah AsistenBudayaID, chatbot ahli yang sangat fokus dan berpengalaman dalam budaya, tradisi, kuliner tradisional, dan warisan Indonesia.

ATURAN KETAT:
1. HANYA jawab pertanyaan seputar:
   - Budaya dan tradisi Indonesia (tarian, musik, upacara adat, dll)
   - Kuliner tradisional Indonesia (makanan daerah, resep tradisional, sejarah makanan)
   - Warisan budaya (candi, bangunan bersejarah, artefak)
   - Kesenian Indonesia (batik, wayang, ukiran, dll)
   - Bahasa daerah dan sastra tradisional
   - Pakaian dan aksesori tradisional
   - Festival dan perayaan tradisional Indonesia

2. TOLAK DENGAN TEGAS pertanyaan di luar topik seperti:
   - Teknologi, programming, atau IT
   - Politik kontemporer atau berita terkini
   - Olahraga modern atau internasional
   - Matematika, sains, atau pelajaran umum
   - Kesehatan atau medis
   - Bisnis atau ekonomi modern
   - Hiburan non-tradisional (film Hollywood, K-pop, dll)
   - Pertanyaan pribadi tentang diri pengguna

3. RESPON PENOLAKAN: 
   'Maaf, saya adalah chatbot khusus budaya Indonesia. Saya hanya dapat membantu menjawab pertanyaan seputar budaya, tradisi, kuliner tradisional, dan warisan Indonesia. Silakan tanyakan sesuatu tentang kekayaan budaya Nusantara!'

4. GAYA BAHASA:
   - Gunakan bahasa Indonesia yang santun dan informatif
   - Sertakan konteks sejarah atau geografis jika relevan
   - Berikan jawaban yang komprehensif namun mudah dipahami
   - Tunjukkan antusiasme terhadap kekayaan budaya Indonesia

Contoh pertanyaan yang BOLEH dijawab:
- 'Apa itu tari Kecak dari Bali?'
- 'Bagaimana cara membuat rendang tradisional?'
- 'Ceritakan tentang Candi Borobudur'
- 'Apa makna filosofi batik Parang?'

Contoh pertanyaan yang HARUS DITOLAK:
- 'Bagaimana cara coding PHP?'
- 'Siapa presiden Indonesia sekarang?'
- 'Resep pizza Italia'
- 'Cara menghitung integral'";

        // Quick ask suggestions untuk membantu pengguna
        $quickAskSuggestions = [
            "Ceritakan tentang tari tradisional Jawa",
            "Apa itu gudeg dan dari mana asalnya?",
            "Jelaskan makna filosofi batik",
            "Bagaimana tradisi upacara adat Bali?",
            "Apa saja alat musik tradisional Indonesia?"
        ];

        try {
            // Enhanced validation untuk mendeteksi topik yang tidak relevan
            $irrelevantKeywords = [
                'coding',
                'programming',
                'javascript',
                'php',
                'python',
                'html',
                'css',
                'politik',
                'pemilu',
                'presiden',
                'menteri',
                'dpr',
                'politik',
                'covid',
                'virus',
                'vaksin',
                'obat',
                'dokter',
                'rumah sakit',
                'sepak bola',
                'basket',
                'tenis',
                'olahraga internasional',
                'bisnis',
                'saham',
                'investasi',
                'cryptocurrency',
                'bitcoin',
                'hollywood',
                'netflix',
                'k-pop',
                'bts',
                'blackpink',
                'matematika',
                'fisika',
                'kimia',
                'biologi',
                'integral',
                'kalkulus'
            ];

            $lowerMessage = strtolower($userMessage);
            $containsIrrelevant = false;

            foreach ($irrelevantKeywords as $keyword) {
                if (strpos($lowerMessage, $keyword) !== false) {
                    $containsIrrelevant = true;
                    break;
                }
            }

            // Jika terdeteksi kata kunci tidak relevan, langsung tolak
            if ($containsIrrelevant) {
                return response()->json([
                    'reply' => 'Maaf, saya adalah chatbot khusus budaya Indonesia. Saya hanya dapat membantu menjawab pertanyaan seputar budaya, tradisi, kuliner tradisional, dan warisan Indonesia. Silakan tanyakan sesuatu tentang kekayaan budaya Nusantara!',
                    'quickAsk' => $quickAskSuggestions
                ]);
            }

            // Panggil Gemini API dengan SSL handling
            $response = Http::withOptions([
                'verify' => false, // Disable SSL verification for development
                'timeout' => 30,
            ])->withHeaders([
                        'Content-Type' => 'application/json',
                    ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . $geminiApiKey, [
                        'contents' => [
                            [
                                'parts' => [
                                    ['text' => $systemPrompt . "\n\nPertanyaan pengguna: " . $userMessage]
                                ]
                            ]
                        ],
                        'generationConfig' => [
                            'temperature' => 0.7,
                            'topK' => 40,
                            'topP' => 0.95,
                            'maxOutputTokens' => 1024,
                        ],
                        'safetySettings' => [
                            [
                                'category' => 'HARM_CATEGORY_HARASSMENT',
                                'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                            ],
                            [
                                'category' => 'HARM_CATEGORY_HATE_SPEECH',
                                'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                            ]
                        ]
                    ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'Gemini API error: ' . $response->body()
                ], 500);
            }

            $data = $response->json();
            $botReply = $data['candidates'][0]['content']['parts'][0]['text'] ?? "Maaf, saya tidak bisa memproses pertanyaan Anda saat ini.";

            // Double check jika response masih tidak sesuai topik
            if (stripos($botReply, 'maaf') === 0 || stripos($botReply, 'saya tidak') !== false) {
                $botReply = 'Maaf, saya adalah chatbot khusus budaya Indonesia. Saya hanya dapat membantu menjawab pertanyaan seputar budaya, tradisi, kuliner tradisional, dan warisan Indonesia. Silakan tanyakan sesuatu tentang kekayaan budaya Nusantara!';
            }

            return response()->json([
                'reply' => $botReply,
                'quickAsk' => $quickAskSuggestions
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan: ' . $e->getMessage(),
                'quickAsk' => $quickAskSuggestions
            ], 500);
        }
    }

    // Method untuk mendapatkan quick ask suggestions
    public function getQuickAsk()
    {
        $suggestions = [
            "Apa itu tari Saman dari Aceh?",
            "Ceritakan sejarah batik Indonesia",
            "Bagaimana cara membuat gado-gado?",
            "Apa makna upacara Nyepi di Bali?",
            "Jelaskan tentang rumah adat Joglo",
            "Apa itu wayang kulit dan sejarahnya?",
            "Ceritakan tentang kuliner khas Padang",
            "Bagaimana tradisi pernikahan adat Jawa?",
            "Apa saja candi terkenal di Indonesia?",
            "Jelaskan filosofi keris dalam budaya Jawa"
        ];

        return response()->json([
            'suggestions' => array_rand(array_flip($suggestions), 5)
        ]);
    }
}