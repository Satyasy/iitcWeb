<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Budaya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .flash {
            padding: 12px 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            font-size: 14px;
            text-align: left;
        }

        .flash-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .flash-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }


        .card {
            background: #fff;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px 25px;
            text-align: center;
        }

        h2 {
            color: #28a745;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .input-group {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .input-group input {
            border: none;
            outline: none;
            flex: 1;
            font-size: 14px;
        }

        .input-group i {
            margin-right: 8px;
            color: #666;
        }

        button {
            width: 100%;
            background: #28a745;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }

        .register {
            margin-top: 15px;
            font-size: 14px;
        }

        .register a {
            color: #28a745;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="card">
        @if (session('success'))
            <div class="flash flash-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="flash flash-error">
                {{ $errors->first() }}
            </div>
        @endif
        <h2>Welcome Back!</h2>
        <p>Hey, Enter your details to get sign in<br>to your account!</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <i>👤</i>
                <input type="text" name="name" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i>🔒</i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="register">
            Don’t have account? <a href="{{ route('register') }}">Register now</a>
        </div>
    </div>
</body>

</html>
