<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#130C05">
    <meta name="description" content="@yield('meta_description', 'ARIES Investissements — société de conseil financier à vocation de banque d’affaires, dédiée à l’accompagnement des projets d’investissement en Afrique.')">
    <link rel="icon" href="{{ asset('assets/img/brand/logo-aries-primary.png') }}" type="image/png">

    <title>@yield('title', 'ARIES Investissements — Conseil financier & Banque d’affaires')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bone text-ink font-sans antialiased selection:bg-gold selection:text-ink">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[200] focus:bg-ink focus:text-bone focus:px-4 focus:py-2">Aller au contenu</a>

    <x-header />

    <main id="main">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
