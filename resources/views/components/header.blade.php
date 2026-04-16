@php
    $links = [
        ['route' => 'presentation', 'label' => 'Présentation'],
        ['route' => 'expertise', 'label' => 'Expertise'],
        ['route' => 'sectors', 'label' => 'Secteurs'],
        ['route' => 'team', 'label' => 'Équipe'],
        ['route' => 'publications', 'label' => 'Publications'],
        ['route' => 'contact', 'label' => 'Contact'],
    ];
@endphp

<header
    x-data="{ scrolled: false, open: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 32)"
    class="fixed inset-x-0 top-0 z-50"
>
    <div class="container px-4 sm:px-6">
        <div
            :class="scrolled ? 'border-white/10 bg-ink/90 backdrop-blur-xl shadow-[0_18px_50px_rgba(0,0,0,0.25)]' : 'border-white/8 bg-ink/72 backdrop-blur-lg shadow-[0_10px_30px_rgba(0,0,0,0.12)]'"
            class="grid grid-cols-[auto_1fr_auto] items-center gap-3 rounded-b-[1.1rem] border-x border-b px-3 py-3 sm:gap-4 sm:px-4 md:px-5 lg:gap-6 lg:px-6 lg:py-4 transition-all duration-500 ease-out-expo"
        >
            <a href="{{ route('home') }}" class="flex items-center gap-4" aria-label="ARIES Investissements — accueil">
                <img
                    src="{{ asset('assets/img/brand/logo-aries-primary.png') }}"
                    alt="ARIES Investissements"
                    class="h-8 w-auto bg-bone px-2.5 py-1.5 sm:h-9 sm:px-3 sm:py-2 md:h-11"
                >
                <span class="hidden xl:block text-[11px] uppercase tracking-[0.24em] text-ivory/55">
                    Conseil financier & investissement
                </span>
            </a>

            <nav class="hidden lg:flex items-center justify-center gap-7 xl:gap-9 px-8 xl:px-10" aria-label="Navigation principale">
                @foreach ($links as $l)
                    @php $active = request()->routeIs($l['route']); @endphp
                    <a
                        href="{{ route($l['route']) }}"
                        class="group relative whitespace-nowrap text-[12px] uppercase tracking-[0.18em] {{ $active ? 'text-bone' : 'text-ivory/82' }} transition-colors hover:text-bone"
                    >
                        {{ $l['label'] }}
                        <span class="absolute -bottom-2 left-0 h-px w-full origin-left bg-gold transition-transform duration-500 ease-out-expo {{ $active ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    </a>
                @endforeach
            </nav>

            <div class="hidden lg:flex items-center gap-5">
                <div class="text-right">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-ivory/45">Brazzaville · Washington</p>
                    <p class="mt-1 text-xs text-ivory/70">Afrique · Conseil stratégique · Banque d’affaires</p>
                </div>
            </div>

            <button
                @click="open = !open"
                class="justify-self-end border border-white/10 p-2.5 text-ivory transition hover:bg-white/5 lg:hidden"
                :aria-expanded="open"
                aria-label="Ouvrir le menu"
            >
                <svg x-show="!open" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 7h18M3 12h18M3 17h18"/></svg>
                <svg x-show="open" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 5l14 14M19 5L5 19"/></svg>
            </button>
        </div>

        <div
            x-show="open"
            x-cloak
            x-transition:enter="transition duration-500 ease-out-expo"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="border-x border-b border-white/10 bg-ink/95 backdrop-blur-xl lg:hidden"
        >
            <nav class="flex flex-col gap-1 p-4 sm:p-5">
                @foreach ($links as $l)
                    @php $active = request()->routeIs($l['route']); @endphp
                    <a
                        href="{{ route($l['route']) }}"
                        class="border-b border-white/6 px-0 py-3.5 text-base sm:text-lg {{ $active ? 'text-gold' : 'text-ivory' }}"
                    >
                        {{ $l['label'] }}
                    </a>
                @endforeach
                <a
                    href="{{ route('contact') }}"
                    class="mt-4 inline-flex items-center justify-between border border-gold/40 bg-gold px-4 py-3 text-sm font-semibold text-ink"
                >
                    Nous contacter
                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </nav>
        </div>
    </div>
</header>
