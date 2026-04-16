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
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 24)"
    class="fixed inset-x-0 top-0 z-50"
>
    <div class="container pt-4 md:pt-5">
        <div
            :class="scrolled ? 'border-white/10 bg-ink/80 shadow-[0_18px_60px_rgba(0,0,0,0.28)] backdrop-blur-xl' : 'border-white/8 bg-black/10 backdrop-blur-md'"
            class="grid grid-cols-[auto_1fr_auto] items-center gap-4 rounded-[1.75rem] border px-4 py-3 md:px-5 lg:px-6 lg:gap-8 transition-all duration-500 ease-out-expo"
        >
            <a
                href="{{ route('home') }}"
                class="flex items-center rounded-2xl bg-bone px-3 py-2 shadow-[0_8px_24px_rgba(0,0,0,0.12)] transition-transform duration-500 ease-out-expo hover:-translate-y-0.5"
                aria-label="ARIES Investissements — accueil"
            >
                <img
                    src="{{ asset('assets/img/brand/logo-aries-primary.png') }}"
                    alt="ARIES Investissements"
                    class="h-10 w-auto md:h-11"
                >
            </a>

            <nav class="hidden lg:flex items-center justify-center gap-8 xl:gap-10 px-6 xl:px-10" aria-label="Navigation principale">
                @foreach ($links as $l)
                    @php $active = request()->routeIs($l['route']); @endphp
                    <a
                        href="{{ route($l['route']) }}"
                        class="group relative whitespace-nowrap text-[12px] uppercase tracking-eyebrow text-ivory/82 transition hover:text-bone"
                    >
                        {{ $l['label'] }}
                        <span class="absolute left-0 -bottom-1.5 h-px w-full origin-left bg-gold transition-transform duration-500 ease-out-expo {{ $active ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    </a>
                @endforeach
            </nav>

            <div class="hidden lg:flex items-center gap-4 xl:gap-5">
                <div class="text-right">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-ivory/45">Brazzaville · Washington</p>
                    <p class="text-xs text-ivory/70">Conseil financier indépendant</p>
                </div>
                <a
                    href="{{ route('contact') }}"
                    class="group inline-flex items-center gap-2 rounded-full bg-gold px-5 py-3 text-sm font-medium text-ink transition-colors duration-500 hover:bg-bone"
                >
                    Prendre rendez-vous
                    <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>

            <button
                @click="open = !open"
                class="col-start-3 justify-self-end rounded-xl border border-white/10 bg-white/5 p-2.5 text-ivory transition hover:bg-white/10 lg:hidden"
                :aria-expanded="open"
                aria-label="Ouvrir le menu"
            >
                <svg x-show="!open" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 7h18M3 12h18M3 17h18"/></svg>
                <svg x-show="open" x-cloak class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 5l14 14M19 5L5 19"/></svg>
            </button>
        </div>

        <div
            x-show="open"
            x-cloak
            x-transition:enter="transition duration-500 ease-out-expo"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="mt-3 overflow-hidden rounded-[1.5rem] border border-white/10 bg-ink/95 shadow-[0_18px_60px_rgba(0,0,0,0.28)] backdrop-blur-xl lg:hidden"
        >
            <nav class="flex flex-col gap-1 p-5 pb-6">
                @foreach ($links as $l)
                    @php $active = request()->routeIs($l['route']); @endphp
                    <a
                        href="{{ route($l['route']) }}"
                        class="rounded-2xl px-4 py-3 text-xl font-display tracking-tightest transition {{ $active ? 'bg-white/8 text-gold' : 'text-ivory hover:bg-white/5 hover:text-gold' }}"
                    >
                        {{ $l['label'] }}
                    </a>
                @endforeach

                <div class="mt-4 rounded-[1.5rem] border border-white/10 bg-white/5 p-4">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-ivory/45">Brazzaville · Washington</p>
                    <p class="mt-2 text-sm text-ivory/70">Conseil financier indépendant pour projets stratégiques en Afrique.</p>
                    <a
                        href="{{ route('contact') }}"
                        class="mt-4 inline-flex items-center gap-2 rounded-full bg-gold px-5 py-3 text-sm font-medium text-ink"
                    >
                        Prendre rendez-vous
                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
