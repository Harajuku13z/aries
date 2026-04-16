@extends('layouts.app')

@section('title', 'ARIES Investissements — Faire émerger les nouveaux champions africains')

@section('content')

<section class="relative isolate min-h-[100svh] overflow-hidden bg-ink text-bone">
    <div class="absolute inset-0">
        <img
            src="{{ asset('assets/img/home/building-mission.jpg') }}"
            alt="Tour émergeant dans la brume"
            class="h-full w-full object-cover object-center"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(19,12,5,0.94)_0%,rgba(19,12,5,0.8)_42%,rgba(19,12,5,0.42)_100%)]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/30 to-ink/25"></div>
        <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
        <div class="absolute -right-24 top-24 h-[26rem] w-[26rem] rounded-full bg-gold/18 blur-[160px]"></div>
    </div>

    <div class="container relative flex min-h-[100svh] items-end pb-12 pt-36 md:pb-16 md:pt-40">
        <div class="grid w-full gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="reveal text-eyebrow uppercase text-gold/80">
                    Conseil financier · Banque d’affaires · Afrique
                </p>

                <h1 class="reveal mt-8 max-w-5xl font-display text-display-xl tracking-tightest">
                    Faire émerger les nouveaux <span class="italic text-gold">champions</span> africains.
                </h1>

                <p class="reveal mt-8 max-w-2xl text-lg leading-relaxed text-ivory/82 md:text-xl">
                    ARIES Investissements accompagne investisseurs, groupes et dirigeants dans leurs opérations stratégiques en Afrique avec une lecture locale précise et une exécution de banque d’affaires.
                </p>

                <div class="reveal mt-10 flex flex-col gap-4 sm:flex-row">
                    <x-cta-button :href="route('presentation')">Découvrir notre approche</x-cta-button>
                    <x-cta-button :href="route('contact')" variant="ghost-light">Nous contacter</x-cta-button>
                </div>

                <div class="reveal mt-12 grid max-w-2xl gap-4 sm:grid-cols-3">
                    <div class="rounded-[1.5rem] border border-white/10 bg-white/6 px-5 py-4 backdrop-blur-sm">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-gold/70">Ancrage</p>
                        <p class="mt-2 text-sm text-bone">Brazzaville</p>
                    </div>
                    <div class="rounded-[1.5rem] border border-white/10 bg-white/6 px-5 py-4 backdrop-blur-sm">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-gold/70">Connexion</p>
                        <p class="mt-2 text-sm text-bone">Washington</p>
                    </div>
                    <div class="rounded-[1.5rem] border border-white/10 bg-white/6 px-5 py-4 backdrop-blur-sm">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-gold/70">Rayon d’action</p>
                        <p class="mt-2 text-sm text-bone">Focus continental</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 lg:pl-8">
                <div class="reveal mx-auto max-w-md lg:mr-0">
                    <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/8 shadow-[0_24px_70px_rgba(0,0,0,0.35)] backdrop-blur-sm">
                        <div class="grid grid-cols-[1.2fr_0.8fr] gap-3 p-3">
                            <div class="relative overflow-hidden rounded-[1.4rem]">
                                <img
                                    src="{{ asset('assets/img/home/lion-ambition.jpg') }}"
                                    alt="Lion symbolisant l’ambition"
                                    class="h-full min-h-[17rem] w-full object-cover"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-ink/70 to-transparent"></div>
                                <div class="absolute bottom-4 left-4">
                                    <p class="text-[11px] uppercase tracking-[0.2em] text-gold/80">Ambition</p>
                                    <p class="mt-1 text-sm text-bone/85">Vision stratégique et puissance d’exécution.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3">
                                <div class="overflow-hidden rounded-[1.35rem] border border-white/10">
                                    <img
                                        src="{{ asset('assets/img/home/pont-vision.jpg') }}"
                                        alt="Pont illustrant la vision"
                                        class="h-40 w-full object-cover"
                                    >
                                </div>
                                <div class="rounded-[1.35rem] border border-white/10 bg-ink/75 p-4">
                                    <p class="text-[11px] uppercase tracking-[0.2em] text-gold/70">Mission</p>
                                    <p class="mt-3 font-display text-2xl leading-none text-bone">Conseiller, structurer, financer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-bone py-28 md:py-36">
    <div class="container grid gap-12 lg:grid-cols-12 lg:items-center lg:gap-16">
        <div class="lg:col-span-5">
            <div class="reveal overflow-hidden rounded-[2rem] bg-ink shadow-[0_30px_80px_rgba(19,12,5,0.18)]">
                <img
                    src="{{ asset('assets/img/home/pont-vision.jpg') }}"
                    alt="Pont de nuit"
                    class="h-[26rem] w-full object-cover"
                >
            </div>
        </div>

        <div class="lg:col-span-7">
            <span class="reveal text-eyebrow uppercase text-bronze">01 — Manifeste</span>
            <h2 class="reveal mt-8 font-display text-display-lg leading-[1.02] tracking-tightest text-ink">
                Une société de conseil financier <span class="italic text-bronze">à vocation de banque d’affaires</span>, pensée pour les projets d’investissement en Afrique.
            </h2>

            <div class="reveal mt-10 grid gap-8 text-base leading-relaxed text-ink/75 md:grid-cols-2 md:text-lg">
                <p>
                    Nous accompagnons les opérations stratégiques de nos clients avec une approche qui relie stratégie, financement, structuration et intelligence économique.
                </p>
                <p>
                    Notre valeur ajoutée repose sur une lecture fine des marchés africains, une discipline d’exécution internationale et une relation de confiance au plus haut niveau.
                </p>
            </div>

            <div class="reveal mt-10 flex flex-wrap gap-4">
                <a href="{{ route('presentation') }}" class="group inline-flex items-center gap-3 border-b border-ink/30 pb-2 text-ink transition-colors hover:border-gold">
                    <span class="text-sm tracking-wide">Présentation complète</span>
                    <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-ink py-28 text-bone md:py-36">
    <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay pointer-events-none"></div>

    <div class="container relative">
        <div class="mb-16 grid gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <x-section-heading
                    eyebrow="02 — Expertise"
                    title='Quatre expertises, <br><em class="italic text-gold font-normal">une même exigence.</em>'
                    :dark="true"
                >
                    Un éventail complet de services pour accompagner chaque étape d’un projet d’investissement, de la conception au financement.
                </x-section-heading>
            </div>

            <div class="reveal lg:col-span-4 lg:justify-self-end">
                <div class="flex items-center gap-4 rounded-[1.75rem] border border-white/10 bg-white/5 p-4">
                    <img
                        src="{{ asset('assets/img/home/sc-4-clic.jpg') }}"
                        alt="Lumière et précision"
                        class="h-16 w-16 rounded-2xl object-cover"
                    >
                    <div>
                        <p class="text-[11px] uppercase tracking-[0.2em] text-gold/70">Approche</p>
                        <p class="mt-2 text-sm leading-relaxed text-ivory/75">Un conseil exigeant, discret et calibré pour les décideurs.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($expertises as $e)
                <x-expertise-card :num="$e['num']" :title="$e['title']" :text="$e['text']" />
            @endforeach
        </div>
    </div>
</section>

<section class="bg-bone py-28 md:py-36">
    <div class="container">
        <div class="mb-20">
            <x-section-heading
                eyebrow="03 — Secteurs"
                title='Quatre marchés, <br><em class="italic text-bronze font-normal">une lecture continentale.</em>'
            >
                Nous concentrons notre action sur des secteurs structurants pour la souveraineté économique africaine.
            </x-section-heading>
        </div>

        <div class="grid auto-rows-[320px] grid-cols-1 gap-5 lg:grid-cols-12">
            @foreach ($sectors as $s)
                <x-sector-tile :name="$s['name']" :desc="$s['desc']" :span="$s['span']" />
            @endforeach
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-[#120b06] py-32 text-bone md:py-40">
    <div class="absolute inset-0">
        <img
            src="{{ asset('assets/img/home/lion-ambition.jpg') }}"
            alt="Lion en noir et blanc"
            class="h-full w-full object-cover object-center opacity-28"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(18,11,6,0.96)_0%,rgba(18,11,6,0.82)_48%,rgba(18,11,6,0.9)_100%)]"></div>
        <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    </div>

    <div class="container relative grid gap-12 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-7">
            <span class="reveal text-eyebrow uppercase text-gold/80">04 — Vision & valeurs</span>
            <p class="reveal mt-8 font-display text-[clamp(2rem,4.5vw,4rem)] leading-[1.08] tracking-tightest">
                <span class="text-gold">«</span> Faire émerger de nouveaux champions nationaux et régionaux, avec la rigueur d’un conseil <em class="italic">indépendant</em> et la précision d’une banque d’affaires. <span class="text-gold">»</span>
            </p>
        </div>

        <div class="reveal lg:col-span-5 lg:pl-8">
            <div class="rounded-[2rem] border border-white/10 bg-white/5 p-6 backdrop-blur-sm">
                @foreach ([
                    'Indépendance' => 'Un conseil libre de tout conflit, uniquement aligné sur l’intérêt du client.',
                    'Professionnalisme' => 'Une exécution internationale, rigoureuse, documentée et confidentielle.',
                    'Rigueur' => 'Des analyses serrées, des hypothèses testées et une lecture terrain des réalités locales.',
                ] as $k => $v)
                    <div class="{{ $loop->first ? '' : 'mt-6 border-t border-white/10 pt-6' }}">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-gold/70">0{{ $loop->iteration }}</p>
                        <h3 class="mt-2 font-display text-2xl text-bone">{{ $k }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-ivory/72">{{ $v }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-bone py-28 md:py-36">
    <div class="container">
        <div class="mb-20 grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-7">
                <x-section-heading
                    eyebrow="05 — Équipe"
                    title='Une direction de <em class="italic text-bronze font-normal">banque d’affaires</em>.'
                >
                    Des dirigeants expérimentés, capables d’articuler les exigences internationales à la réalité des marchés africains.
                </x-section-heading>
            </div>

            <div class="lg:col-span-5 lg:flex lg:items-end lg:justify-end">
                <a href="{{ route('team') }}" class="reveal group inline-flex items-center gap-3 border-b border-ink/30 pb-2 text-ink transition-colors hover:border-gold">
                    <span class="text-sm tracking-wide">Découvrir toute l’équipe</span>
                    <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 md:gap-16">
            @foreach ($team as $m)
                <x-team-card :name="$m['name']" :role="$m['role']" :bio="$m['bio']" :photo="$m['photo'] ?? null" />
            @endforeach
        </div>
    </div>
</section>

<section class="border-t border-ink/10 bg-bone py-28 md:py-36">
    <div class="container">
        <div class="mb-20 flex flex-col gap-12 lg:flex-row lg:items-end lg:justify-between">
            <x-section-heading
                eyebrow="06 — Publications"
                title='Notre lecture du <em class="italic text-bronze font-normal">continent.</em>'
            >
                Notes sectorielles, insights marché et tribunes: notre regard sur l’investissement en Afrique.
            </x-section-heading>

            <a href="{{ route('publications') }}" class="reveal group inline-flex w-fit items-center gap-3 border-b border-ink/30 pb-2 text-ink transition-colors hover:border-gold">
                <span class="text-sm tracking-wide">Toutes les publications</span>
                <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-10 md:grid-cols-3 md:gap-12">
            @foreach ($pubs as $p)
                <x-pub-card :date="$p['date']" :tag="$p['tag']" :title="$p['title']" />
            @endforeach
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-ink py-32 text-bone md:py-44">
    <div class="absolute inset-0">
        <img
            src="{{ asset('assets/img/home/building-mission.jpg') }}"
            alt="Horizon urbain"
            class="h-full w-full object-cover opacity-18"
        >
        <div class="absolute inset-0 bg-gradient-to-br from-ink via-espresso/95 to-soot"></div>
        <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    </div>

    <div class="container relative">
        <div class="grid gap-12 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <span class="reveal text-eyebrow uppercase text-gold/80">07 — Initier une conversation</span>
                <h2 class="reveal mt-8 font-display text-display-lg leading-[1.02] tracking-tightest">
                    Parlons de votre <em class="italic text-gold">projet.</em>
                </h2>
                <p class="reveal mt-8 max-w-2xl text-lg leading-relaxed text-ivory/78">
                    Un échange confidentiel, sans engagement, pour évaluer comment ARIES peut accompagner votre opération, votre croissance ou votre levée de fonds.
                </p>
            </div>

            <div class="lg:col-span-4 lg:flex lg:justify-end">
                <div class="reveal rounded-[2rem] border border-white/10 bg-white/5 p-6 backdrop-blur-sm">
                    <p class="text-[11px] uppercase tracking-[0.2em] text-gold/70">Contact direct</p>
                    <div class="mt-5 space-y-4 text-sm text-ivory/80">
                        <p><span class="block text-gold/85">Brazzaville</span>+242 06 97 99 88 5</p>
                        <p><span class="block text-gold/85">Washington</span>+1 646 389 14 37</p>
                        <p><span class="block text-gold/85">Email</span><a href="mailto:aries@aries-investissements.com" class="transition hover:text-gold">aries@aries-investissements.com</a></p>
                    </div>
                    <a href="{{ route('contact') }}" class="mt-6 inline-flex items-center gap-2 rounded-full bg-gold px-5 py-3 text-sm font-medium text-ink">
                        Prendre rendez-vous
                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
