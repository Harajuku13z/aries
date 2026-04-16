@php
    $links = [
        ['route' => 'presentation', 'label' => 'Présentation'],
        ['route' => 'expertise',    'label' => 'Expertise'],
        ['route' => 'sectors',      'label' => 'Secteurs'],
        ['route' => 'team',         'label' => 'Équipe'],
        ['route' => 'publications', 'label' => 'Publications'],
        ['route' => 'contact',      'label' => 'Contact'],
    ];
@endphp

<header
    x-data="{ scrolled: false, open: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 40)"
    :class="scrolled ? 'bg-ink/85 backdrop-blur-md border-white/5' : 'bg-transparent border-transparent'"
    class="fixed inset-x-0 top-0 z-50 border-b transition-all duration-500 ease-out-expo"
>
    <div class="container flex items-center justify-between py-4 md:py-5">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 group" aria-label="ARIES Investissements — accueil">
            <img
                src="{{ asset('assets/img/logo-aries.png') }}"
                alt="ARIES Investissements"
                class="h-10 md:h-11 w-auto brightness-0 invert transition-opacity group-hover:opacity-90"
            >
        </a>

        {{-- Desktop nav --}}
        <nav class="hidden lg:flex items-center gap-9" aria-label="Navigation principale">
            @foreach ($links as $l)
                @php $active = request()->routeIs($l['route']); @endphp
                <a
                    href="{{ route($l['route']) }}"
                    class="relative text-[13px] uppercase tracking-eyebrow text-ivory/85 hover:text-bone transition group"
                >
                    {{ $l['label'] }}
                    <span class="absolute left-0 -bottom-1 h-px bg-gold transition-transform duration-500 ease-out-expo origin-left {{ $active ? 'scale-x-100 w-full' : 'scale-x-0 w-full group-hover:scale-x-100' }}"></span>
                </a>
            @endforeach
        </nav>

        {{-- CTA + lang --}}
        <div class="hidden lg:flex items-center gap-5">
            <span class="text-[11px] tracking-eyebrow uppercase text-ivory/60">FR / EN</span>
            <a href="{{ route('contact') }}"
               class="group inline-flex items-center gap-2 bg-gold text-ink px-5 py-2.5 text-sm font-medium tracking-wide hover:bg-bone transition-colors duration-500">
                Prendre rendez-vous
                <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </a>
        </div>

        {{-- Mobile burger --}}
        <button
            @click="open = !open"
            class="lg:hidden text-ivory p-2 -mr-2"
            :aria-expanded="open"
            aria-label="Ouvrir le menu"
        >
            <svg x-show="!open" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 7h18M3 17h18"/></svg>
            <svg x-show="open" x-cloak class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 5l14 14M19 5L5 19"/></svg>
        </button>
    </div>

    {{-- Mobile menu --}}
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition duration-500 ease-out-expo"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="lg:hidden bg-ink border-t border-white/5"
    >
        <nav class="container py-8 flex flex-col gap-6">
            @foreach ($links as $l)
                <a href="{{ route($l['route']) }}"
                   class="text-2xl font-display tracking-tightest text-ivory hover:text-gold transition-colors">
                    {{ $l['label'] }}
                </a>
            @endforeach
            <a href="{{ route('contact') }}"
               class="mt-4 inline-flex items-center justify-center gap-2 bg-gold text-ink px-5 py-3 text-sm font-medium tracking-wide w-fit">
                Prendre rendez-vous
                <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </a>
        </nav>
    </div>
</header>
