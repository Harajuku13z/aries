@extends('layouts.app')

@section('title', 'Présentation — ARIES Investissements')

@section('content')

{{-- Page hero --}}
<section class="relative pt-40 pb-24 bg-ink text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ink via-soot to-espresso"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="container relative">
        <p class="reveal text-eyebrow uppercase text-gold/80">— Présentation</p>
        <h1 class="reveal mt-8 font-display text-display-xl tracking-tightest leading-[0.95] max-w-5xl">
            Une maison de conseil <em class="italic text-gold">indépendante</em>, dédiée à l’Afrique.
        </h1>
    </div>
</section>

{{-- Manifesto --}}
<section class="py-28 md:py-36 bg-bone">
    <div class="container grid grid-cols-1 lg:grid-cols-12 gap-16">
        <aside class="lg:col-span-4 reveal">
            <span class="text-eyebrow uppercase text-bronze">Notre raison d’être</span>
            <div class="h-px w-16 bg-gold mt-6"></div>
        </aside>
        <div class="lg:col-span-8 reveal space-y-8 text-ink/80 text-lg leading-relaxed">
            <p class="font-display text-display-md text-ink tracking-tightest leading-[1.05]">
                ARIES Investissements accompagne les investisseurs et porteurs de projets en Afrique.
            </p>
            <p>
                Nous nous positionnons sur la <strong class="text-ink">maîtrise de l’environnement</strong>, la <strong class="text-ink">connaissance des acteurs</strong> du marché et l’<strong class="text-ink">accompagnement stratégique</strong> des projets d’investissement — du cadrage initial à la clôture de l’opération.
            </p>
            <p>
                Basée en République du Congo, ARIES opère comme une société de conseil à vocation de banque d’affaires, au service de clients locaux, régionaux et internationaux.
            </p>
        </div>
    </div>
</section>

{{-- Mission --}}
<section class="py-28 md:py-36 bg-espresso text-bone relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-espresso via-soot to-ink"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="container relative">
        <div class="max-w-4xl reveal">
            <span class="text-eyebrow uppercase text-gold/80">Mission</span>
            <p class="mt-10 font-display text-[clamp(2rem,4.5vw,4.5rem)] leading-[1.05] tracking-tightest">
                <span class="text-gold">«</span> Faire émerger de nouveaux champions <em class="italic">nationaux et régionaux.</em> <span class="text-gold">»</span>
            </p>
        </div>
    </div>
</section>

{{-- Valeurs --}}
<section class="py-28 md:py-36 bg-bone">
    <div class="container">
        <x-section-heading
            eyebrow="Valeurs"
            title='Trois principes, <em class="italic text-bronze font-normal">non négociables.</em>'
            class="mb-20"
        />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-16 border-t border-ink/15 pt-16">
            @foreach ([
                'Indépendance' => 'Nous travaillons au seul service de l’intérêt du client, sans conflit d’agenda, sans produit à placer.',
                'Professionnalisme' => 'Nous appliquons les standards d’exécution d’une banque d’affaires internationale, avec la discrétion qui sied au conseil.',
                'Rigueur' => 'Nous construisons notre conseil sur l’analyse, la donnée, et la connaissance intime des marchés africains.',
            ] as $k => $v)
                <div class="reveal">
                    <span class="font-display text-5xl text-gold/80 block mb-6">0{{ $loop->iteration }}</span>
                    <h3 class="font-display text-2xl md:text-3xl text-ink mb-4">{{ $k }}</h3>
                    <p class="text-ink/70 leading-relaxed">{{ $v }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-24 bg-ink text-bone relative overflow-hidden">
    <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay"></div>
    <div class="container relative flex flex-col md:flex-row md:items-center md:justify-between gap-8">
        <h2 class="font-display text-display-md tracking-tightest max-w-2xl">
            Envie d’en savoir plus sur <em class="italic text-gold">notre méthode</em> ?
        </h2>
        <x-cta-button :href="route('expertise')">Nos expertises</x-cta-button>
    </div>
</section>

@endsection
