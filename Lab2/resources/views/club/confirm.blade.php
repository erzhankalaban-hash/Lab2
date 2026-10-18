@extends('layouts.app')

@section('title', 'Заявку прийнято')

@section('content')
    <div class="container mt-4">
        <div class="alert alert-success">
            <h1>Дякуємо, вашу заявку успішно надіслано!</h1>
        </div>

        <p>Отримані дані:</p>
        <ul>
            <li><strong>Ім'я:</strong> {{ $name }}</li>
            <li><strong>Email:</strong> {{ $email }}</li>
            <li><strong>Повідомлення:</strong> {{ $message }}</li>
        </ul>

        <p class="mt-3">
            <a href="{{ route('club.index') }}" class="btn btn-primary">Повернутися на головну</a>
        </p>
    </div>
@endsection
