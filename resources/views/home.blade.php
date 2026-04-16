@extends('layouts.app')

@section('title', 'ARIES Investissements — Faire émerger les nouveaux champions africains')

@section('content')

<section class="relative min-h-[100svh] overflow-hidden bg-ink text-bone">
    <div class="absolute inset-0">
        <img
            src="{{ asset('assets/img/home/building-mission.jpg') }}"
            alt="Tour dans la brume"
            class="h-full w-full object-cover object-center"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(19,12,5,0.92)_0%,rgba(19,12,5,0.78)_42%,rgba(19,12,5,0.46)_100%)]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/40 to-ink/10"></div>
        <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    </div>

    <div class="container relative flex min-h-[100svh] flex-col justify-end pb-10 pt-32 md:pb-14 md:pt-36">
        <div class="grid gap-12 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <p class="reveal text-eyebrow uppercase text-gold/80">Conseil financier · Banque d’affaires · Afrique</p>
                <h1 class="reveal mt-8 max-w-6xl font-display text-display-xl text-balance">
                    Faire émerger les nouveaux champions africains.
                </h1>
                <p class="reveal mt-8 max-w-2xl text-lg leading-relaxed text-ivory/78 md:text-xl">
                    ARIES Investissements accompagne dirigeants, investisseurs et porteurs de projets dans leurs décisions stratégiques, leurs opérations de financement et leurs ambitions de croissance sur le continent africain.
                </p>
                <div class="reveal mt-10 flex flex-col gap-4 sm:flex-row">
                    <x-cta-button :href="route('presentation')">Découvrir ARIES</x-cta-button>
                    <x-cta-button :href="route('contact')" variant="ghost-light">Parler à un associé</x-cta-button>
                </div>
            </div>

            <div class="reveal lg:col-span-4 lg:pl-10">
                <div class="border-l border-white/15 pl-6">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Mission</p>
                    <p class="mt-4 font-display text-3xl leading-[1.05] text-bone">
                        Faire émerger de nouveaux champions nationaux et régionaux.
                    </p>
                    <div class="mt-8 space-y-4 text-sm text-ivory/72">
                        <p>Brazzaville · Washington</p>
                        <p>Conseil stratégique, structuration, financement, intelligence économique.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="reveal mt-16 grid gap-px border-t border-white/10 bg-white/10 md:grid-cols-3">
            <div class="bg-black/20 px-5 py-5 backdrop-blur-sm">
                <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Ancrage</p>
                <p class="mt-2 text-sm text-bone">République du Congo, portée panafricaine</p>
            </div>
            <div class="bg-black/20 px-5 py-5 backdrop-blur-sm">
                <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Positionnement</p>
                <p class="mt-2 text-sm text-bone">Conseil financier à vocation de banque d’affaires</p>
            </div>
            <div class="bg-black/20 px-5 py-5 backdrop-blur-sm">
                <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Promesse</p>
                <p class="mt-2 text-sm text-bone">Vision locale, standards internationaux</p>
            </div>
        </div>
    </div>
</section>

<section class="section-shell bg-bone py-24 md:py-32">
    <div class="container">
        <div class="mb-14 max-w-4xl">
            <span class="reveal text-eyebrow uppercase text-bronze">01 — Positionnement</span>
            <h2 class="reveal mt-6 font-display text-display-lg text-balance text-ink">
                Une maison de conseil pensée pour lire les marchés africains avec précision et accompagner les décisions d’investissement à haut niveau.
            </h2>
        </div>

        <div class="grid gap-5 lg:grid-cols-3">
            <article class="reveal border border-ink/10 bg-parchment px-6 py-7">
                <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Maîtrise de l’environnement</p>
                <p class="mt-5 text-lg leading-relaxed text-ink/78">
                    Une compréhension fine des cadres locaux, des rapports d’acteurs et des équilibres sectoriels.
                </p>
            </article>
            <article class="reveal border border-ink/10 bg-white px-6 py-7">
                <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Lecture stratégique</p>
                <p class="mt-5 text-lg leading-relaxed text-ink/78">
                    Des recommandations claires pour arbitrer, structurer, financer et sécuriser les projets.
                </p>
            </article>
            <article class="reveal border border-ink/10 bg-parchment px-6 py-7">
                <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Exécution rigoureuse</p>
                <p class="mt-5 text-lg leading-relaxed text-ink/78">
                    Une discipline d’exécution sobre, documentée et alignée avec les standards des opérations corporate.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="section-shell bg-bone py-24 md:py-32">
    <div class="container grid gap-14 lg:grid-cols-12 lg:items-start">
        <div class="reveal lg:col-span-5">
            <img
                src="{{ asset('assets/img/home/pont-vision.jpg') }}"
                alt="Pont architectural"
                class="h-[28rem] w-full object-cover"
            >
        </div>
        <div class="lg:col-span-7 lg:pl-8">
            <span class="reveal text-eyebrow uppercase text-bronze">02 — Présentation</span>
            <h2 class="reveal mt-6 font-display text-display-md text-balance text-ink">
                ARIES Investissements accompagne les investisseurs et porteurs de projets en Afrique, du cadrage stratégique à la levée de dette et de fonds propres.
            </h2>
            <div class="reveal mt-8 grid gap-7 text-base leading-relaxed text-ink/74 md:grid-cols-2 md:text-lg">
                <p>
                    Notre rôle consiste à apporter la profondeur d’analyse, la rigueur financière et la connaissance des écosystèmes nécessaires à la réussite des projets d’investissement.
                </p>
                <p>
                    Nous nous positionnons à l’intersection du conseil stratégique, du conseil financier, de l’intelligence économique et du conseil en investissement.
                </p>
            </div>
            <div class="reveal mt-10">
                <a href="{{ route('presentation') }}" class="group inline-flex items-center gap-3 border-b border-ink/25 pb-2 text-sm text-ink transition-colors hover:border-gold">
                    Lire la présentation
                    <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-shell bg-ink py-24 text-bone md:py-32">
    <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay pointer-events-none"></div>
    <div class="container relative">
        <div class="mb-14 grid gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <x-section-heading
                    eyebrow="03 — Expertise"
                    title='Quatre expertises pour structurer les décisions, sécuriser les opérations et accélérer les trajectoires de croissance.'
                    :dark="true"
                >
                    Une offre resserrée autour des moments décisifs d’un projet d’investissement.
                </x-section-heading>
            </div>
            <div class="reveal lg:col-span-4 lg:justify-self-end">
                <img
                    src="{{ asset('assets/img/home/sc-4-clic.jpg') }}"
                    alt="Signal lumineux"
                    class="h-20 w-20 object-cover"
                >
            </div>
        </div>

        <div class="grid gap-px border border-white/8 bg-white/8 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($expertises as $e)
                <x-expertise-card :num="$e['num']" :title="$e['title']" :text="$e['text']" />
            @endforeach
        </div>
    </div>
</section>

<section class="section-shell bg-bone py-24 md:py-32">
    <div class="container">
        <div class="mb-16 grid gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <x-section-heading
                    eyebrow="04 — Secteurs d’activité"
                    title='Des secteurs structurants pour la transformation économique et la souveraineté du continent.'
                >
                    Infrastructures, immobilier, agrobusiness et technologie forment le coeur des marchés sur lesquels nous concentrons notre action.
                </x-section-heading>
            </div>
            <div class="lg:col-span-5 lg:pl-8">
                <div class="reveal border border-ink/10 bg-parchment p-5 md:p-6">
                    <img
                        src="{{ asset('assets/img/home/pont-vision.jpg') }}"
                        alt="Vision d’infrastructure"
                        class="h-48 w-full object-cover md:h-56"
                    >
                    <div class="mt-5 flex items-start justify-between gap-6">
                        <div>
                            <p class="text-[11px] uppercase tracking-[0.22em] text-bronze">Lecture de marché</p>
                            <p class="mt-3 text-sm leading-relaxed text-ink/72">
                                Nous intervenons sur les secteurs qui structurent durablement les économies africaines et concentrent les besoins en conseil stratégique, financement et exécution.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-5 lg:grid-cols-12">
            @foreach ($sectors as $s)
                <x-sector-tile :number="sprintf('%02d', $loop->iteration)" :name="$s['name']" :desc="$s['desc']" :span="$s['span']" />
            @endforeach
        </div>
    </div>
</section>

<section class="section-shell relative overflow-hidden bg-[#100a05] py-24 text-bone md:py-32">
    <div class="absolute inset-0">
        <img
            src="{{ asset('assets/img/home/lion-ambition.jpg') }}"
            alt="Lion symbolisant l’ambition"
            class="h-full w-full object-cover object-center opacity-24"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(16,10,5,0.94)_0%,rgba(16,10,5,0.78)_48%,rgba(16,10,5,0.9)_100%)]"></div>
        <div class="absolute inset-0 bg-grain opacity-45 mix-blend-overlay"></div>
    </div>

    <div class="container relative grid gap-14 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-7">
            <span class="reveal text-eyebrow uppercase text-gold/80">05 — Vision & valeurs</span>
            <p class="reveal mt-7 max-w-4xl font-display text-display-md leading-[1.04] text-balance">
                Faire émerger de nouveaux champions nationaux et régionaux, avec l’indépendance du conseil, le professionnalisme de l’exécution et la rigueur de l’analyse.
            </p>
        </div>
        <div class="lg:col-span-5">
            <div class="reveal grid gap-px border border-white/10 bg-white/10">
                @foreach ([
                    'Indépendance' => 'Un conseil libre de tout conflit, orienté exclusivement vers l’intérêt du client.',
                    'Professionnalisme' => 'Une posture institutionnelle, confidentielle et exigeante à chaque étape.',
                    'Rigueur' => 'Des raisonnements solides, des arbitrages explicites et une vraie discipline analytique.',
                ] as $k => $v)
                    <div class="bg-black/25 px-6 py-6 backdrop-blur-sm">
                        <p class="text-[11px] uppercase tracking-[0.22em] text-gold/70">0{{ $loop->iteration }}</p>
                        <h3 class="mt-3 font-display text-3xl text-bone">{{ $k }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-ivory/72">{{ $v }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section-shell bg-bone py-24 md:py-32">
    <div class="container">
        <div class="mb-14 grid gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <x-section-heading
                    eyebrow="06 — Direction"
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

        <div class="grid gap-12 md:grid-cols-2 md:gap-16">
            @foreach ($team as $m)
                <x-team-card :name="$m['name']" :role="$m['role']" :bio="$m['bio']" :photo="$m['photo'] ?? null" />
            @endforeach
        </div>
    </div>
</section>

<section class="section-shell bg-parchment py-24 md:py-32">
    <div class="container">
        <div class="mb-14 flex flex-col gap-10 lg:flex-row lg:items-end lg:justify-between">
            <x-section-heading
                eyebrow="07 — Publications"
                title='Analyses, notes sectorielles et prises de position sur les dynamiques d’investissement en Afrique.'
            >
                Un espace éditorial destiné à partager nos lectures de marché et nos convictions.
            </x-section-heading>
            <a href="{{ route('publications') }}" class="reveal group inline-flex w-fit items-center gap-3 border-b border-ink/25 pb-2 text-sm text-ink transition-colors hover:border-gold">
                Toutes les publications
                <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </a>
        </div>

        <div class="grid gap-10 md:grid-cols-3 md:gap-12">
            @foreach ($pubs as $p)
                <x-pub-card :date="$p['date']" :tag="$p['tag']" :title="$p['title']" />
            @endforeach
        </div>
    </div>
</section>

<section class="section-shell bg-ink py-24 text-bone md:py-32">
    <div class="container grid gap-14 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-7">
            <span class="reveal text-eyebrow uppercase text-gold/80">08 — Contact</span>
            <h2 class="reveal mt-6 font-display text-display-lg text-balance">
                Ouvrons une conversation confidentielle autour de votre projet.
            </h2>
            <p class="reveal mt-7 max-w-2xl text-lg leading-relaxed text-ivory/76">
                Nous échangeons avec les dirigeants, investisseurs et porteurs de projets qui recherchent un interlocuteur stratégique pour structurer, financer ou sécuriser une opération en Afrique.
            </p>
            <div class="reveal mt-10">
                <x-cta-button :href="route('contact')">Prendre contact</x-cta-button>
            </div>
        </div>

        <div class="lg:col-span-5">
            <div class="reveal grid gap-px border border-white/10 bg-white/10">
                <div class="bg-white/5 px-6 py-5">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Brazzaville</p>
                    <p class="mt-2 text-bone">+242 06 97 99 88 5</p>
                </div>
                <div class="bg-white/5 px-6 py-5">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Washington</p>
                    <p class="mt-2 text-bone">+1 646 389 14 37</p>
                </div>
                <div class="bg-white/5 px-6 py-5">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-gold/72">Adresse</p>
                    <p class="mt-2 leading-relaxed text-ivory/76">9ème niveau, Immeuble ARC, Brazzaville, République du Congo</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
