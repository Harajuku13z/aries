@php
    $navItems = [
        ['label' => 'Accueil', 'route' => 'home'],
        ['label' => 'Présentation', 'route' => 'presentation'],
        ['label' => 'Expertise', 'route' => 'expertise'],
        ['label' => 'Secteurs', 'route' => 'sectors'],
        ['label' => 'Équipe', 'route' => 'team'],
        ['label' => 'Publications', 'route' => 'publications'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header class="site-header" x-data="{ open: false, solid: false }" @scroll.window="solid = window.scrollY > 24">
    <div class="container">
        <div class="header-bar" :class="{ 'is-solid': solid || open }">
            <a href="{{ route('home') }}" class="brand-mark" aria-label="{{ $site['name'] }}">
                <img src="{{ asset('assets/img/logo-aries.png') }}" alt="{{ $site['name'] }}">
            </a>

            <nav class="desktop-nav" aria-label="Navigation principale">
                @foreach ($navItems as $item)
                    <a href="{{ route($item['route']) }}" class="nav-link {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="header-actions">
                <a href="{{ route('contact') }}" class="button button-outline">Entrer en relation</a>
                <button type="button" class="mobile-toggle" @click="open = !open" :aria-expanded="open.toString()" aria-label="Ouvrir le menu">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="mobile-panel" x-show="open" x-transition.origin.top.duration.300ms @click.outside="open = false" x-cloak>
            <div class="mobile-panel__inner">
                @foreach ($navItems as $item)
                    <a href="{{ route($item['route']) }}" class="mobile-link">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</header>
