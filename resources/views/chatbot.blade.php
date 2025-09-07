<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nusaya - Chatbot Budaya Indonesia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 25%, #4caf50 75%, #2e7d32 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .chatbot-container {
            width: 100%;
            max-width: 180vh;
            height: 600px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
        }

        .chat-header {
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .chat-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            height: 20px;
            background: white;
            border-radius: 20px 20px 0 0;
        }

        .chat-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .chat-subtitle {
            font-size: 0.9em;
            opacity: 0.9;
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #f8f9fa;
            scroll-behavior: smooth;
        }

        .message {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-end;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(10px);
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
            max-width: 80%;
            padding: 12px 16px;
            border-radius: 20px;
            position: relative;
            word-wrap: break-word;
            line-height: 1.4;
        }

        .message.user .message-bubble {
            background: white;
            color: #333;
            border-bottom-right-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .message.bot .message-bubble {
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            border-bottom-left-radius: 5px;
            box-shadow: 0 2px 10px rgba(255, 107, 53, 0.3);
        }

        .avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin: 0 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9em;
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
            padding: 10px 20px;
            background: white;
            border-top: 1px solid #eee;
        }

        .quick-ask-title {
            font-size: 0.85em;
            color: #666;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .quick-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .quick-btn {
            background: linear-gradient(45deg, #4caf50, #66bb6a);
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 0.8em;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .quick-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(76, 175, 80, 0.3);
            background: linear-gradient(45deg, #388e3c, #4caf50);
        }

        .chat-input-area {
            padding: 20px;
            background: white;
            border-top: 1px solid #eee;
        }

        .input-container {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #f8f9fa;
            border-radius: 25px;
            padding: 5px;
        }

        .chat-input {
            flex: 1;
            border: none;
            background: transparent;
            padding: 12px 16px;
            font-size: 1em;
            outline: none;
            resize: none;
            max-height: 100px;
            min-height: 20px;
        }

        .send-btn {
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 1.2em;
        }

        .send-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(255, 107, 53, 0.4);
        }

        .send-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .typing-indicator {
            display: none;
            padding: 12px 16px;
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            color: white;
            border-radius: 20px;
            border-bottom-left-radius: 5px;
            max-width: 80%;
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
            padding: 20px;
            font-style: italic;
        }

        @media (max-width: 480px) {
            .chatbot-container {
                height: 100vh;
                border-radius: 0;
                max-width: 100%;
            }

            .message-bubble {
                max-width: 90%;
            }
        }

        .error-message {
            background: #ffebee !important;
            color: #c62828 !important;
            border: 1px solid #ffcdd2;
        }
    </style>
</head>

<body>
    <div class="chatbot-container">
        <!-- Header -->
        <div class="chat-header">
            <div class="chat-title">🇮🇩 AsistenBudayaID</div>
            <div class="chat-subtitle">Chatbot Ahli Budaya Indonesia</div>
            {{-- Kembali ke Beranda --}}
        </div>

        <!-- Chat Messages -->
        <div class="chat-messages" id="chatMessages">
            <div class="welcome-message">
                <p><strong>Selamat datang!</strong></p>
                <p>Saya siap membantu Anda menjelajahi kekayaan budaya, tradisi, dan kuliner Indonesia. Silakan ajukan
                    pertanyaan!</p>
            </div>
        </div>

        <!-- Quick Ask Section -->
        <div class="quick-ask" id="quickAsk">
            <div class="quick-ask-title">💡 Pertanyaan Cepat:</div>
            <div class="quick-buttons">
                <button class="quick-btn" onclick="sendQuickMessage('Ceritakan tentang tari tradisional Jawa')">Tari
                    Tradisional</button>
                <button class="quick-btn" onclick="sendQuickMessage('Apa itu gudeg dan dari mana asalnya?')">Kuliner
                    Gudeg</button>
                <button class="quick-btn" onclick="sendQuickMessage('Jelaskan makna filosofi batik')">Filosofi
                    Batik</button>
                <button class="quick-btn" onclick="sendQuickMessage('Bagaimana tradisi upacara adat Bali?')">Adat
                    Bali</button>
                <button class="quick-btn" onclick="sendQuickMessage('Apa saja alat musik tradisional Indonesia?')">Musik
                    Tradisional</button>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="chat-input-area">
            <div class="input-container">
                <textarea id="chatInput" class="chat-input" placeholder="Tanyakan tentang budaya Indonesia..." rows="1"></textarea>
                <button id="sendBtn" class="send-btn" onclick="sendMessage()">
                    ➤
                </button>
            </div>
        </div>
    </div>

    <script>
        // Setup CSRF token for AJAX requests
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const chatMessages = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const sendBtn = document.getElementById('sendBtn');
        const quickAsk = document.getElementById('quickAsk');
        const chatToggle = document.getElementById('chatToggle');
        const chatbotContainer = document.getElementById('chatbotContainer');

        // Toggle chatbot visibility
        chatToggle.addEventListener('click', function() {
            chatbotContainer.classList.toggle('open');
            if (chatbotContainer.classList.contains('open')) {
                chatInput.focus();
                chatToggle.textContent = '✕';
            } else {
                chatToggle.textContent = '💬';
            }
        });

        // Auto-resize textarea
        chatInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 100) + 'px';
        });

        // Send message on Enter (but allow Shift+Enter for new line)
        chatInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });

        function sendMessage() {
            const message = chatInput.value.trim();
            if (!message) return;

            // Add user message to chat
            addMessage(message, 'user');
            chatInput.value = '';
            chatInput.style.height = 'auto';

            // Show typing indicator
            showTypingIndicator();

            // Send to backend
            fetch('/chatbot/ask', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        message: message
                    })
                })
                .then(response => response.json())
                .then(data => {
                    hideTypingIndicator();

                    if (data.error) {
                        addMessage(`Maaf, terjadi kesalahan: ${data.error}`, 'bot', true);
                    } else {
                        addMessage(data.reply, 'bot');

                        // Update quick ask buttons if provided
                        if (data.quickAsk) {
                            updateQuickAsk(data.quickAsk);
                        }
                    }
                })
                .catch(error => {
                    hideTypingIndicator();
                    addMessage('Maaf, terjadi kesalahan dalam menghubungi server.', 'bot', true);
                    console.error('Error:', error);
                });
        }

        function sendQuickMessage(message) {
            chatInput.value = message;
            sendMessage();
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

            messageDiv.appendChild(avatar);
            messageDiv.appendChild(bubble);

            // Remove welcome message if it exists
            const welcomeMsg = chatMessages.querySelector('.welcome-message');
            if (welcomeMsg) {
                welcomeMsg.remove();
            }

            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function showTypingIndicator() {
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

            sendBtn.disabled = true;
        }

        function hideTypingIndicator() {
            const typing = document.getElementById('typingIndicator');
            if (typing) {
                typing.remove();
            }
            sendBtn.disabled = false;
        }

        function updateQuickAsk(suggestions) {
            const quickButtons = quickAsk.querySelector('.quick-buttons');
            quickButtons.innerHTML = '';

            suggestions.forEach(suggestion => {
                const btn = document.createElement('button');
                btn.className = 'quick-btn';
                btn.textContent = suggestion.length > 25 ? suggestion.substring(0, 22) + '...' : suggestion;
                btn.title = suggestion;
                btn.onclick = () => sendQuickMessage(suggestion);
                quickButtons.appendChild(btn);
            });
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            chatInput.focus();
        });
    </script>
</body>

</html>
