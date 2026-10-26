<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | Laravel POS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header><div class="shell"><a class="brand" href="{{ route('home') }}">Laravel POS</a>
<nav aria-label="Main navigation">
    @foreach (['home' => 'Home', 'about' => 'About', 'customers' => 'Customer Accounts', 'users' => 'User Accounts'] as $route => $label)
        <a href="{{ route($route) }}" @if(request()->routeIs($route)) aria-current="page" @endif>{{ $label }}</a>
    @endforeach
</nav></div></header>
<main class="shell" id="main">@yield('content')</main>
<footer class="shell">IT0049 &middot; Technical Formative Assessment 5 &middot; Laravel POS Foundations</footer>
</body>
</html>
