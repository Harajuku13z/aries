@extends('layouts.app')

@section('title', 'Secteurs d’activité — ARIES Investissements')

@section('content')

<section class="relative pt-40 pb-24 bg-ink text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ink via-mahogany/40 to-soot"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="container relative">
        <p class="reveal text-eyebrow uppercase text-gold/80">— Secteurs</p>
        <h1 class="reveal mt-8 font-display text-display-xl tracking-tightest leading-[0.95] max-w-5xl">
            Quatre marchés <em class="italic text-gold">structurants</em>.
        </h1>
        <p class="reveal mt-10 max-w-2xl text-lg md:text-xl text-ivory/80 leading-relaxed">
            ARIES intervient sur les secteurs qui dessinent la souveraineté économique du continent.
        </p>
    </div>
</section>

<section class="py-24 md:py-32 bg-bone">
    <div class="container space-y-32">
        @php
            $details = [
                ['name' => 'Infrastructures', 'kicker' => '01', 'text' => 'Énergie, transport, logistique, télécoms : nous accompagnons les opérations sur les actifs structurants — concessions, partenariats public-privé, financement de projets greenfield et brownfield.', 'image' => 'from-mahogany via-espresso to-ink'],
                ['name' => 'Immobilier',      'kicker' => '02', 'text' => 'Résidentiel premium, tertiaire, hôtellerie, mixed-use : structuration d’opérations immobilières et de véhicules dédiés à la fabrique urbaine africaine.', 'image' => 'from-bronze via-mahogany to-espresso'],
                ['name' => 'Agrobusiness',    'kicker' => '03', 'text' => 'Filières intégrées, transformation locale, logistique froide, sécurité alimentaire : accompagnement d’opérateurs et de fonds dédiés à la chaîne de valeur agricole.', 'image' => 'from-copper via-bronze to-soot'],
                ['name' => 'Technologie',     'kicker' => '04', 'text' => 'Fintech, infrastructures numériques, plateformes B2B, data : levée de fonds et conseil stratégique pour les acteurs de la souveraineté digitale africaine.', 'image' => 'from-amber via-bronze to-ink'],
            ];
        @endphp

        @foreach ($details as $i => $s)
            <article class="reveal grid grid-cols-1 lg:grid-cols-12 gap-12 items-center {{ $i % 2 ? 'lg:[&>*:first-child]:order-2' : '' }}">
                <div class="lg:col-span-7 aspect-[16/10] relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $s['image'] }}"></div>
                    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
                    <span class="absolute bottom-6 left-6 font-display text-[clamp(4rem,10vw,9rem)] text-gold/30 leading-none">{{ $s['kicker'] }}</span>
                </div>
                <div class="lg:col-span-5">
                    <span class="text-eyebrow uppercase text-bronze">Secteur · {{ $s['kicker'] }}</span>
                    <h2 class="mt-6 font-display text-display-md text-ink leading-[1.05] tracking-tightest">
                        {{ $s['name'] }}
                    </h2>
                    <p class="mt-6 text-ink/75 text-lg leading-relaxed max-w-reading">
                        {{ $s['text'] }}
                    </p>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section class="py-24 bg-ink text-bone relative overflow-hidden">
    <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay"></div>
    <div class="container relative flex flex-col md:flex-row md:items-center md:justify-between gap-8">
        <h2 class="font-display text-display-md tracking-tightest max-w-2xl">
            Une opération à <em class="italic text-gold">structurer</em> ?
        </h2>
        <x-cta-button :href="route('contact')">Échanger avec nous</x-cta-button>
    </div>
</section>

@endsection
