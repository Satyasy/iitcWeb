<style>
    body {
        font-family: sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 960px;
        margin: 40px auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .header h1 {
        margin: 0;
        font-size: 24px;
        color: #333;
    }

    .back-link {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .profile-card {
        text-align: center;
        padding: 30px;
    }

    .profile-card h2 {
        font-size: 28px;
        margin-bottom: 5px;
        color: #333;
    }

    .profile-card p {
        font-size: 16px;
        color: #777;
        margin-top: 0;
    }

    .input-group {
        margin-bottom: 20px;
        text-align: left;
    }

    .input-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    .input-group input {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .comment-section {
        margin-top: 40px;
    }

    .comment-section h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 20px;
    }

    .comment-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .comment-item {
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .comment-item p {
        margin: 0;
        line-height: 1.6;
        color: #555;
    }

    .comment-item strong {
        color: #333;
    }

    .explore-section {
        margin-top: 40px;
        text-align: center;
    }

    .explore-section h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 20px;
    }

    .explore-tags {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .explore-tags .tag {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 14px;
    }

    .footer {
        text-align: center;
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid #eee;
        color: #777;
        font-size: 14px;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header">
            <a href="/" class="back-link">&larr; Kembali</a>
        </div>
        <div class="profile-card">
            <h2>Halo {{ $user->name }}!</h2>
            <p>@username</p>
            <div class="input-group">
                <input type="text" value="{{ $user->name }}" placeholder="Nama Lengkap">
            </div>
            <div class="input-group">
                <input type="email" value="{{ $user->email }}" placeholder="Email">
            </div>
        </div>

        <div class="comment-section">
            <h3>Riwayat Komentar</h3>
            <div class="comment-list">
                @foreach ($comments as $comment)
                    <div class="comment-item">
                        <strong>{{ $user->name }}</strong>
                        <p>{{ $comment->comment }}</p>
                        <small>Pada Artikel: <a href="#">{{ $comment->artikel->title }}</a></small>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="explore-section">
            <h3>Jelajahi lainnya</h3>
            <div class="explore-tags">
                <a href="#" class="tag">Ragam Budaya Nusantara</a>
                <a href="#" class="tag">Bahasa & Aksara Daerah</a>
                <a href="#" class="tag">Tradisi & Upacara Adat</a>
                <a href="#" class="tag">Makanan Khas Nusantara</a>
                <a href="#" class="tag">Jajanan Tradisional</a>
                <a href="#" class="tag">Minuman</a>
                <a href="#" class="tag">Artikel</a>
                <a href="#" class="tag">Pustaka</a>
                <a href="#" class="tag">Event Kebudayaan</a>
            </div>
        </div>
    </div>
@endsection
