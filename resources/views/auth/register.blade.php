<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Budaya</title>
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
            width: 380px;
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

        .input-group input,
        .input-group select {
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

        .login {
            margin-top: 15px;
            font-size: 14px;
        }

        .login a {
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

        <h2>Create Account</h2>
        <p>Please fill in your details to register</p>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="text" name="name" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="file" name="foto" accept="image/*">
            </div>
            <button type="submit">Register</button>
        </form>
        <div class="login">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</body>

</html>
