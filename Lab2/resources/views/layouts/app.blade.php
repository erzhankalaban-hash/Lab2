<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Спортивний клуб')</title>
    <!-- Підключення Bootstrap CSS для гарного оформлення -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Головне меню сайту -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('club.index') }}">СК "Олімп"</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('club.index') }}">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('club.contact') }}">Записатися</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Основний контент сторінки -->
<main class="container">
    @yield('content')
</main>

<!-- Футер -->
<footer class="text-center mt-5 py-4 bg-light text-muted border-top">
    <div class="container">
        <p>&copy; 2026 Спортивний клуб. Усі права захищені.</p>
    </div>
</footer>
</body>
</html>
