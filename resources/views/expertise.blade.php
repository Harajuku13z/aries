@extends('layouts.app')

@section('title', 'Expertise — ARIES Investissements')

@section('content')

<section class="relative pt-40 pb-24 bg-ink text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ink via-soot to-mahogany"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="container relative">
        <p class="reveal text-eyebrow uppercase text-gold/80">— Expertise</p>
        <h1 class="reveal mt-8 font-display text-display-xl tracking-tightest leading-[0.95] max-w-5xl">
            Quatre expertises, <em class="italic text-gold">une exécution.</em>
        </h1>
        <p class="reveal mt-10 max-w-2xl text-lg md:text-xl text-ivory/80 leading-relaxed">
            Un éventail complet de services pour accompagner chaque étape d’un projet d’investissement, du cadrage stratégique à la levée de fonds.
        </p>
    </div>
</section>

<section class="py-24 md:py-32 bg-bone">
    <div class="container">
        <div class="space-y-px">
            @foreach ($expertises as $e)
                <article class="reveal group grid grid-cols-1 lg:grid-cols-12 gap-8 py-12 md:py-16 border-t border-ink/15 hover:border-gold transition-colors duration-700">
                    <div class="lg:col-span-2">
                        <span class="font-display text-5xl md:text-6xl text-gold/80 block">{{ $e['num'] }}</span>
                    </div>
                    <div class="lg:col-span-5">
                        <h2 class="font-display text-display-sm md:text-display-md text-ink leading-[1.05] tracking-tightest">
                            {{ $e['title'] }}
                        </h2>
                    </div>
                    <div class="lg:col-span-5 lg:pl-6">
                        <p class="text-ink/75 text-base md:text-lg leading-relaxed max-w-reading">
                            {{ $e['text'] }}
                        </p>
                    </div>
                </article>
            @endforeach
            <div class="border-t border-ink/15"></div>
        </div>
    </div>
</section>

<section class="py-24 bg-ink text-bone relative overflow-hidden">
    <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay"></div>
    <div class="container relative flex flex-col md:flex-row md:items-center md:justify-between gap-8">
        <h2 class="font-display text-display-md tracking-tightest max-w-2xl">
            Un projet d’investissement en <em class="italic text-gold">tête</em> ?
        </h2>
        <x-cta-button :href="route('contact')">Nous contacter</x-cta-button>
    </div>
</section>

@endsection
