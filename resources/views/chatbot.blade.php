@extends('layouts.app')

@section('title', 'AsistenBudayaID - Chatbot Budaya Indonesia')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 25%, #4caf50 75%, #2e7d32 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .page-wrapper {
            min-height: calc(100vh - 120px);
            /* Accounting for navbar and footer */
            padding: 40px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .chatbot-page {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 600px;
            display: flex;
            flex-direction: column;
        }

        .chat-page-header {
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            padding: 20px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .back-button {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }

        .header-content {
            text-align: center;
            flex: 1;
        }

        .chat-title {
            font-size: 1.4em;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .chat-subtitle {
            font-size: 0.9em;
            opacity: 0.9;
        }

        .header-spacer {
            width: 45px;
        }

        .chat-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 500px;
        }

        .chat-messages {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
            background: #f8f9fa;
            scroll-behavior: smooth;
            min-height: 400px;
        }

        .message {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-end;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .message.user {
            justify-content: flex-end;
        }

        .message-bubble {
            max-width: 70%;
            padding: 15px 20px;
            border-radius: 20px;
            position: relative;
            word-wrap: break-word;
            line-height: 1.5;
            font-size: 0.95em;
        }

        .message.user .message-bubble {
            background: white;
            color: #333;
            border-bottom-right-radius: 5px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #e9ecef;
        }

        .message.bot .message-bubble {
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            border-bottom-left-radius: 5px;
            box-shadow: 0 3px 15px rgba(255, 107, 53, 0.3);
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9em;
            flex-shrink: 0;
        }

        .message.user .avatar {
            background: #4caf50;
            color: white;
            order: 1;
        }

        .message.bot .avatar {
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
        }

        .quick-ask {
            padding: 20px 30px;
            background: white;
            border-top: 1px solid #e9ecef;
        }

        .quick-ask-title {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .quick-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .quick-btn {
            background: linear-gradient(45deg, #4caf50, #66bb6a);
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 20px;
            font-size: 0.85em;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
            font-weight: 500;
        }

        .quick-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
            background: linear-gradient(45deg, #388e3c, #4caf50);
        }

        .chat-input-area {
            padding: 25px 30px;
            background: white;
            border-top: 1px solid #e9ecef;
        }

        .input-container {
            display: flex;
            align-items: flex-end;
            gap: 15px;
            background: #f8f9fa;
            border-radius: 25px;
            padding: 8px;
            border: 2px solid #e9ecef;
            transition: border-color 0.3s ease;
        }

        .input-container:focus-within {
            border-color: #ff6b35;
        }

        .chat-input {
            flex: 1;
            border: none;
            background: transparent;
            padding: 12px 16px;
            font-size: 1em;
            outline: none;
            resize: none;
            max-height: 120px;
            min-height: 20px;
            font-family: inherit;
        }

        .send-btn {
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 1.2em;
            flex-shrink: 0;
        }

        .send-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }

        .send-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .typing-indicator {
            display: none;
            padding: 15px 20px;
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            border-radius: 20px;
            border-bottom-left-radius: 5px;
            max-width: 70%;
        }

        .typing-dots {
            display: inline-flex;
            gap: 4px;
        }

        .typing-dot {
            width: 6px;
            height: 6px;
            background: white;
            border-radius: 50%;
            animation: typingDots 1.4s infinite;
        }

        .typing-dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes typingDots {

            0%,
            60%,
            100% {
                opacity: 0.3;
                transform: scale(0.8);
            }

            30% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .welcome-message {
            text-align: center;
            color: #666;
            padding: 30px 20px;
            background: white;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .welcome-message strong {
            color: #ff6b35;
            font-size: 1.1em;
        }

        .error-message {
            background: #ffebee !important;
            color: #c62828 !important;
            border: 1px solid #ffcdd2;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-wrapper {
                padding: 20px 0;
            }

            .container {
                padding: 0 15px;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 1rem;
            }

            .chat-page-header {
                padding: 15px 20px;
            }

            .chat-messages {
                padding: 20px;
                min-height: 350px;
            }

            .message-bubble {
                max-width: 85%;
                padding: 12px 16px;
            }

            .quick-ask {
                padding: 15px 20px;
            }

            .chat-input-area {
                padding: 20px;
            }

            .chat-input {
                font-size: 16px;
                /* Prevent zoom on iOS */
            }
        }

        @media (max-width: 480px) {
            .chatbot-page {
                border-radius: 10px;
                margin: 0 -5px;
            }

            .message-bubble {
                max-width: 90%;
            }

            .quick-buttons {
                gap: 6px;
            }

            .quick-btn {
                font-size: 0.8em;
                padding: 8px 12px;
            }

            .avatar {
                width: 35px;
                height: 35px;
                margin: 0 8px;
            }
        }

        /* Desktop specific styles */
        @media (min-width: 1024px) {
            .container {
                padding: 0 40px;
            }

            .chat-messages {
                padding: 40px;
            }

            .message-bubble {
                max-width: 65%;
            }

            .chat-input-area {
                padding: 30px 40px;
            }

            .quick-ask {
                padding: 25px 40px;
            }
        }
    </style>

    <div class="page-wrapper">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header">
                <h1>🇮🇩 NusayaBot</h1>
                <p>Jelajahi Kekayaan Budaya, Tradisi, dan Kuliner Indonesia Bersama AI Assistant</p>
            </div>

            <!-- Chatbot Page -->
            <div class="chatbot-page">
                <!-- Chat Page Header -->
                <div class="chat-page-header">
                    <button class="back-button" onclick="goBack()" title="Kembali">
                        ←
                    </button>
                    <div class="header-content">
                        <div class="chat-title">NusayaBot</div>
                        <div class="chat-subtitle">AI Assistant Budaya Indonesia</div>
                    </div>
                    <div class="header-spacer"></div>
                </div>

                <!-- Chat Content -->
                <div class="chat-content">
                    <!-- Chat Messages -->
                    <div class="chat-messages" id="chatMessages">
                        <div class="welcome-message">
                            <p><strong>Selamat datang di AsistenBudayaID!</strong></p>
                            <p>Saya siap membantu Anda menjelajahi kekayaan budaya, tradisi, dan kuliner Indonesia. Silakan
                                ajukan pertanyaan tentang warisan budaya Nusantara!</p>
                        </div>
                    </div>

                    <!-- Quick Ask Section -->
                    <div class="quick-ask" id="quickAsk">
                        <div class="quick-ask-title">💡 Pertanyaan Populer:</div>
                        <div class="quick-buttons">
                            <button class="quick-btn"
                                onclick="sendQuickMessage('Ceritakan tentang tari tradisional Jawa')">Tari
                                Tradisional</button>
                            <button class="quick-btn"
                                onclick="sendQuickMessage('Apa itu gudeg dan dari mana asalnya?')">Kuliner Gudeg</button>
                            <button class="quick-btn" onclick="sendQuickMessage('Jelaskan makna filosofi batik')">Filosofi
                                Batik</button>
                            <button class="quick-btn"
                                onclick="sendQuickMessage('Bagaimana tradisi upacara adat Bali?')">Adat Bali</button>
                            <button class="quick-btn"
                                onclick="sendQuickMessage('Apa saja alat musik tradisional Indonesia?')">Musik
                                Tradisional</button>
                        </div>
                    </div>

                    <!-- Chat Input -->
                    <div class="chat-input-area">
                        <div class="input-container">
                            <textarea id="chatInput" class="chat-input" placeholder="Tanyakan tentang budaya, tradisi, atau kuliner Indonesia..."
                                rows="1"></textarea>
                            <button id="sendBtn" class="send-btn" onclick="sendMessage()">
                                ➤
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        try {
            // Ambil CSRF dengan fallback aman
            const csrfMeta = document.querySelector('meta[name="csrf-token"]');
            const csrfToken = csrfMeta ? csrfMeta.getAttribute('content') : '';

            // Gunakan route helper agar path selalu benar (pastikan route diberi nama 'chatbot.ask')
            const askUrl = "{{ route('chatbot.ask') }}";

            const chatMessages = document.getElementById('chatMessages');
            const chatInput = document.getElementById('chatInput');
            const sendBtn = document.getElementById('sendBtn');
            const quickAsk = document.getElementById('quickAsk');

            function goBack() {
                if (document.referrer) window.history.back();
                else window.location.href = '/';
            }

            // Auto-resize textarea
            chatInput.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = Math.min(this.scrollHeight, 120) + 'px';
            });

            // Enter => kirim (Shift+Enter = newline)
            chatInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });

            async function sendMessage() {
                const message = chatInput.value.trim();
                if (!message) return;

                addMessage(message, 'user');
                chatInput.value = '';
                chatInput.style.height = 'auto';

                showTypingIndicator();

                // disable tombol utk mencegah double submit
                sendBtn.disabled = true;

                try {
                    const res = await fetch(askUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            message
                        })
                    });

                    // Jika Laravel redirect/419, tangani khusus
                    if (res.status === 419) {
                        hideTypingIndicator();
                        addMessage('Session kadaluarsa (419). Silakan refresh dan login ulang.', 'bot', true);
                        return;
                    }

                    if (!res.ok) {
                        const text = await res.text();
                        hideTypingIndicator();
                        addMessage('Server error: ' + (res.status + ' - ' + res.statusText), 'bot', true);
                        console.error('Server reply (not ok):', text);
                        return;
                    }

                    const data = await res.json();
                    hideTypingIndicator();

                    if (data.error) {
                        addMessage(`Maaf, terjadi kesalahan: ${data.error}`, 'bot', true);
                    } else {
                        addMessage(data.reply || 'Maaf, tidak ada balasan.', 'bot');
                        if (data.quickAsk) updateQuickAsk(data.quickAsk);
                    }
                } catch (err) {
                    hideTypingIndicator();
                    addMessage('Gagal menghubungi server. Cek koneksi atau console.', 'bot', true);
                    console.error(err);
                } finally {
                    sendBtn.disabled = false;
                }
            }

            // Quick ask: isi, fokus, dan kirim dengan delay kecil agar input fokus bekerja
            function sendQuickMessage(message) {
                chatInput.value = message;
                chatInput.focus();
                // delay kecil supaya perubahan value dan focus settle, lalu kirim
                setTimeout(() => sendMessage(), 60);
            }

            function addMessage(text, sender, isError = false) {
                const messageDiv = document.createElement('div');
                messageDiv.className = `message ${sender}`;

                const avatar = document.createElement('div');
                avatar.className = 'avatar';
                avatar.textContent = sender === 'user' ? 'U' : '🤖';

                const bubble = document.createElement('div');
                bubble.className = `message-bubble ${isError ? 'error-message' : ''}`;
                bubble.textContent = text;

                // urutan: avatar + bubble (sesuaikan CSS) 
                messageDiv.appendChild(avatar);
                messageDiv.appendChild(bubble);

                const welcomeMsg = chatMessages.querySelector('.welcome-message');
                if (welcomeMsg) welcomeMsg.remove();

                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            function showTypingIndicator() {
                hideTypingIndicator(); // pastikan tidak dobel
                const typingDiv = document.createElement('div');
                typingDiv.className = 'message bot';
                typingDiv.id = 'typingIndicator';

                const avatar = document.createElement('div');
                avatar.className = 'avatar';
                avatar.textContent = '🤖';

                const indicator = document.createElement('div');
                indicator.className = 'typing-indicator';
                indicator.style.display = 'block';
                indicator.innerHTML = `
            <span class="typing-dots">
                <span class="typing-dot"></span>
                <span class="typing-dot"></span>
                <span class="typing-dot"></span>
            </span>
            Sedang mengetik...
        `;

                typingDiv.appendChild(avatar);
                typingDiv.appendChild(indicator);
                chatMessages.appendChild(typingDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            function hideTypingIndicator() {
                const typing = document.getElementById('typingIndicator');
                if (typing) typing.remove();
            }

            function updateQuickAsk(suggestions) {
                const quickButtons = quickAsk.querySelector('.quick-buttons');
                quickButtons.innerHTML = '';
                suggestions.forEach(s => {
                    const btn = document.createElement('button');
                    btn.className = 'quick-btn';
                    btn.textContent = s.length > 25 ? s.substring(0, 22) + '...' : s;
                    btn.title = s;
                    btn.onclick = () => sendQuickMessage(s);
                    quickButtons.appendChild(btn);
                });
            }

            // Fokus input awal
            document.addEventListener('DOMContentLoaded', () => {
                chatInput.focus();
            });
        } catch (e) {
            console.error('Script chatbot error:', e);
        }
    </script>

@endsection
