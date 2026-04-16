@extends('layouts.app')

@section('title', 'ARIES Investissements — Faire émerger les nouveaux champions africains')

@section('content')
@php
    $signals = [
        ['label' => 'Mandats prioritaires', 'value' => 4, 'suffix' => '', 'note' => 'Secteurs cibles structurants'],
        ['label' => 'Places d’ancrage', 'value' => 2, 'suffix' => '', 'note' => 'Brazzaville · Washington'],
        ['label' => 'Précision', 'value' => 100, 'suffix' => '%', 'note' => 'Exécution orientée dirigeants'],
    ];

    $marquee = [
        'Conseil stratégique',
        'Structuration financière',
        'Levée de dette et fonds propres',
        'Intelligence économique',
        'Afrique centrale',
        'Vision panafricaine',
    ];

    $values = [
        ['title' => 'Indépendance', 'text' => 'Un conseil libre de tout conflit, pensé pour défendre l’intérêt stratégique du client.'],
        ['title' => 'Professionnalisme', 'text' => 'Une exécution institutionnelle, rigoureuse et confidentielle du cadrage à la finalisation.'],
        ['title' => 'Rigueur', 'text' => 'Des analyses solides, des arbitrages explicites et une discipline financière sans approximation.'],
    ];
@endphp

<section class="relative overflow-hidden bg-ink text-bone">
    <div class="absolute inset-0">
        <img
            src="{{ asset('assets/img/home/building-mission.jpg') }}"
            alt="Tour dans la brume"
            class="h-full w-full object-cover object-center"
        >
        <div class="absolute inset-0 bg-[linear-gradient(110deg,rgba(8,6,4,0.94)_0%,rgba(8,6,4,0.8)_40%,rgba(8,6,4,0.35)_100%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_78%_22%,rgba(238,153,40,0.14),transparent_24%),linear-gradient(to_bottom,rgba(8,6,4,0.1),rgba(8,6,4,0.55))]"></div>
        <div class="absolute inset-0 bg-home-grid opacity-35"></div>
        <div class="absolute inset-0 bg-grain opacity-55 mix-blend-overlay"></div>
    </div>

    <div class="container relative pb-14 pt-14 sm:pt-16 md:pb-20 md:pt-20">
        <div class="grid gap-10 lg:grid-cols-12 lg:gap-14 xl:gap-16">
            <div class="lg:col-span-7 xl:col-span-8">
                <div class="reveal inline-flex items-center gap-3 border border-white/10 bg-white/5 px-4 py-2 text-[11px] uppercase tracking-[0.24em] text-gold/82 backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-gold"></span>
                    Conseil financier · Banque d’affaires · Afrique
                </div>

                <h1 class="reveal mt-7 max-w-6xl font-display text-[clamp(3rem,9vw,8.2rem)] leading-[0.88] tracking-[-0.05em] text-balance">
                    Une intelligence financière pour les projets qui déplacent les lignes.
                </h1>

                <p class="reveal mt-7 max-w-3xl text-base leading-relaxed text-ivory/78 sm:text-lg md:text-[1.3rem]">
                    ARIES Investissements accompagne dirigeants, investisseurs et porteurs de projets dans leurs décisions stratégiques, leurs financements structurants et leurs opérations à fort enjeu sur le continent africain.
                </p>

                <div class="reveal mt-8 flex flex-col gap-3 sm:flex-row sm:gap-4">
                    <x-cta-button :href="route('presentation')">Découvrir notre approche</x-cta-button>
                    <x-cta-button :href="route('contact')" variant="ghost-light">Initier un échange confidentiel</x-cta-button>
                </div>

                <div class="reveal mt-10 grid gap-3 sm:grid-cols-3 sm:gap-px">
                    @foreach ($signals as $signal)
                        <div class="border border-white/10 bg-black/25 px-4 py-4 backdrop-blur-sm sm:border-white/8 sm:bg-white/5 sm:px-5 sm:py-5">
                            <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">{{ $signal['label'] }}</p>
                            <p class="mt-3 font-display text-[2.2rem] leading-none text-bone sm:text-[2.6rem]" data-countup="{{ $signal['value'] }}">
                                0{{ $signal['suffix'] }}
                            </p>
                            <p class="mt-2 text-sm leading-relaxed text-ivory/65">{{ $signal['note'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="lg:col-span-5 xl:col-span-4">
                <div class="relative mx-auto max-w-[32rem] lg:mx-0">
                    <div class="reveal finance-card-stack relative min-h-[32rem] sm:min-h-[36rem]">
                        <div class="finance-card finance-card--primary" data-parallax data-parallax-speed="0.04">
                            <div class="flex items-start justify-between">
                                <span class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Mission</span>
                                <span class="rounded-full border border-white/10 px-3 py-1 text-[10px] uppercase tracking-[0.22em] text-ivory/60">ARIES</span>
                            </div>
                            <p class="mt-6 max-w-xs font-display text-[2.3rem] leading-[1.02] text-bone sm:text-[2.8rem]">
                                Faire émerger de nouveaux champions nationaux et régionaux.
                            </p>
                            <div class="mt-10 grid gap-px border border-white/10 bg-white/10">
                                <div class="flex items-center justify-between bg-black/20 px-4 py-4">
                                    <span class="text-[11px] uppercase tracking-[0.2em] text-ivory/48">Ancrage</span>
                                    <span class="text-sm text-bone">Brazzaville</span>
                                </div>
                                <div class="flex items-center justify-between bg-black/20 px-4 py-4">
                                    <span class="text-[11px] uppercase tracking-[0.2em] text-ivory/48">Connexion</span>
                                    <span class="text-sm text-bone">Washington</span>
                                </div>
                            </div>
                        </div>

                        <div class="finance-card finance-card--image" data-parallax data-parallax-speed="0.07">
                            <img
                                src="{{ asset('assets/img/home/lion-ambition.jpg') }}"
                                alt="Lion symbolisant l’ambition"
                                class="h-full w-full object-cover"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                            <div class="absolute bottom-5 left-5 right-5">
                                <p class="text-[11px] uppercase tracking-[0.22em] text-gold/78">Vision panafricaine</p>
                                <p class="mt-2 text-sm leading-relaxed text-ivory/78">Des décisions calibrées pour la souveraineté économique, les infrastructures critiques et la croissance à long terme.</p>
                            </div>
                        </div>

                        <div class="finance-card finance-card--ticker" data-parallax data-parallax-speed="0.02">
                            <div class="flex items-center justify-between">
                                <span class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Code finance</span>
                                <span class="text-[11px] uppercase tracking-[0.22em] text-ivory/48">Live</span>
                            </div>
                            <div class="mt-5 space-y-3 text-sm text-ivory/74">
                                <div class="flex items-center justify-between border-b border-white/8 pb-3">
                                    <span>Conseil stratégique</span>
                                    <span class="text-gold">01</span>
                                </div>
                                <div class="flex items-center justify-between border-b border-white/8 pb-3">
                                    <span>Levée de fonds</span>
                                    <span class="text-gold">02</span>
                                </div>
                                <div class="flex items-center justify-between border-b border-white/8 pb-3">
                                    <span>Structuration</span>
                                    <span class="text-gold">03</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span>Intelligence économique</span>
                                    <span class="text-gold">04</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative border-y border-white/10 bg-black/35 py-4 backdrop-blur-sm">
        <div class="ticker-shell">
            <div class="ticker-track">
                @foreach (array_merge($marquee, $marquee) as $item)
                    <span class="ticker-item">{{ $item }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section-shell bg-bone py-20 md:py-32">
    <div class="container grid gap-12 lg:grid-cols-12 lg:items-start lg:gap-14">
        <div class="lg:col-span-5">
            <div class="reveal border border-ink/10 bg-parchment p-6 sm:p-7">
                <span class="text-[11px] uppercase tracking-[0.22em] text-bronze">Positionnement</span>
                <p class="mt-5 font-display text-[clamp(2rem,5vw,4rem)] leading-[1.02] tracking-tightest text-ink">
                    Une maison de conseil conçue pour lire les marchés africains avec acuité et sécuriser les décisions d’investissement.
                </p>
            </div>
        </div>

        <div class="lg:col-span-7">
            <div class="grid gap-px border border-ink/10 bg-ink/10">
                <article class="reveal bg-white px-5 py-6 sm:px-7 sm:py-8">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Maîtrise de l’environnement</p>
                    <p class="mt-4 text-base leading-relaxed text-ink/74 sm:text-lg">Une compréhension fine des cadres locaux, des rapports d’acteurs, des risques d’exécution et des dynamiques sectorielles.</p>
                </article>
                <article class="reveal bg-parchment px-5 py-6 sm:px-7 sm:py-8">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Lecture stratégique</p>
                    <p class="mt-4 text-base leading-relaxed text-ink/74 sm:text-lg">Des recommandations claires pour arbitrer, structurer, financer et positionner les projets dans leur séquence de croissance.</p>
                </article>
                <article class="reveal bg-white px-5 py-6 sm:px-7 sm:py-8">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Exécution rigoureuse</p>
                    <p class="mt-4 text-base leading-relaxed text-ink/74 sm:text-lg">Une discipline de banque d’affaires, sobre et documentée, pensée pour les dirigeants et les opérations à forte intensité stratégique.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section-shell bg-bone pb-20 md:pb-32">
    <div class="container grid gap-10 lg:grid-cols-12 lg:items-center lg:gap-14">
        <div class="lg:col-span-5">
            <div class="reveal relative overflow-hidden border border-ink/10 bg-ink">
                <img
                    src="{{ asset('assets/img/home/pont-vision.jpg') }}"
                    alt="Pont architectural"
                    class="h-72 w-full object-cover sm:h-80 lg:h-[34rem]"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 border-t border-white/10 bg-black/25 px-5 py-4 backdrop-blur-sm sm:px-6">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-gold/75">Architecture de décision</p>
                    <p class="mt-2 text-sm leading-relaxed text-ivory/76">Des ponts entre stratégie, financement, structuration et exécution.</p>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7 lg:pl-6">
            <div class="reveal inline-flex items-center gap-3 border border-ink/10 bg-parchment px-4 py-2 text-[11px] uppercase tracking-[0.22em] text-bronze">
                <span class="h-1.5 w-1.5 rounded-full bg-gold"></span>
                Présentation
            </div>
            <h2 class="reveal mt-6 font-display text-[clamp(2.3rem,5vw,4.6rem)] leading-[1] tracking-tightest text-ink">
                ARIES Investissements accompagne les investisseurs et porteurs de projets en Afrique, du cadrage stratégique à la levée de dette et de fonds propres.
            </h2>
            <div class="reveal mt-7 grid gap-6 text-[15px] leading-relaxed text-ink/74 sm:text-base md:grid-cols-2 md:gap-8 md:text-lg">
                <p>Notre rôle consiste à apporter la profondeur d’analyse, la rigueur financière et la connaissance des écosystèmes nécessaires à la réussite des projets d’investissement.</p>
                <p>Nous nous positionnons à l’intersection du conseil stratégique, du conseil financier, de l’intelligence économique et du conseil en investissement.</p>
            </div>
            <div class="reveal mt-8">
                <a href="{{ route('presentation') }}" class="group inline-flex items-center gap-3 border-b border-ink/25 pb-2 text-sm text-ink transition-colors hover:border-gold">
                    Lire la présentation
                    <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-shell relative overflow-hidden bg-black text-bone">
    <div class="absolute inset-0 bg-home-grid opacity-25"></div>
    <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay"></div>
    <div class="container relative py-20 md:py-32">
        <div class="mb-12 grid gap-8 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <x-section-heading
                    eyebrow="Expertise"
                    title='Quatre expertises pour structurer les décisions, sécuriser les opérations et accélérer les trajectoires de croissance.'
                    :dark="true"
                >
                    Une offre resserrée autour des moments décisifs d’un projet d’investissement.
                </x-section-heading>
            </div>
            <div class="lg:col-span-4">
                <div class="reveal border border-white/10 bg-white/5 p-5 backdrop-blur-sm">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Tableau de bord</p>
                    <p class="mt-4 text-sm leading-relaxed text-ivory/72">Stratégie, financement, intelligence économique et structuration sont pilotés comme un système cohérent.</p>
                </div>
            </div>
        </div>

        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($expertises as $e)
                <x-expertise-card :num="$e['num']" :title="$e['title']" :text="$e['text']" />
            @endforeach
        </div>
    </div>
</section>

<section class="section-shell bg-bone py-20 md:py-32">
    <div class="container grid gap-10 lg:grid-cols-12 lg:items-start lg:gap-12">
        <div class="lg:col-span-5">
            <div class="reveal border border-ink/10 bg-parchment p-6 sm:p-7 lg:sticky lg:top-6">
                <span class="text-[11px] uppercase tracking-[0.22em] text-bronze">Secteurs d’activité</span>
                <h2 class="mt-5 font-display text-[clamp(2.2rem,5vw,4.3rem)] leading-[1.02] tracking-tightest text-ink">
                    Des secteurs structurants pour la transformation économique du continent.
                </h2>
                <p class="mt-5 text-[15px] leading-relaxed text-ink/72 sm:text-base">
                    Infrastructures, immobilier, agrobusiness et technologie forment le coeur des marchés sur lesquels nous concentrons notre action.
                </p>
                <div class="mt-7 grid gap-3">
                    <div class="border border-ink/10 bg-white px-4 py-4">
                        <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Couverture</p>
                        <p class="mt-3 text-sm leading-relaxed text-ink/72">Des marchés qui concentrent les besoins en financement, exécution, structuration et gouvernance.</p>
                    </div>
                    <div class="border border-ink/10 bg-white px-4 py-4">
                        <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Logique d’intervention</p>
                        <p class="mt-3 text-sm leading-relaxed text-ink/72">Une lecture combinée du marché, du capital, des acteurs et des séquences de croissance.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7">
            <div class="grid gap-4 sm:gap-5 md:grid-cols-2">
                @foreach ($sectors as $s)
                    <x-sector-tile :number="sprintf('%02d', $loop->iteration)" :name="$s['name']" :desc="$s['desc']" :span="$s['span']" />
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section-shell relative overflow-hidden bg-[#0d0804] text-bone">
    <div class="absolute inset-0">
        <img
            src="{{ asset('assets/img/home/lion-ambition.jpg') }}"
            alt="Lion symbolisant l’ambition"
            class="h-full w-full object-cover object-center opacity-20"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(13,8,4,0.96)_0%,rgba(13,8,4,0.82)_48%,rgba(13,8,4,0.9)_100%)]"></div>
        <div class="absolute inset-0 bg-home-grid opacity-15"></div>
        <div class="absolute inset-0 bg-grain opacity-45 mix-blend-overlay"></div>
    </div>

    <div class="container relative py-20 md:py-32">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-start lg:gap-12">
            <div class="lg:col-span-7">
                <span class="reveal text-[11px] uppercase tracking-[0.22em] text-gold/80">Vision & valeurs</span>
                <p class="reveal mt-6 max-w-5xl font-display text-[clamp(2.3rem,5.2vw,4.7rem)] leading-[1.02] tracking-tightest text-balance">
                    Faire émerger de nouveaux champions nationaux et régionaux, avec l’indépendance du conseil, le professionnalisme de l’exécution et la rigueur de l’analyse.
                </p>
            </div>

            <div class="lg:col-span-5">
                <div class="grid gap-px border border-white/10 bg-white/10">
                    @foreach ($values as $value)
                        <div class="reveal bg-black/25 px-5 py-5 backdrop-blur-sm sm:px-6 sm:py-6">
                            <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">0{{ $loop->iteration }}</p>
                            <h3 class="mt-3 font-display text-[2rem] text-bone sm:text-[2.25rem]">{{ $value['title'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-ivory/72">{{ $value['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-shell bg-bone py-20 md:py-32">
    <div class="container">
        <div class="mb-12 grid gap-8 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <x-section-heading
                    eyebrow="Direction"
                    title='Une équipe restreinte, accessible et engagée sur chaque dossier.'
                >
                    Une direction de banque d’affaires capable d’articuler standards internationaux et lecture fine des réalités africaines.
                </x-section-heading>
            </div>
            <div class="lg:col-span-5 lg:flex lg:justify-end">
                <a href="{{ route('team') }}" class="reveal group inline-flex items-center gap-3 border-b border-ink/25 pb-2 text-sm text-ink transition-colors hover:border-gold">
                    Voir l’équipe
                    <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>

        <div class="grid gap-10 md:grid-cols-2 md:gap-16">
            @foreach ($team as $m)
                <x-team-card :name="$m['name']" :role="$m['role']" :bio="$m['bio']" :photo="$m['photo'] ?? null" />
            @endforeach
        </div>
    </div>
</section>

<section class="section-shell bg-parchment py-20 md:py-32">
    <div class="container">
        <div class="mb-12 flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
            <x-section-heading
                eyebrow="Publications"
                title='Analyses, notes sectorielles et prises de position sur les dynamiques d’investissement en Afrique.'
            >
                Un espace éditorial destiné à partager nos lectures de marché et nos convictions.
            </x-section-heading>
            <a href="{{ route('publications') }}" class="reveal group inline-flex w-fit items-center gap-3 border-b border-ink/25 pb-2 text-sm text-ink transition-colors hover:border-gold">
                Toutes les publications
                <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </a>
        </div>

        <div class="grid gap-8 md:grid-cols-3 md:gap-12">
            @foreach ($pubs as $p)
                <x-pub-card :date="$p['date']" :tag="$p['tag']" :title="$p['title']" />
            @endforeach
        </div>
    </div>
</section>

<section class="section-shell relative overflow-hidden bg-black text-bone">
    <div class="absolute inset-0 bg-home-grid opacity-20"></div>
    <div class="absolute inset-0 bg-grain opacity-45 mix-blend-overlay"></div>
    <div class="container relative py-20 md:py-32">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-end lg:gap-14">
            <div class="lg:col-span-7">
                <span class="reveal text-[11px] uppercase tracking-[0.22em] text-gold/80">Contact</span>
                <h2 class="reveal mt-6 font-display text-[clamp(2.4rem,5.5vw,5.5rem)] leading-[0.96] tracking-tightest text-balance">
                    Ouvrons une conversation confidentielle autour de votre projet.
                </h2>
                <p class="reveal mt-6 max-w-3xl text-[15px] leading-relaxed text-ivory/76 sm:text-lg">
                    Nous échangeons avec les dirigeants, investisseurs et porteurs de projets qui recherchent un interlocuteur stratégique pour structurer, financer ou sécuriser une opération en Afrique.
                </p>
                <div class="reveal mt-8">
                    <x-cta-button :href="route('contact')">Prendre contact</x-cta-button>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="reveal grid gap-px border border-white/10 bg-white/10">
                    <div class="bg-white/5 px-5 py-4 sm:px-6 sm:py-5">
                        <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Brazzaville</p>
                        <p class="mt-2 text-bone">+242 06 97 99 88 5</p>
                    </div>
                    <div class="bg-white/5 px-5 py-4 sm:px-6 sm:py-5">
                        <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Washington</p>
                        <p class="mt-2 text-bone">+1 646 389 14 37</p>
                    </div>
                    <div class="bg-white/5 px-5 py-4 sm:px-6 sm:py-5">
                        <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Adresse</p>
                        <p class="mt-2 leading-relaxed text-ivory/76">9ème niveau, Immeuble ARC, Brazzaville, République du Congo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
