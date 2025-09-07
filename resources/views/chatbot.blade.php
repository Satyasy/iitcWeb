<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Budaya</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        #chat-container {
            width: 420px;
            margin: 40px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        #chat-box {
            height: 350px;
            overflow-y: auto;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #eee;
            border-radius: 6px;
            background: #fafafa;
        }

        .message {
            margin-bottom: 12px;
            max-width: 80%;
            padding: 8px 12px;
            border-radius: 15px;
            display: inline-block;
        }

        .user-message {
            background: #007bff;
            color: white;
            float: right;
            clear: both;
        }

        .bot-message {
            background: #e8f5e9;
            color: #333;
            float: left;
            clear: both;
        }

        #input-container {
            display: flex;
            margin-top: 10px;
        }

        #user-input {
            flex-grow: 1;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        #send-btn {
            margin-left: 10px;
            padding: 10px 15px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }

        #send-btn:hover {
            background: #0056b3;
        }

        #quick-questions {
            margin-top: 12px;
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .quick-question-btn {
            padding: 6px 12px;
            border: 1px solid #007bff;
            background: #f0f8ff;
            color: #007bff;
            border-radius: 20px;
            cursor: pointer;
            font-size: 13px;
            transition: 0.3s;
        }

        .quick-question-btn:hover {
            background: #007bff;
            color: #fff;
        }

        .loading {
            font-style: italic;
            color: #999;
        }
    </style>
</head>

<body>
    <div id="chat-container">
        <h3 style="text-align:center; margin-bottom:10px;">🤖 Chatbot Budaya</h3>
        <div id="chat-box"></div>
        <div id="quick-questions">
            <button class="quick-question-btn">Apa itu Tari Kecak?</button>
            <button class="quick-question-btn">Jelaskan tentang Budaya Batik di Indonesia</button>
            <button class="quick-question-btn">Apa makna dari Wayang Kulit?</button>
            <button class="quick-question-btn">Sebutkan upacara adat dari Jawa</button>
        </div>
        <div id="input-container">
            <input type="text" id="user-input" placeholder="Tanyakan tentang budaya...">
            <button id="send-btn">Kirim</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatBox = document.getElementById('chat-box');
            const userInput = document.getElementById('user-input');
            const sendBtn = document.getElementById('send-btn');
            const quickQuestionsContainer = document.getElementById('quick-questions');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            function addMessage(text, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message', sender + '-message');
                messageDiv.textContent = text;
                chatBox.appendChild(messageDiv);
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            async function sendMessage() {
                const message = userInput.value.trim();
                if (message === '') return;

                addMessage(message, 'user');
                userInput.value = '';

                const loadingMsg = document.createElement('div');
                loadingMsg.classList.add('message', 'bot-message', 'loading');
                loadingMsg.textContent = 'Mengetik...';
                chatBox.appendChild(loadingMsg);
                chatBox.scrollTop = chatBox.scrollHeight;

                const response = await fetch('/api/chatbot/ask', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        message
                    })
                });

                chatBox.removeChild(loadingMsg);
                const data = await response.json();

                if (data.reply) {
                    addMessage(data.reply, 'bot');
                } else {
                    addMessage('Maaf, terjadi kesalahan.', 'bot');
                }
            }

            sendBtn.addEventListener('click', sendMessage);
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') sendMessage();
            });

            quickQuestionsContainer.addEventListener('click', function(e) {
                if (e.target.classList.contains('quick-question-btn')) {
                    userInput.value = e.target.textContent;
                    sendMessage();
                }
            });
        });
    </script>
</body>

</html>
