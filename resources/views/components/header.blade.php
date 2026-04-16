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
    x-data="{ open: false }"
    class="relative z-40"
>
    <div class="container px-4 pt-4 sm:px-6 sm:pt-5">
        <div
            class="grid grid-cols-[auto_1fr_auto] items-center gap-3 rounded-[1.1rem] border border-ink/10 bg-white/90 px-3 py-3 shadow-[0_12px_30px_rgba(19,12,5,0.08)] backdrop-blur-md sm:gap-4 sm:px-4 md:px-5 lg:gap-6 lg:px-6 lg:py-4"
        >
            <a href="{{ route('home') }}" class="flex items-center gap-4" aria-label="ARIES Investissements — accueil">
                <img
                    src="{{ asset('assets/img/brand/logo-aries-primary.png') }}"
                    alt="ARIES Investissements"
                    class="h-8 w-auto bg-bone px-2.5 py-1.5 sm:h-9 sm:px-3 sm:py-2 md:h-11"
                >
                <span class="hidden xl:block text-[11px] uppercase tracking-[0.24em] text-ink/40">
                    Conseil financier & investissement
                </span>
            </a>

            <nav class="hidden lg:flex items-center justify-center gap-7 xl:gap-9 px-8 xl:px-10" aria-label="Navigation principale">
                @foreach ($links as $l)
                    @php $active = request()->routeIs($l['route']); @endphp
                    <a
                        href="{{ route($l['route']) }}"
                        class="group relative whitespace-nowrap text-[12px] uppercase tracking-[0.18em] {{ $active ? 'text-ink' : 'text-ink/68' }} transition-colors hover:text-ink"
                    >
                        {{ $l['label'] }}
                        <span class="absolute -bottom-2 left-0 h-px w-full origin-left bg-gold transition-transform duration-500 ease-out-expo {{ $active ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    </a>
                @endforeach
            </nav>

            <div class="hidden lg:flex items-center gap-5">
                <div class="text-right">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-ink/35">Brazzaville · Washington</p>
                    <p class="mt-1 text-xs text-ink/58">Afrique · Conseil stratégique · Banque d’affaires</p>
                </div>
            </div>

            <button
                @click="open = !open"
                class="justify-self-end border border-ink/10 p-2.5 text-ink transition hover:bg-ink/5 lg:hidden"
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
            class="mt-2 rounded-[1rem] border border-ink/10 bg-white shadow-[0_12px_30px_rgba(19,12,5,0.08)] lg:hidden"
        >
            <nav class="flex flex-col gap-1 p-4 sm:p-5">
                @foreach ($links as $l)
                    @php $active = request()->routeIs($l['route']); @endphp
                    <a
                        href="{{ route($l['route']) }}"
                        class="border-b border-ink/8 px-0 py-3.5 text-base sm:text-lg {{ $active ? 'text-gold' : 'text-ink' }}"
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
