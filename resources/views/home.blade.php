@extends('layouts.app')

@section('title', 'ARIES Investissements — Faire émerger les nouveaux champions africains')

@section('content')

{{-- ============================================================ HERO --}}
<section class="relative min-h-[100svh] bg-ink text-bone overflow-hidden flex items-end">
    {{-- Backdrop --}}
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-ink via-soot to-espresso"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/60 to-transparent"></div>
        <div class="absolute inset-0 bg-grain opacity-60 mix-blend-overlay"></div>
        {{-- Decorative horizon line --}}
        <div class="absolute inset-x-0 bottom-32 h-px bg-gold/20"></div>
        <div class="absolute right-[10%] top-[30%] w-[420px] h-[420px] rounded-full bg-gold/20 blur-[140px]"></div>
    </div>

    <div class="container relative pt-40 pb-20 md:pb-28">
        <div class="max-w-5xl">
            <p class="reveal text-eyebrow uppercase text-gold/80 mb-10">
                Conseil financier &nbsp;·&nbsp; Banque d’affaires &nbsp;·&nbsp; Afrique
            </p>

            <h1 class="reveal font-display text-display-xl tracking-tightest leading-[0.95]">
                Faire émerger les <br class="hidden md:block">
                nouveaux <span class="italic text-gold">champions</span> <br class="hidden md:block">
                africains.
            </h1>

            <p class="reveal mt-10 max-w-xl text-lg md:text-xl text-ivory/80 leading-relaxed">
                ARIES Investissements accompagne investisseurs et dirigeants dans leurs opérations stratégiques en Afrique : conseil stratégique, financement de projets, intelligence économique, structuration.
            </p>

            <div class="reveal mt-12 flex flex-col sm:flex-row gap-4">
                <x-cta-button :href="route('presentation')">Découvrir notre approche</x-cta-button>
                <x-cta-button :href="route('contact')" variant="ghost-light">Nous contacter</x-cta-button>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="absolute inset-x-0 bottom-0 border-t border-white/10 bg-ink/40 backdrop-blur-sm">
        <div class="container py-6 flex flex-wrap items-center gap-x-10 gap-y-3 text-xs uppercase tracking-eyebrow text-ivory/70">
            <span class="flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-gold"></span>Brazzaville</span>
            <span class="flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-gold"></span>Washington</span>
            <span class="flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-gold"></span>Focus continental</span>
            <span class="ml-auto hidden md:flex items-center gap-2">Scroll
                <svg class="w-4 h-4 animate-bounce" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 2v12M3 9l5 5 5-5"/></svg>
            </span>
        </div>
    </div>
</section>

{{-- ============================================================ MANIFESTO --}}
<section class="py-28 md:py-40 bg-bone">
    <div class="container grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24">
        <div class="lg:col-span-4 reveal">
            <span class="text-eyebrow uppercase text-bronze">01 — Manifeste</span>
            <div class="mt-8 h-px w-20 bg-gold"></div>
        </div>

        <div class="lg:col-span-8">
            <h2 class="reveal font-display text-display-lg text-ink tracking-tightest leading-[1.02]">
                Une société de conseil financier <span class="italic text-bronze">à vocation de banque d’affaires</span>, basée en République du Congo.
            </h2>

            <div class="reveal mt-12 grid md:grid-cols-2 gap-10 text-ink/75 text-base md:text-lg leading-relaxed">
                <p>
                    Nous accompagnons nos clients dans leurs projets d’investissement sur le continent africain : du conseil stratégique et financier à la levée de dette et de fonds propres, en passant par l’intelligence économique et le conseil en structuration.
                </p>
                <p>
                    Notre exigence : une lecture fine des écosystèmes locaux, une rigueur d’exécution internationale, et une indépendance totale dans le conseil apporté à nos clients.
                </p>
            </div>

            <div class="reveal mt-12">
                <a href="{{ route('presentation') }}" class="group inline-flex items-center gap-3 text-ink border-b border-ink/30 pb-2 hover:border-gold transition-colors">
                    <span class="text-sm tracking-wide">Présentation complète</span>
                    <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================ EXPERTISES --}}
<section class="py-28 md:py-40 bg-ink text-bone relative overflow-hidden">
    <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay pointer-events-none"></div>

    <div class="container relative">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-12 mb-20">
            <x-section-heading
                eyebrow="02 — Expertise"
                title='Quatre expertises, <br><em class="italic text-gold font-normal">une même exigence.</em>'
                :dark="true"
            >
                Un éventail complet de services pour accompagner chaque étape d’un projet d’investissement — de sa conception à son financement.
            </x-section-heading>

            <a href="{{ route('expertise') }}" class="reveal group inline-flex items-center gap-3 text-bone border-b border-bone/30 pb-2 hover:border-gold transition-colors w-fit">
                <span class="text-sm tracking-wide">Toutes nos expertises</span>
                <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($expertises as $e)
                <x-expertise-card :num="$e['num']" :title="$e['title']" :text="$e['text']" />
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================ SECTEURS --}}
<section class="py-28 md:py-40 bg-bone">
    <div class="container">
        <div class="mb-20">
            <x-section-heading
                eyebrow="03 — Secteurs"
                title='Quatre marchés, <br><em class="italic text-bronze font-normal">une lecture continentale.</em>'
            >
                Nous concentrons notre action sur des secteurs structurants pour la souveraineté économique africaine.
            </x-section-heading>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 auto-rows-[320px]">
            @foreach ($sectors as $s)
                <x-sector-tile :name="$s['name']" :desc="$s['desc']" :span="$s['span']" />
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================ VISION / VALEURS --}}
<section class="relative py-32 md:py-48 bg-espresso text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-soot via-espresso to-mahogany"></div>
    <div class="absolute inset-0 bg-grain opacity-60 mix-blend-overlay"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[900px] h-[900px] rounded-full bg-gold/10 blur-[160px] pointer-events-none"></div>

    <div class="container relative">
        <div class="max-w-5xl reveal">
            <span class="text-eyebrow uppercase text-gold/80">04 — Vision & valeurs</span>
            <p class="mt-10 font-display text-[clamp(2rem,4.5vw,4rem)] leading-[1.1] tracking-tightest">
                <span class="text-gold">«</span> Faire émerger de nouveaux champions nationaux et régionaux, en assurant à chaque projet la rigueur d’un conseil <em class="italic">indépendant</em> et la précision d’une banque d’affaires. <span class="text-gold">»</span>
            </p>
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-16 border-t border-white/15 pt-16">
            @foreach (['Indépendance' => 'Un conseil libre de tout conflit, au seul service de l’intérêt du client.',
                       'Professionnalisme' => 'Une exécution aux standards internationaux, rigoureuse et confidentielle.',
                       'Rigueur' => 'Une méthode d’analyse sans concession, fondée sur la donnée et le terrain.'] as $k => $v)
                <div class="reveal">
                    <span class="font-display text-5xl text-gold/70 block mb-5">0{{ $loop->iteration }}</span>
                    <h3 class="font-display text-2xl md:text-3xl text-bone mb-4">{{ $k }}</h3>
                    <p class="text-ivory/75 leading-relaxed">{{ $v }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================ ÉQUIPE PREVIEW --}}
<section class="py-28 md:py-40 bg-bone">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-20">
            <div class="lg:col-span-6">
                <x-section-heading
                    eyebrow="05 — Équipe"
                    title='Une direction de <em class="italic text-bronze font-normal">banque d’affaires</em>.'
                >
                    Des dirigeants expérimentés, capables d’articuler les exigences internationales à la réalité des marchés africains.
                </x-section-heading>
            </div>
            <div class="lg:col-span-6 lg:flex lg:items-end lg:justify-end">
                <a href="{{ route('team') }}" class="reveal group inline-flex items-center gap-3 text-ink border-b border-ink/30 pb-2 hover:border-gold transition-colors">
                    <span class="text-sm tracking-wide">Découvrir toute l’équipe</span>
                    <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16">
            @foreach ($team as $m)
                <x-team-card :name="$m['name']" :role="$m['role']" :bio="$m['bio']" />
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================ PUBLICATIONS --}}
<section class="py-28 md:py-40 bg-bone border-t border-ink/10">
    <div class="container">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-12 mb-20">
            <x-section-heading
                eyebrow="06 — Publications"
                title='Notre lecture du <em class="italic text-bronze font-normal">continent.</em>'
            >
                Notes sectorielles, insights marché et tribunes — notre regard sur l’investissement en Afrique.
            </x-section-heading>

            <a href="{{ route('publications') }}" class="reveal group inline-flex items-center gap-3 text-ink border-b border-ink/30 pb-2 hover:border-gold transition-colors w-fit">
                <span class="text-sm tracking-wide">Toutes les publications</span>
                <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">
            @foreach ($pubs as $p)
                <x-pub-card :date="$p['date']" :tag="$p['tag']" :title="$p['title']" />
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================ CTA --}}
<section class="relative py-32 md:py-48 bg-ink text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ink via-espresso to-soot"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="absolute -right-40 top-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full bg-gold/15 blur-[160px]"></div>

    <div class="container relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-end">
            <div class="lg:col-span-8 reveal">
                <span class="text-eyebrow uppercase text-gold/80">07 — Initier une conversation</span>
                <h2 class="mt-8 font-display text-display-lg tracking-tightest leading-[1.02]">
                    Parlons de votre <em class="italic text-gold">projet.</em>
                </h2>
                <p class="mt-8 max-w-xl text-lg text-ivory/75 leading-relaxed">
                    Un échange confidentiel, sans engagement, pour évaluer comment ARIES peut vous accompagner.
                </p>
            </div>

            <div class="lg:col-span-4 reveal flex lg:justify-end">
                <x-cta-button :href="route('contact')">Prendre rendez-vous</x-cta-button>
            </div>
        </div>

        <div class="mt-20 pt-12 border-t border-white/15 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
            <div>
                <p class="text-eyebrow uppercase text-gold/70 mb-3">Brazzaville</p>
                <p class="text-bone">+242 06 97 99 88 5</p>
            </div>
            <div>
                <p class="text-eyebrow uppercase text-gold/70 mb-3">Washington</p>
                <p class="text-bone">+1 646 389 14 37</p>
            </div>
            <div>
                <p class="text-eyebrow uppercase text-gold/70 mb-3">Email</p>
                <a href="mailto:aries@aries-investissements.com" class="text-bone hover:text-gold transition">aries@aries-investissements.com</a>
            </div>
        </div>
    </div>
</section>

@endsection
